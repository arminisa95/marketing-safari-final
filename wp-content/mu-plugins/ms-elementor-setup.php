<?php
/**
 * Plugin Name: Marketing Safari - Elementor Page Setup
 * Description: Erstellt automatisch die pixel-perfekte Elementor Startseite
 */
defined('ABSPATH') || exit;

/* Reset: Besuche /wp-admin/?ms_reset=1 um die Seite neu zu erstellen */
add_action('init', function() {
    if (isset($_GET['ms_reset']) && current_user_can('manage_options')) {
        delete_option('ms_v3_done');
    }
});

add_action('init', 'ms_setup_elementor_page', 30);

/* ──────────────────────────────────────────────
   MAIN SETUP
   ────────────────────────────────────────────── */
function ms_setup_elementor_page() {
    if (get_option('ms_v3_done')) return;
    if (!class_exists('Elementor\Plugin'))   return;
    if (!is_user_logged_in())                return;

    /* find or create page */
    $q = get_posts(['post_type'=>'page','meta_key'=>'_ms_home','meta_value'=>'1','numberposts'=>1,'post_status'=>'any']);
    if ($q) {
        $pid = $q[0]->ID;
    } else {
        $pid = wp_insert_post(['post_title'=>'Startseite','post_name'=>'startseite','post_status'=>'publish','post_type'=>'page']);
        add_post_meta($pid, '_ms_home', '1');
    }
    if (!$pid || is_wp_error($pid)) return;

    $img = get_template_directory_uri() . '/images/';
    $data = json_encode(ms_build_page($img), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

    update_post_meta($pid, '_elementor_data',          wp_slash($data));
    update_post_meta($pid, '_elementor_edit_mode',     'builder');
    update_post_meta($pid, '_elementor_template_type', 'wp-page');
    update_post_meta($pid, '_elementor_version',       '3.25.0');
    update_post_meta($pid, '_wp_page_template',        'elementor_canvas');
    update_option('show_on_front', 'page');
    update_option('page_on_front', $pid);

    if (class_exists('\Elementor\Plugin')) {
        \Elementor\Plugin::$instance->files_manager->clear_cache();
    }
    update_option('ms_v3_done', 1);
}

/* ──────────────────────────────────────────────
   HELPER FUNCTIONS
   ────────────────────────────────────────────── */
function _p($t,$r,$b,$l) {
    return ['unit'=>'px','top'=>"$t",'right'=>"$r",'bottom'=>"$b",'left'=>"$l",'isLinked'=>false,
            'top_tablet'=>'','right_tablet'=>'','bottom_tablet'=>'','left_tablet'=>'',
            'top_mobile'=>'','right_mobile'=>'','bottom_mobile'=>'','left_mobile'=>''];
}
function _fs($size,$unit='px') { return ['unit'=>$unit,'size'=>$size,'sizes'=>[]]; }
function _br($r) { return ['unit'=>'px','top'=>"$r",'right'=>"$r",'bottom'=>"$r",'left'=>"$r",'isLinked'=>true]; }
function _id() { static $n=1; return substr(md5('ms'.($n++)), 0, 7); }

function _section($settings, $cols) {
    return ['id'=>_id(),'elType'=>'section','isInner'=>false,'settings'=>$settings,'elements'=>$cols,'widgetType'=>null];
}
function _inner($settings, $cols) {
    return ['id'=>_id(),'elType'=>'section','isInner'=>true,'settings'=>$settings,'elements'=>$cols,'widgetType'=>null];
}
function _col($pct, $settings, $widgets) {
    return ['id'=>_id(),'elType'=>'column','isInner'=>false,'settings'=>array_merge(['_column_size'=>$pct],$settings),'elements'=>$widgets];
}
function _w($type, $settings) {
    return ['id'=>_id(),'elType'=>'widget','widgetType'=>$type,'settings'=>$settings,'elements'=>[],'isInner'=>false];
}
function _heading($txt,$tag,$color,$size,$weight,$pad_b=0,$extra=[]) {
    return _w('heading', array_merge([
        'title'                      => $txt,
        'header_size'                => $tag,
        'title_color'                => $color,
        'typography_typography'      => 'custom',
        'typography_font_family'     => 'Poppins',
        'typography_font_size'       => _fs($size),
        'typography_font_weight'     => "$weight",
        'typography_line_height'     => _fs(1.15,'em'),
        '_padding'                   => _p(0,0,$pad_b,0),
    ], $extra));
}
function _text($html,$color,$size,$lh=1.7,$pad_b=0) {
    return _w('text-editor', [
        'editor'                 => $html,
        'text_color'             => $color,
        'typography_typography'  => 'custom',
        'typography_font_family' => 'Poppins',
        'typography_font_size'   => _fs($size),
        'typography_line_height' => _fs($lh,'em'),
        '_padding'               => _p(0,0,$pad_b,0),
    ]);
}
function _btn($label,$url,$bg,$color,$border='',$bc='') {
    $s = [
        'text'                            => $label,
        'link'                            => ['url'=>$url,'is_external'=>'','nofollow'=>''],
        'size'                            => 'sm',
        'border_radius'                   => _br(100),
        'background_color'                => $bg,
        'button_text_color'               => $color,
        'typography_font_family'          => 'Poppins',
        'typography_font_weight'          => '700',
        'typography_font_size'            => _fs(15),
        'text_padding'                    => _p(16,32,16,32),
        'button_hover_background_color'   => '',
        'button_hover_text_color'         => '',
        'hover_animation'                 => 'grow',
    ];
    if ($border) { $s['border_border']='solid'; $s['border_width']=_br(2); $s['border_color']=$bc; }
    return _w('button', $s);
}
function _img_w($url,$w=0) {
    $s = ['image'=>['url'=>$url,'id'=>0,'size'=>'full'],'image_size'=>'full','align'=>''];
    if ($w) $s['width'] = _fs($w);
    return _w('image', $s);
}
function _divider($color='rgba(255,255,255,0.1)',$mb=0) {
    return _w('divider', ['color'=>['color'=>$color],'_padding'=>_p(0,0,$mb,0),'gap'=>_fs(0),'weight'=>_fs(1)]);
}
function _spacer($h) { return _w('spacer', ['space'=>_fs($h)]); }

/* ──────────────────────────────────────────────
   PAGE BUILDER
   ────────────────────────────────────────────── */
function ms_build_page($img) {

    $green  = '#77E7AC';
    $orange = '#FF7B29';
    $yellow = '#FFEF5F';
    $purple = '#C29AFF';
    $cyan   = '#71E7FF';
    $black  = '#000000';
    $white  = '#FFFFFF';
    $muted  = 'rgba(255,255,255,0.72)';
    $dark_text = '#222222';

    return [

    /* ═══════════════════════════════════════════════════
       SECTION 1 — HERO
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $black,
        'height'                => '100vh',
        'content_position'      => 'stretch',
        'gap'                   => 'no',
        'padding'               => _p(0,0,0,0),
        'css_classes'           => 'ms-hero-section',
        'custom_css'            => '.ms-hero-section > .elementor-container { max-width:100%; width:100%; padding:0; }',
    ], [
        /* Left: photo */
        _col(46, [
            'css_classes'        => 'ms-hero-image-col',
            'content_position'   => 'stretch',
            'padding'            => _p(0,0,0,0),
        ], [
            _img_w($img.'marketingsafari-hero-bild.webp'),
        ]),
        /* Right: content */
        _col(54, [
            'css_classes'      => 'ms-hero-content-col',
            'content_position' => 'middle',
            'padding'          => _p(140,80,80,56),
        ], [
            _heading('Marketing Agentur', 'p', $green, 13, 600, 16, [
                'typography_text_transform' => 'uppercase',
                'typography_letter_spacing' => _fs(1.5),
            ]),
            _heading('Marketing, das seinen Weg <span style="color:'.$green.'">kennt.</span>', 'h1', $white, 60, 800, 24),
            _text('<p>Wir jagen keine Likes. Wir gewinnen Kunden.<br>Datengetriebene Strategien &amp; kreativer Content<br>für deinen nachhaltigen Wachstum.</p>', $muted, 18, 1.7, 40),
            /* Buttons row */
            _inner(['gap'=>'no','padding'=>_p(0,0,48,0)], [
                _col(50, ['padding'=>_p(0,8,0,0)], [
                    _btn('Kostenloses Erstgespräch →', '#kontakt', $orange, $white),
                ]),
                _col(50, ['padding'=>_p(0,0,0,8)], [
                    _btn('Leistungen entdecken', '#leistungen', 'transparent', $white, 'solid', 'rgba(255,255,255,0.35)'),
                ]),
            ]),
            /* Stats / Icons */
            _inner(['gap'=>'no','padding'=>_p(0,0,0,0)], [
                _col(33, ['padding'=>_p(0,20,0,0)], [
                    _img_w($img.'marketingsafari-icon-gruen.svg', 40),
                    _text('<p><strong style="color:'.$white.';font-size:13px">Online Marketing</strong><br><span style="font-size:12px">Safari</span></p>', $muted, 13, 1.4),
                ]),
                _col(33, ['padding'=>_p(0,20,0,0)], [
                    _img_w($img.'marketingsafari-icon-orange.svg', 40),
                    _text('<p><strong style="color:'.$white.';font-size:13px">Content Creation</strong><br><span style="font-size:12px">Safari</span></p>', $muted, 13, 1.4),
                ]),
                _col(34, ['padding'=>_p(0,0,0,0)], [
                    _img_w($img.'marketingsafari-icon-lila.svg', 40),
                    _text('<p><strong style="color:'.$white.';font-size:13px">Strategie</strong><br><span style="font-size:12px">&amp; Beratung</span></p>', $muted, 13, 1.4),
                ]),
            ]),
        ]),
    ]),

    /* ═══════════════════════════════════════════════════
       SECTION 2 — INTRO
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $white,
        'padding'               => _p(100,0,100,0),
        'css_classes'           => 'ms-intro-section',
    ], [
        _col(50, ['padding'=>_p(0,60,0,60)], [
            _heading('Was wir tun', 'p', $orange, 13, 600, 12, ['typography_text_transform'=>'uppercase','typography_letter_spacing'=>_fs(1.5)]),
            _heading('Zwei Safaris.<br><span style="color:'.$green.'">Ein Ziel.</span>', 'h2', $dark_text, 46, 800, 24),
            _text('<p>Marketing Safari steht für klare Strategie, ehrliche Kommunikation und messbare Ergebnisse. Wir bieten zwei spezialisierte Pakete, die perfekt auf deine Bedürfnisse zugeschnitten sind.</p>', '#444444', 16, 1.8, 16),
            _text('<p>Kein Schnickschnack. Keine leeren Versprechen. Nur echtes, nachhaltiges Wachstum für dein Business.</p>', '#444444', 16, 1.8, 32),
            _btn('Safaris entdecken →', '#leistungen', $orange, $white),
        ]),
        _col(50, ['padding'=>_p(0,60,0,20)], [
            _img_w($img.'marketingsafari-meeting.webp'),
        ]),
    ]),

    /* ═══════════════════════════════════════════════════
       SECTION 3 — SERVICES (dark)
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $black,
        'padding'               => _p(100,0,100,0),
        'css_classes'           => 'ms-services-section',
        '_element_id'           => 'leistungen',
    ], [
        /* Heading row */
        _col(100, ['padding'=>_p(0,60,48,60)], [
            _heading('Unsere Leistungen', 'p', $green, 13, 600, 12, ['typography_text_transform'=>'uppercase','typography_letter_spacing'=>_fs(1.5)]),
            _heading('Deine Safari beginnt hier', 'h2', $white, 46, 800, 0),
        ]),
        /* Card 1 */
        _col(50, ['padding'=>_p(0,16,0,60),'css_classes'=>'ms-service-card'], [
            _img_w($img.'marketingsafari-icon-gruen.svg', 64),
            _spacer(16),
            _heading('Online Marketing Safari', 'h3', $white, 24, 700, 12),
            _text('<p>Maßgeschneiderte Online-Marketing-Strategie, die deine Zielgruppe erreicht und echte Kunden gewinnt.</p>', $muted, 15, 1.7, 24),
            _w('icon-list', [
                'icon_list' => [
                    ['text'=>'SEO & Content Marketing','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$green],
                    ['text'=>'Social Media Marketing','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$green],
                    ['text'=>'Google Ads & Performance','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$green],
                    ['text'=>'E-Mail Marketing','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$green],
                    ['text'=>'Analytics & Reporting','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$green],
                ],
                'icon_color'           => $green,
                'text_color'           => $white,
                'typography_font_size' => _fs(14),
                'typography_font_family' => 'Poppins',
                'space_between'        => _fs(12),
            ]),
        ]),
        /* Card 2 */
        _col(50, ['padding'=>_p(0,60,0,16),'css_classes'=>'ms-service-card'], [
            _img_w($img.'marketingsafari-icon-orange.svg', 64),
            _spacer(16),
            _heading('Content Creation Safari', 'h3', $white, 24, 700, 12),
            _text('<p>Professioneller Content, der deine Marke zum Leben erweckt – von der Idee bis zur Veröffentlichung.</p>', $muted, 15, 1.7, 24),
            _w('icon-list', [
                'icon_list' => [
                    ['text'=>'Foto & Video Produktion','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$orange],
                    ['text'=>'Social Media Content','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$orange],
                    ['text'=>'Blog & Textproduktion','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$orange],
                    ['text'=>'Grafik Design & Branding','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$orange],
                    ['text'=>'Reels & Stories','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check'],'icon_color'=>$orange],
                ],
                'icon_color'           => $orange,
                'text_color'           => $white,
                'typography_font_size' => _fs(14),
                'typography_font_family' => 'Poppins',
                'space_between'        => _fs(12),
            ]),
        ]),
    ]),

    /* ═══════════════════════════════════════════════════
       SECTION 4 — PROCESS (5 colored steps)
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $white,
        'padding'               => _p(80,0,0,0),
        'css_classes'           => 'ms-process-section',
        '_element_id'           => 'safari',
    ], [
        _col(100, ['padding'=>_p(0,60,40,60)], [
            _heading('Der Prozess', 'p', $orange, 13, 600, 12, ['typography_text_transform'=>'uppercase','typography_letter_spacing'=>_fs(1.5)]),
            _heading('So findet deine <span style="color:'.$green.'">Safari statt.</span>', 'h2', $dark_text, 46, 800, 0),
        ]),
    ]),
    /* Step rows - each full width with colored right strip */
    ...ms_process_steps($img),

    /* ═══════════════════════════════════════════════════
       SECTION 5 — IMPRESSIONS
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $white,
        'padding'               => _p(80,0,80,0),
    ], [
        _col(100, ['padding'=>_p(0,60,40,60)], [
            _heading('Einblicke', 'p', $orange, 13, 600, 12, ['typography_text_transform'=>'uppercase','typography_letter_spacing'=>_fs(1.5)]),
            _heading('Impressionen', 'h2', $dark_text, 40, 800, 0),
        ]),
        _col(33, ['padding'=>_p(0,8,0,60)], [_img_w($img.'marketingsafari-slider-1-1.webp')]),
        _col(34, ['padding'=>_p(0,8,0,8)], [_img_w($img.'marketingsafari-slider-1-2.webp')]),
        _col(33, ['padding'=>_p(0,60,0,8)], [_img_w($img.'marketingsafari-slider-1-3.webp')]),
    ]),

    /* ═══════════════════════════════════════════════════
       SECTION 6 — CONTACT ORANGE
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $black,
        'padding'               => _p(100,0,0,0),
        '_element_id'           => 'kontakt',
    ], [
        _col(100, ['padding'=>_p(0,60,60,60),'css_classes'=>'ms-booking-orange'], [
            _inner(['gap'=>'no','padding'=>_p(60,60,60,60),'background_background'=>'classic','background_color'=>$orange,'border_border'=>'solid','border_width'=>_br(2),'border_color'=>$black,'border_radius'=>_br(25)], [
                _col(50, ['padding'=>_p(0,40,0,0)], [
                    _heading('Online Marketing<br>Safari anfragen', 'h2', $black, 38, 800, 16),
                    _text('<p>Bereit für mehr Reichweite, mehr Kunden und nachhaltiges Wachstum? Starte jetzt deine Online Marketing Safari.</p>', 'rgba(0,0,0,0.75)', 15, 1.7, 24),
                    _w('icon-list', [
                        'icon_list' => [
                            ['text'=>'Kostenloses Erstgespräch','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check']],
                            ['text'=>'Individuelle Strategie','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check']],
                            ['text'=>'Messbare Ergebnisse','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check']],
                        ],
                        'icon_color'           => $black,
                        'text_color'           => $black,
                        'typography_font_size' => _fs(14),
                        'typography_font_weight' => '600',
                        'space_between'        => _fs(10),
                    ]),
                ]),
                _col(50, [], [
                    _w('text-editor', ['editor'=>'<form style="display:flex;flex-direction:column;gap:12px;" method="post">
<div style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
  <input type="text" name="vorname" placeholder="Vorname" style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none">
  <input type="text" name="nachname" placeholder="Nachname" style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none">
</div>
<input type="email" name="email" placeholder="E-Mail Adresse" style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none">
<input type="text" name="firma" placeholder="Unternehmen" style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none">
<textarea name="nachricht" rows="4" placeholder="Deine Nachricht..." style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none;resize:vertical"></textarea>
<button type="submit" style="padding:16px 36px;background:#000;color:#fff;border:none;border-radius:100px;font-family:Poppins,sans-serif;font-size:15px;font-weight:700;cursor:pointer;width:fit-content">Safari anfragen →</button>
</form>']),
                ]),
            ]),
        ]),
    ]),

    /* ═══════════════════════════════════════════════════
       SECTION 7 — CONTACT GREEN
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $black,
        'padding'               => _p(0,0,100,0),
    ], [
        _col(100, ['padding'=>_p(0,60,0,60),'css_classes'=>'ms-booking-green'], [
            _inner(['gap'=>'no','padding'=>_p(60,60,60,60),'background_background'=>'classic','background_color'=>$green,'border_border'=>'solid','border_width'=>_br(2),'border_color'=>$black,'border_radius'=>_br(25)], [
                _col(50, ['padding'=>_p(0,40,0,0)], [
                    _heading('Content Creation<br>Safari anfragen', 'h2', $black, 38, 800, 16),
                    _text('<p>Von Fotos bis Videos, von Posts bis Reels – wir produzieren Content, der deine Zielgruppe begeistert und konvertiert.</p>', 'rgba(0,0,0,0.75)', 15, 1.7, 24),
                    _w('icon-list', [
                        'icon_list' => [
                            ['text'=>'Professionelle Produktion','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check']],
                            ['text'=>'Kreative Konzepte','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check']],
                            ['text'=>'Schnelle Lieferung','selected_icon'=>['library'=>'fa-solid','value'=>'fas fa-check']],
                        ],
                        'icon_color'           => $black,
                        'text_color'           => $black,
                        'typography_font_size' => _fs(14),
                        'typography_font_weight' => '600',
                        'space_between'        => _fs(10),
                    ]),
                ]),
                _col(50, [], [
                    _w('text-editor', ['editor'=>'<form style="display:flex;flex-direction:column;gap:12px;" method="post">
<div style="display:grid;grid-template-columns:1fr 1fr;gap:12px">
  <input type="text" name="vorname" placeholder="Vorname" style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none">
  <input type="text" name="nachname" placeholder="Nachname" style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none">
</div>
<input type="email" name="email" placeholder="E-Mail Adresse" style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none">
<input type="text" name="firma" placeholder="Unternehmen" style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none">
<textarea name="nachricht" rows="4" placeholder="Beschreibe deinen Content-Bedarf..." style="padding:14px 18px;border:2px solid rgba(0,0,0,0.2);border-radius:8px;font-family:Poppins,sans-serif;font-size:14px;background:#fff;outline:none;resize:vertical"></textarea>
<button type="submit" style="padding:16px 36px;background:#000;color:#fff;border:none;border-radius:100px;font-family:Poppins,sans-serif;font-size:15px;font-weight:700;cursor:pointer;width:fit-content">Content anfragen →</button>
</form>']),
                ]),
            ]),
        ]),
    ]),

    /* ═══════════════════════════════════════════════════
       SECTION 8 — ABOUT
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $white,
        'padding'               => _p(100,0,100,0),
    ], [
        _col(50, ['padding'=>_p(0,60,0,60)], [
            _heading('Über Marketing Safari', 'p', $orange, 13, 600, 12, ['typography_text_transform'=>'uppercase','typography_letter_spacing'=>_fs(1.5)]),
            _heading('Herzlich <span style="color:'.$green.'">Willkommen!</span>', 'h2', $dark_text, 44, 800, 24),
            _text('<p>Marketing Safari ist deine Agentur für ehrliches, effektives und kreatives Marketing. Wir glauben daran, dass erfolgreiches Marketing auf echten Beziehungen und echtem Mehrwert basiert.</p>', '#444', 16, 1.8, 16),
            _text('<p>Als spezialisierte Boutique-Agentur bieten wir persönliche Betreuung, direkte Kommunikation und Strategien, die wirklich funktionieren. Dein Erfolg ist unsere Mission.</p>', '#444', 16, 1.8, 32),
            _btn('Jetzt starten →', '#kontakt', $orange, $white),
        ]),
        _col(50, ['padding'=>_p(0,60,0,20)], [
            _img_w($img.'marketingsafari-meeting.webp'),
        ]),
    ]),

    /* ═══════════════════════════════════════════════════
       SECTION 9 — TEAM
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $white,
        'padding'               => _p(0,0,100,0),
        '_element_id'           => 'ueber-mich',
    ], [
        _col(50, ['padding'=>_p(0,20,0,60)], [
            _img_w($img.'marketingsafari-slider-1-5.webp'),
        ]),
        _col(50, ['padding'=>_p(0,60,0,40),'content_position'=>'middle'], [
            _heading('Über mich', 'p', $orange, 13, 600, 12, ['typography_text_transform'=>'uppercase','typography_letter_spacing'=>_fs(1.5)]),
            _heading('Dein Partner für <span style="color:'.$green.'">echtes Marketing.</span>', 'h2', $dark_text, 40, 800, 24),
            _text('<p>Ich bin leidenschaftlicher Marketeer mit jahrelanger Erfahrung in digitalen Strategien, Content-Produktion und Performance-Marketing. Marketing Safari ist mehr als eine Agentur – es ist meine Mission.</p>', '#444', 16, 1.8, 16),
            _text('<p>Datengetrieben, kreativ und immer mit dem Ziel, echte Ergebnisse zu liefern. Keine Spielereien, keine leeren Versprechen.</p>', '#444', 16, 1.8, 32),
        ]),
    ]),

    /* ═══════════════════════════════════════════════════
       SECTION 10 — GALLERY
       ═══════════════════════════════════════════════════ */
    _section([
        'background_background' => 'classic',
        'background_color'      => $white,
        'padding'               => _p(80,0,80,0),
    ], [
        _col(100, ['padding'=>_p(0,60,40,60)], [
            _heading('Galerie', 'p', $orange, 13, 600, 12, ['typography_text_transform'=>'uppercase','typography_letter_spacing'=>_fs(1.5)]),
            _heading('Einblicke in unsere Arbeit', 'h2', $dark_text, 40, 800, 0),
        ]),
        _col(33, ['padding'=>_p(0,8,0,60)], [_img_w($img.'marketingsafari-slider-1-1.webp')]),
        _col(34, ['padding'=>_p(0,8,0,8)],  [_img_w($img.'marketingsafari-slider-1-2.webp')]),
        _col(33, ['padding'=>_p(0,60,0,8)], [_img_w($img.'marketingsafari-slider-1-3.webp')]),
        _col(33, ['padding'=>_p(0,8,16,60)],[_img_w($img.'marketingsafari-slider-1-4.webp')]),
        _col(34, ['padding'=>_p(0,8,16,8)], [_img_w($img.'marketingsafari-slider-1-5.webp')]),
        _col(33, ['padding'=>_p(0,60,16,8)],[_img_w($img.'marketingsafari-slider-1-6.webp')]),
    ]),

    ]; // end return
}

function ms_process_steps($img) {
    $steps = [
        ['num'=>1,'title'=>'Kennenlernen & Analyse','desc'=>'Wir lernen dein Business kennen, analysieren den Markt und definieren gemeinsam deine Ziele.','color'=>'#FFEF5F'],
        ['num'=>2,'title'=>'Strategie entwickeln','desc'=>'Basierend auf den Erkenntnissen entwickeln wir eine maßgeschneiderte Marketing-Strategie.','color'=>'#77E7AC'],
        ['num'=>3,'title'=>'Umsetzung starten','desc'=>'Wir setzen die Strategie konsequent und kreativ um – schnell, präzise und auf den Punkt.','color'=>'#FF7B29'],
        ['num'=>4,'title'=>'Optimieren & Skalieren','desc'=>'Kontinuierliches Monitoring und datenbasierte Optimierung für maximale Performance.','color'=>'#C29AFF'],
        ['num'=>5,'title'=>'Erfolg messen','desc'=>'Transparentes Reporting und klare KPIs zeigen dir, was dein Marketing-Investment bringt.','color'=>'#71E7FF'],
    ];
    $rows = [];
    foreach ($steps as $s) {
        $rows[] = _section([
            'background_background' => 'classic',
            'background_color'      => '#FFFFFF',
            'padding'               => _p(0,0,0,0),
            'gap'                   => 'no',
            'css_classes'           => 'ms-process-step',
        ], [
            _col(16, ['padding'=>_p(20,20,20,60),'content_position'=>'middle'], [
                _img_w($img.'marketingsafari-icon-nummer-'.$s['num'].'.svg', 58),
            ]),
            _col(68, ['padding'=>_p(20,20,20,20),'content_position'=>'middle'], [
                _heading($s['title'], 'h3', '#000000', 18, 700, 4),
                _text('<p>'.$s['desc'].'</p>', '#555555', 14, 1.5),
            ]),
            _col(16, [
                'padding'               => _p(0,0,0,0),
                'content_position'      => 'stretch',
                'background_background' => 'classic',
                'background_color'      => $s['color'],
                'css_classes'           => 'ms-step-color-bar',
            ], [_spacer(20)]),
        ]);
    }
    return $rows;
}
