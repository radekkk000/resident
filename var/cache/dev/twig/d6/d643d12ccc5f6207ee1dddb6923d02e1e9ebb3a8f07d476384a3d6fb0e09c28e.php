<?php

/* resident/vendor/font-awesome/scss/_variables.scss */
class __TwigTemplate_9481ae64a82e2ed22f47ed7c86a51ed002efee25a2398e5b4f8e744e5928047e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdba9461a9fedff5376513e5a8ff81b8aec3075669ffababb45502ab4fd2797b = $this->env->getExtension("native_profiler");
        $__internal_fdba9461a9fedff5376513e5a8ff81b8aec3075669ffababb45502ab4fd2797b->enter($__internal_fdba9461a9fedff5376513e5a8ff81b8aec3075669ffababb45502ab4fd2797b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "resident/vendor/font-awesome/scss/_variables.scss"));

        // line 1
        echo "// Variables
// --------------------------

\$fa-font-path:        \"../fonts\" !default;
\$fa-font-size-base:   14px !default;
\$fa-line-height-base: 1 !default;
//\$fa-font-path:        \"//netdna.bootstrapcdn.com/font-awesome/4.6.3/fonts\" !default; // for referencing Bootstrap CDN font files directly
\$fa-css-prefix:       fa !default;
\$fa-version:          \"4.6.3\" !default;
\$fa-border-color:     #eee !default;
\$fa-inverse:          #fff !default;
\$fa-li-width:         (30em / 14) !default;

\$fa-var-500px: \"\\f26e\";
\$fa-var-adjust: \"\\f042\";
\$fa-var-adn: \"\\f170\";
\$fa-var-align-center: \"\\f037\";
\$fa-var-align-justify: \"\\f039\";
\$fa-var-align-left: \"\\f036\";
\$fa-var-align-right: \"\\f038\";
\$fa-var-amazon: \"\\f270\";
\$fa-var-ambulance: \"\\f0f9\";
\$fa-var-american-sign-language-interpreting: \"\\f2a3\";
\$fa-var-anchor: \"\\f13d\";
\$fa-var-android: \"\\f17b\";
\$fa-var-angellist: \"\\f209\";
\$fa-var-angle-double-down: \"\\f103\";
\$fa-var-angle-double-left: \"\\f100\";
\$fa-var-angle-double-right: \"\\f101\";
\$fa-var-angle-double-up: \"\\f102\";
\$fa-var-angle-down: \"\\f107\";
\$fa-var-angle-left: \"\\f104\";
\$fa-var-angle-right: \"\\f105\";
\$fa-var-angle-up: \"\\f106\";
\$fa-var-apple: \"\\f179\";
\$fa-var-archive: \"\\f187\";
\$fa-var-area-chart: \"\\f1fe\";
\$fa-var-arrow-circle-down: \"\\f0ab\";
\$fa-var-arrow-circle-left: \"\\f0a8\";
\$fa-var-arrow-circle-o-down: \"\\f01a\";
\$fa-var-arrow-circle-o-left: \"\\f190\";
\$fa-var-arrow-circle-o-right: \"\\f18e\";
\$fa-var-arrow-circle-o-up: \"\\f01b\";
\$fa-var-arrow-circle-right: \"\\f0a9\";
\$fa-var-arrow-circle-up: \"\\f0aa\";
\$fa-var-arrow-down: \"\\f063\";
\$fa-var-arrow-left: \"\\f060\";
\$fa-var-arrow-right: \"\\f061\";
\$fa-var-arrow-up: \"\\f062\";
\$fa-var-arrows: \"\\f047\";
\$fa-var-arrows-alt: \"\\f0b2\";
\$fa-var-arrows-h: \"\\f07e\";
\$fa-var-arrows-v: \"\\f07d\";
\$fa-var-asl-interpreting: \"\\f2a3\";
\$fa-var-assistive-listening-systems: \"\\f2a2\";
\$fa-var-asterisk: \"\\f069\";
\$fa-var-at: \"\\f1fa\";
\$fa-var-audio-description: \"\\f29e\";
\$fa-var-automobile: \"\\f1b9\";
\$fa-var-backward: \"\\f04a\";
\$fa-var-balance-scale: \"\\f24e\";
\$fa-var-ban: \"\\f05e\";
\$fa-var-bank: \"\\f19c\";
\$fa-var-bar-chart: \"\\f080\";
\$fa-var-bar-chart-o: \"\\f080\";
\$fa-var-barcode: \"\\f02a\";
\$fa-var-bars: \"\\f0c9\";
\$fa-var-battery-0: \"\\f244\";
\$fa-var-battery-1: \"\\f243\";
\$fa-var-battery-2: \"\\f242\";
\$fa-var-battery-3: \"\\f241\";
\$fa-var-battery-4: \"\\f240\";
\$fa-var-battery-empty: \"\\f244\";
\$fa-var-battery-full: \"\\f240\";
\$fa-var-battery-half: \"\\f242\";
\$fa-var-battery-quarter: \"\\f243\";
\$fa-var-battery-three-quarters: \"\\f241\";
\$fa-var-bed: \"\\f236\";
\$fa-var-beer: \"\\f0fc\";
\$fa-var-behance: \"\\f1b4\";
\$fa-var-behance-square: \"\\f1b5\";
\$fa-var-bell: \"\\f0f3\";
\$fa-var-bell-o: \"\\f0a2\";
\$fa-var-bell-slash: \"\\f1f6\";
\$fa-var-bell-slash-o: \"\\f1f7\";
\$fa-var-bicycle: \"\\f206\";
\$fa-var-binoculars: \"\\f1e5\";
\$fa-var-birthday-cake: \"\\f1fd\";
\$fa-var-bitbucket: \"\\f171\";
\$fa-var-bitbucket-square: \"\\f172\";
\$fa-var-bitcoin: \"\\f15a\";
\$fa-var-black-tie: \"\\f27e\";
\$fa-var-blind: \"\\f29d\";
\$fa-var-bluetooth: \"\\f293\";
\$fa-var-bluetooth-b: \"\\f294\";
\$fa-var-bold: \"\\f032\";
\$fa-var-bolt: \"\\f0e7\";
\$fa-var-bomb: \"\\f1e2\";
\$fa-var-book: \"\\f02d\";
\$fa-var-bookmark: \"\\f02e\";
\$fa-var-bookmark-o: \"\\f097\";
\$fa-var-braille: \"\\f2a1\";
\$fa-var-briefcase: \"\\f0b1\";
\$fa-var-btc: \"\\f15a\";
\$fa-var-bug: \"\\f188\";
\$fa-var-building: \"\\f1ad\";
\$fa-var-building-o: \"\\f0f7\";
\$fa-var-bullhorn: \"\\f0a1\";
\$fa-var-bullseye: \"\\f140\";
\$fa-var-bus: \"\\f207\";
\$fa-var-buysellads: \"\\f20d\";
\$fa-var-cab: \"\\f1ba\";
\$fa-var-calculator: \"\\f1ec\";
\$fa-var-calendar: \"\\f073\";
\$fa-var-calendar-check-o: \"\\f274\";
\$fa-var-calendar-minus-o: \"\\f272\";
\$fa-var-calendar-o: \"\\f133\";
\$fa-var-calendar-plus-o: \"\\f271\";
\$fa-var-calendar-times-o: \"\\f273\";
\$fa-var-camera: \"\\f030\";
\$fa-var-camera-retro: \"\\f083\";
\$fa-var-car: \"\\f1b9\";
\$fa-var-caret-down: \"\\f0d7\";
\$fa-var-caret-left: \"\\f0d9\";
\$fa-var-caret-right: \"\\f0da\";
\$fa-var-caret-square-o-down: \"\\f150\";
\$fa-var-caret-square-o-left: \"\\f191\";
\$fa-var-caret-square-o-right: \"\\f152\";
\$fa-var-caret-square-o-up: \"\\f151\";
\$fa-var-caret-up: \"\\f0d8\";
\$fa-var-cart-arrow-down: \"\\f218\";
\$fa-var-cart-plus: \"\\f217\";
\$fa-var-cc: \"\\f20a\";
\$fa-var-cc-amex: \"\\f1f3\";
\$fa-var-cc-diners-club: \"\\f24c\";
\$fa-var-cc-discover: \"\\f1f2\";
\$fa-var-cc-jcb: \"\\f24b\";
\$fa-var-cc-mastercard: \"\\f1f1\";
\$fa-var-cc-paypal: \"\\f1f4\";
\$fa-var-cc-stripe: \"\\f1f5\";
\$fa-var-cc-visa: \"\\f1f0\";
\$fa-var-certificate: \"\\f0a3\";
\$fa-var-chain: \"\\f0c1\";
\$fa-var-chain-broken: \"\\f127\";
\$fa-var-check: \"\\f00c\";
\$fa-var-check-circle: \"\\f058\";
\$fa-var-check-circle-o: \"\\f05d\";
\$fa-var-check-square: \"\\f14a\";
\$fa-var-check-square-o: \"\\f046\";
\$fa-var-chevron-circle-down: \"\\f13a\";
\$fa-var-chevron-circle-left: \"\\f137\";
\$fa-var-chevron-circle-right: \"\\f138\";
\$fa-var-chevron-circle-up: \"\\f139\";
\$fa-var-chevron-down: \"\\f078\";
\$fa-var-chevron-left: \"\\f053\";
\$fa-var-chevron-right: \"\\f054\";
\$fa-var-chevron-up: \"\\f077\";
\$fa-var-child: \"\\f1ae\";
\$fa-var-chrome: \"\\f268\";
\$fa-var-circle: \"\\f111\";
\$fa-var-circle-o: \"\\f10c\";
\$fa-var-circle-o-notch: \"\\f1ce\";
\$fa-var-circle-thin: \"\\f1db\";
\$fa-var-clipboard: \"\\f0ea\";
\$fa-var-clock-o: \"\\f017\";
\$fa-var-clone: \"\\f24d\";
\$fa-var-close: \"\\f00d\";
\$fa-var-cloud: \"\\f0c2\";
\$fa-var-cloud-download: \"\\f0ed\";
\$fa-var-cloud-upload: \"\\f0ee\";
\$fa-var-cny: \"\\f157\";
\$fa-var-code: \"\\f121\";
\$fa-var-code-fork: \"\\f126\";
\$fa-var-codepen: \"\\f1cb\";
\$fa-var-codiepie: \"\\f284\";
\$fa-var-coffee: \"\\f0f4\";
\$fa-var-cog: \"\\f013\";
\$fa-var-cogs: \"\\f085\";
\$fa-var-columns: \"\\f0db\";
\$fa-var-comment: \"\\f075\";
\$fa-var-comment-o: \"\\f0e5\";
\$fa-var-commenting: \"\\f27a\";
\$fa-var-commenting-o: \"\\f27b\";
\$fa-var-comments: \"\\f086\";
\$fa-var-comments-o: \"\\f0e6\";
\$fa-var-compass: \"\\f14e\";
\$fa-var-compress: \"\\f066\";
\$fa-var-connectdevelop: \"\\f20e\";
\$fa-var-contao: \"\\f26d\";
\$fa-var-copy: \"\\f0c5\";
\$fa-var-copyright: \"\\f1f9\";
\$fa-var-creative-commons: \"\\f25e\";
\$fa-var-credit-card: \"\\f09d\";
\$fa-var-credit-card-alt: \"\\f283\";
\$fa-var-crop: \"\\f125\";
\$fa-var-crosshairs: \"\\f05b\";
\$fa-var-css3: \"\\f13c\";
\$fa-var-cube: \"\\f1b2\";
\$fa-var-cubes: \"\\f1b3\";
\$fa-var-cut: \"\\f0c4\";
\$fa-var-cutlery: \"\\f0f5\";
\$fa-var-dashboard: \"\\f0e4\";
\$fa-var-dashcube: \"\\f210\";
\$fa-var-database: \"\\f1c0\";
\$fa-var-deaf: \"\\f2a4\";
\$fa-var-deafness: \"\\f2a4\";
\$fa-var-dedent: \"\\f03b\";
\$fa-var-delicious: \"\\f1a5\";
\$fa-var-desktop: \"\\f108\";
\$fa-var-deviantart: \"\\f1bd\";
\$fa-var-diamond: \"\\f219\";
\$fa-var-digg: \"\\f1a6\";
\$fa-var-dollar: \"\\f155\";
\$fa-var-dot-circle-o: \"\\f192\";
\$fa-var-download: \"\\f019\";
\$fa-var-dribbble: \"\\f17d\";
\$fa-var-dropbox: \"\\f16b\";
\$fa-var-drupal: \"\\f1a9\";
\$fa-var-edge: \"\\f282\";
\$fa-var-edit: \"\\f044\";
\$fa-var-eject: \"\\f052\";
\$fa-var-ellipsis-h: \"\\f141\";
\$fa-var-ellipsis-v: \"\\f142\";
\$fa-var-empire: \"\\f1d1\";
\$fa-var-envelope: \"\\f0e0\";
\$fa-var-envelope-o: \"\\f003\";
\$fa-var-envelope-square: \"\\f199\";
\$fa-var-envira: \"\\f299\";
\$fa-var-eraser: \"\\f12d\";
\$fa-var-eur: \"\\f153\";
\$fa-var-euro: \"\\f153\";
\$fa-var-exchange: \"\\f0ec\";
\$fa-var-exclamation: \"\\f12a\";
\$fa-var-exclamation-circle: \"\\f06a\";
\$fa-var-exclamation-triangle: \"\\f071\";
\$fa-var-expand: \"\\f065\";
\$fa-var-expeditedssl: \"\\f23e\";
\$fa-var-external-link: \"\\f08e\";
\$fa-var-external-link-square: \"\\f14c\";
\$fa-var-eye: \"\\f06e\";
\$fa-var-eye-slash: \"\\f070\";
\$fa-var-eyedropper: \"\\f1fb\";
\$fa-var-fa: \"\\f2b4\";
\$fa-var-facebook: \"\\f09a\";
\$fa-var-facebook-f: \"\\f09a\";
\$fa-var-facebook-official: \"\\f230\";
\$fa-var-facebook-square: \"\\f082\";
\$fa-var-fast-backward: \"\\f049\";
\$fa-var-fast-forward: \"\\f050\";
\$fa-var-fax: \"\\f1ac\";
\$fa-var-feed: \"\\f09e\";
\$fa-var-female: \"\\f182\";
\$fa-var-fighter-jet: \"\\f0fb\";
\$fa-var-file: \"\\f15b\";
\$fa-var-file-archive-o: \"\\f1c6\";
\$fa-var-file-audio-o: \"\\f1c7\";
\$fa-var-file-code-o: \"\\f1c9\";
\$fa-var-file-excel-o: \"\\f1c3\";
\$fa-var-file-image-o: \"\\f1c5\";
\$fa-var-file-movie-o: \"\\f1c8\";
\$fa-var-file-o: \"\\f016\";
\$fa-var-file-pdf-o: \"\\f1c1\";
\$fa-var-file-photo-o: \"\\f1c5\";
\$fa-var-file-picture-o: \"\\f1c5\";
\$fa-var-file-powerpoint-o: \"\\f1c4\";
\$fa-var-file-sound-o: \"\\f1c7\";
\$fa-var-file-text: \"\\f15c\";
\$fa-var-file-text-o: \"\\f0f6\";
\$fa-var-file-video-o: \"\\f1c8\";
\$fa-var-file-word-o: \"\\f1c2\";
\$fa-var-file-zip-o: \"\\f1c6\";
\$fa-var-files-o: \"\\f0c5\";
\$fa-var-film: \"\\f008\";
\$fa-var-filter: \"\\f0b0\";
\$fa-var-fire: \"\\f06d\";
\$fa-var-fire-extinguisher: \"\\f134\";
\$fa-var-firefox: \"\\f269\";
\$fa-var-first-order: \"\\f2b0\";
\$fa-var-flag: \"\\f024\";
\$fa-var-flag-checkered: \"\\f11e\";
\$fa-var-flag-o: \"\\f11d\";
\$fa-var-flash: \"\\f0e7\";
\$fa-var-flask: \"\\f0c3\";
\$fa-var-flickr: \"\\f16e\";
\$fa-var-floppy-o: \"\\f0c7\";
\$fa-var-folder: \"\\f07b\";
\$fa-var-folder-o: \"\\f114\";
\$fa-var-folder-open: \"\\f07c\";
\$fa-var-folder-open-o: \"\\f115\";
\$fa-var-font: \"\\f031\";
\$fa-var-font-awesome: \"\\f2b4\";
\$fa-var-fonticons: \"\\f280\";
\$fa-var-fort-awesome: \"\\f286\";
\$fa-var-forumbee: \"\\f211\";
\$fa-var-forward: \"\\f04e\";
\$fa-var-foursquare: \"\\f180\";
\$fa-var-frown-o: \"\\f119\";
\$fa-var-futbol-o: \"\\f1e3\";
\$fa-var-gamepad: \"\\f11b\";
\$fa-var-gavel: \"\\f0e3\";
\$fa-var-gbp: \"\\f154\";
\$fa-var-ge: \"\\f1d1\";
\$fa-var-gear: \"\\f013\";
\$fa-var-gears: \"\\f085\";
\$fa-var-genderless: \"\\f22d\";
\$fa-var-get-pocket: \"\\f265\";
\$fa-var-gg: \"\\f260\";
\$fa-var-gg-circle: \"\\f261\";
\$fa-var-gift: \"\\f06b\";
\$fa-var-git: \"\\f1d3\";
\$fa-var-git-square: \"\\f1d2\";
\$fa-var-github: \"\\f09b\";
\$fa-var-github-alt: \"\\f113\";
\$fa-var-github-square: \"\\f092\";
\$fa-var-gitlab: \"\\f296\";
\$fa-var-gittip: \"\\f184\";
\$fa-var-glass: \"\\f000\";
\$fa-var-glide: \"\\f2a5\";
\$fa-var-glide-g: \"\\f2a6\";
\$fa-var-globe: \"\\f0ac\";
\$fa-var-google: \"\\f1a0\";
\$fa-var-google-plus: \"\\f0d5\";
\$fa-var-google-plus-circle: \"\\f2b3\";
\$fa-var-google-plus-official: \"\\f2b3\";
\$fa-var-google-plus-square: \"\\f0d4\";
\$fa-var-google-wallet: \"\\f1ee\";
\$fa-var-graduation-cap: \"\\f19d\";
\$fa-var-gratipay: \"\\f184\";
\$fa-var-group: \"\\f0c0\";
\$fa-var-h-square: \"\\f0fd\";
\$fa-var-hacker-news: \"\\f1d4\";
\$fa-var-hand-grab-o: \"\\f255\";
\$fa-var-hand-lizard-o: \"\\f258\";
\$fa-var-hand-o-down: \"\\f0a7\";
\$fa-var-hand-o-left: \"\\f0a5\";
\$fa-var-hand-o-right: \"\\f0a4\";
\$fa-var-hand-o-up: \"\\f0a6\";
\$fa-var-hand-paper-o: \"\\f256\";
\$fa-var-hand-peace-o: \"\\f25b\";
\$fa-var-hand-pointer-o: \"\\f25a\";
\$fa-var-hand-rock-o: \"\\f255\";
\$fa-var-hand-scissors-o: \"\\f257\";
\$fa-var-hand-spock-o: \"\\f259\";
\$fa-var-hand-stop-o: \"\\f256\";
\$fa-var-hard-of-hearing: \"\\f2a4\";
\$fa-var-hashtag: \"\\f292\";
\$fa-var-hdd-o: \"\\f0a0\";
\$fa-var-header: \"\\f1dc\";
\$fa-var-headphones: \"\\f025\";
\$fa-var-heart: \"\\f004\";
\$fa-var-heart-o: \"\\f08a\";
\$fa-var-heartbeat: \"\\f21e\";
\$fa-var-history: \"\\f1da\";
\$fa-var-home: \"\\f015\";
\$fa-var-hospital-o: \"\\f0f8\";
\$fa-var-hotel: \"\\f236\";
\$fa-var-hourglass: \"\\f254\";
\$fa-var-hourglass-1: \"\\f251\";
\$fa-var-hourglass-2: \"\\f252\";
\$fa-var-hourglass-3: \"\\f253\";
\$fa-var-hourglass-end: \"\\f253\";
\$fa-var-hourglass-half: \"\\f252\";
\$fa-var-hourglass-o: \"\\f250\";
\$fa-var-hourglass-start: \"\\f251\";
\$fa-var-houzz: \"\\f27c\";
\$fa-var-html5: \"\\f13b\";
\$fa-var-i-cursor: \"\\f246\";
\$fa-var-ils: \"\\f20b\";
\$fa-var-image: \"\\f03e\";
\$fa-var-inbox: \"\\f01c\";
\$fa-var-indent: \"\\f03c\";
\$fa-var-industry: \"\\f275\";
\$fa-var-info: \"\\f129\";
\$fa-var-info-circle: \"\\f05a\";
\$fa-var-inr: \"\\f156\";
\$fa-var-instagram: \"\\f16d\";
\$fa-var-institution: \"\\f19c\";
\$fa-var-internet-explorer: \"\\f26b\";
\$fa-var-intersex: \"\\f224\";
\$fa-var-ioxhost: \"\\f208\";
\$fa-var-italic: \"\\f033\";
\$fa-var-joomla: \"\\f1aa\";
\$fa-var-jpy: \"\\f157\";
\$fa-var-jsfiddle: \"\\f1cc\";
\$fa-var-key: \"\\f084\";
\$fa-var-keyboard-o: \"\\f11c\";
\$fa-var-krw: \"\\f159\";
\$fa-var-language: \"\\f1ab\";
\$fa-var-laptop: \"\\f109\";
\$fa-var-lastfm: \"\\f202\";
\$fa-var-lastfm-square: \"\\f203\";
\$fa-var-leaf: \"\\f06c\";
\$fa-var-leanpub: \"\\f212\";
\$fa-var-legal: \"\\f0e3\";
\$fa-var-lemon-o: \"\\f094\";
\$fa-var-level-down: \"\\f149\";
\$fa-var-level-up: \"\\f148\";
\$fa-var-life-bouy: \"\\f1cd\";
\$fa-var-life-buoy: \"\\f1cd\";
\$fa-var-life-ring: \"\\f1cd\";
\$fa-var-life-saver: \"\\f1cd\";
\$fa-var-lightbulb-o: \"\\f0eb\";
\$fa-var-line-chart: \"\\f201\";
\$fa-var-link: \"\\f0c1\";
\$fa-var-linkedin: \"\\f0e1\";
\$fa-var-linkedin-square: \"\\f08c\";
\$fa-var-linux: \"\\f17c\";
\$fa-var-list: \"\\f03a\";
\$fa-var-list-alt: \"\\f022\";
\$fa-var-list-ol: \"\\f0cb\";
\$fa-var-list-ul: \"\\f0ca\";
\$fa-var-location-arrow: \"\\f124\";
\$fa-var-lock: \"\\f023\";
\$fa-var-long-arrow-down: \"\\f175\";
\$fa-var-long-arrow-left: \"\\f177\";
\$fa-var-long-arrow-right: \"\\f178\";
\$fa-var-long-arrow-up: \"\\f176\";
\$fa-var-low-vision: \"\\f2a8\";
\$fa-var-magic: \"\\f0d0\";
\$fa-var-magnet: \"\\f076\";
\$fa-var-mail-forward: \"\\f064\";
\$fa-var-mail-reply: \"\\f112\";
\$fa-var-mail-reply-all: \"\\f122\";
\$fa-var-male: \"\\f183\";
\$fa-var-map: \"\\f279\";
\$fa-var-map-marker: \"\\f041\";
\$fa-var-map-o: \"\\f278\";
\$fa-var-map-pin: \"\\f276\";
\$fa-var-map-signs: \"\\f277\";
\$fa-var-mars: \"\\f222\";
\$fa-var-mars-double: \"\\f227\";
\$fa-var-mars-stroke: \"\\f229\";
\$fa-var-mars-stroke-h: \"\\f22b\";
\$fa-var-mars-stroke-v: \"\\f22a\";
\$fa-var-maxcdn: \"\\f136\";
\$fa-var-meanpath: \"\\f20c\";
\$fa-var-medium: \"\\f23a\";
\$fa-var-medkit: \"\\f0fa\";
\$fa-var-meh-o: \"\\f11a\";
\$fa-var-mercury: \"\\f223\";
\$fa-var-microphone: \"\\f130\";
\$fa-var-microphone-slash: \"\\f131\";
\$fa-var-minus: \"\\f068\";
\$fa-var-minus-circle: \"\\f056\";
\$fa-var-minus-square: \"\\f146\";
\$fa-var-minus-square-o: \"\\f147\";
\$fa-var-mixcloud: \"\\f289\";
\$fa-var-mobile: \"\\f10b\";
\$fa-var-mobile-phone: \"\\f10b\";
\$fa-var-modx: \"\\f285\";
\$fa-var-money: \"\\f0d6\";
\$fa-var-moon-o: \"\\f186\";
\$fa-var-mortar-board: \"\\f19d\";
\$fa-var-motorcycle: \"\\f21c\";
\$fa-var-mouse-pointer: \"\\f245\";
\$fa-var-music: \"\\f001\";
\$fa-var-navicon: \"\\f0c9\";
\$fa-var-neuter: \"\\f22c\";
\$fa-var-newspaper-o: \"\\f1ea\";
\$fa-var-object-group: \"\\f247\";
\$fa-var-object-ungroup: \"\\f248\";
\$fa-var-odnoklassniki: \"\\f263\";
\$fa-var-odnoklassniki-square: \"\\f264\";
\$fa-var-opencart: \"\\f23d\";
\$fa-var-openid: \"\\f19b\";
\$fa-var-opera: \"\\f26a\";
\$fa-var-optin-monster: \"\\f23c\";
\$fa-var-outdent: \"\\f03b\";
\$fa-var-pagelines: \"\\f18c\";
\$fa-var-paint-brush: \"\\f1fc\";
\$fa-var-paper-plane: \"\\f1d8\";
\$fa-var-paper-plane-o: \"\\f1d9\";
\$fa-var-paperclip: \"\\f0c6\";
\$fa-var-paragraph: \"\\f1dd\";
\$fa-var-paste: \"\\f0ea\";
\$fa-var-pause: \"\\f04c\";
\$fa-var-pause-circle: \"\\f28b\";
\$fa-var-pause-circle-o: \"\\f28c\";
\$fa-var-paw: \"\\f1b0\";
\$fa-var-paypal: \"\\f1ed\";
\$fa-var-pencil: \"\\f040\";
\$fa-var-pencil-square: \"\\f14b\";
\$fa-var-pencil-square-o: \"\\f044\";
\$fa-var-percent: \"\\f295\";
\$fa-var-phone: \"\\f095\";
\$fa-var-phone-square: \"\\f098\";
\$fa-var-photo: \"\\f03e\";
\$fa-var-picture-o: \"\\f03e\";
\$fa-var-pie-chart: \"\\f200\";
\$fa-var-pied-piper: \"\\f2ae\";
\$fa-var-pied-piper-alt: \"\\f1a8\";
\$fa-var-pied-piper-pp: \"\\f1a7\";
\$fa-var-pinterest: \"\\f0d2\";
\$fa-var-pinterest-p: \"\\f231\";
\$fa-var-pinterest-square: \"\\f0d3\";
\$fa-var-plane: \"\\f072\";
\$fa-var-play: \"\\f04b\";
\$fa-var-play-circle: \"\\f144\";
\$fa-var-play-circle-o: \"\\f01d\";
\$fa-var-plug: \"\\f1e6\";
\$fa-var-plus: \"\\f067\";
\$fa-var-plus-circle: \"\\f055\";
\$fa-var-plus-square: \"\\f0fe\";
\$fa-var-plus-square-o: \"\\f196\";
\$fa-var-power-off: \"\\f011\";
\$fa-var-print: \"\\f02f\";
\$fa-var-product-hunt: \"\\f288\";
\$fa-var-puzzle-piece: \"\\f12e\";
\$fa-var-qq: \"\\f1d6\";
\$fa-var-qrcode: \"\\f029\";
\$fa-var-question: \"\\f128\";
\$fa-var-question-circle: \"\\f059\";
\$fa-var-question-circle-o: \"\\f29c\";
\$fa-var-quote-left: \"\\f10d\";
\$fa-var-quote-right: \"\\f10e\";
\$fa-var-ra: \"\\f1d0\";
\$fa-var-random: \"\\f074\";
\$fa-var-rebel: \"\\f1d0\";
\$fa-var-recycle: \"\\f1b8\";
\$fa-var-reddit: \"\\f1a1\";
\$fa-var-reddit-alien: \"\\f281\";
\$fa-var-reddit-square: \"\\f1a2\";
\$fa-var-refresh: \"\\f021\";
\$fa-var-registered: \"\\f25d\";
\$fa-var-remove: \"\\f00d\";
\$fa-var-renren: \"\\f18b\";
\$fa-var-reorder: \"\\f0c9\";
\$fa-var-repeat: \"\\f01e\";
\$fa-var-reply: \"\\f112\";
\$fa-var-reply-all: \"\\f122\";
\$fa-var-resistance: \"\\f1d0\";
\$fa-var-retweet: \"\\f079\";
\$fa-var-rmb: \"\\f157\";
\$fa-var-road: \"\\f018\";
\$fa-var-rocket: \"\\f135\";
\$fa-var-rotate-left: \"\\f0e2\";
\$fa-var-rotate-right: \"\\f01e\";
\$fa-var-rouble: \"\\f158\";
\$fa-var-rss: \"\\f09e\";
\$fa-var-rss-square: \"\\f143\";
\$fa-var-rub: \"\\f158\";
\$fa-var-ruble: \"\\f158\";
\$fa-var-rupee: \"\\f156\";
\$fa-var-safari: \"\\f267\";
\$fa-var-save: \"\\f0c7\";
\$fa-var-scissors: \"\\f0c4\";
\$fa-var-scribd: \"\\f28a\";
\$fa-var-search: \"\\f002\";
\$fa-var-search-minus: \"\\f010\";
\$fa-var-search-plus: \"\\f00e\";
\$fa-var-sellsy: \"\\f213\";
\$fa-var-send: \"\\f1d8\";
\$fa-var-send-o: \"\\f1d9\";
\$fa-var-server: \"\\f233\";
\$fa-var-share: \"\\f064\";
\$fa-var-share-alt: \"\\f1e0\";
\$fa-var-share-alt-square: \"\\f1e1\";
\$fa-var-share-square: \"\\f14d\";
\$fa-var-share-square-o: \"\\f045\";
\$fa-var-shekel: \"\\f20b\";
\$fa-var-sheqel: \"\\f20b\";
\$fa-var-shield: \"\\f132\";
\$fa-var-ship: \"\\f21a\";
\$fa-var-shirtsinbulk: \"\\f214\";
\$fa-var-shopping-bag: \"\\f290\";
\$fa-var-shopping-basket: \"\\f291\";
\$fa-var-shopping-cart: \"\\f07a\";
\$fa-var-sign-in: \"\\f090\";
\$fa-var-sign-language: \"\\f2a7\";
\$fa-var-sign-out: \"\\f08b\";
\$fa-var-signal: \"\\f012\";
\$fa-var-signing: \"\\f2a7\";
\$fa-var-simplybuilt: \"\\f215\";
\$fa-var-sitemap: \"\\f0e8\";
\$fa-var-skyatlas: \"\\f216\";
\$fa-var-skype: \"\\f17e\";
\$fa-var-slack: \"\\f198\";
\$fa-var-sliders: \"\\f1de\";
\$fa-var-slideshare: \"\\f1e7\";
\$fa-var-smile-o: \"\\f118\";
\$fa-var-snapchat: \"\\f2ab\";
\$fa-var-snapchat-ghost: \"\\f2ac\";
\$fa-var-snapchat-square: \"\\f2ad\";
\$fa-var-soccer-ball-o: \"\\f1e3\";
\$fa-var-sort: \"\\f0dc\";
\$fa-var-sort-alpha-asc: \"\\f15d\";
\$fa-var-sort-alpha-desc: \"\\f15e\";
\$fa-var-sort-amount-asc: \"\\f160\";
\$fa-var-sort-amount-desc: \"\\f161\";
\$fa-var-sort-asc: \"\\f0de\";
\$fa-var-sort-desc: \"\\f0dd\";
\$fa-var-sort-down: \"\\f0dd\";
\$fa-var-sort-numeric-asc: \"\\f162\";
\$fa-var-sort-numeric-desc: \"\\f163\";
\$fa-var-sort-up: \"\\f0de\";
\$fa-var-soundcloud: \"\\f1be\";
\$fa-var-space-shuttle: \"\\f197\";
\$fa-var-spinner: \"\\f110\";
\$fa-var-spoon: \"\\f1b1\";
\$fa-var-spotify: \"\\f1bc\";
\$fa-var-square: \"\\f0c8\";
\$fa-var-square-o: \"\\f096\";
\$fa-var-stack-exchange: \"\\f18d\";
\$fa-var-stack-overflow: \"\\f16c\";
\$fa-var-star: \"\\f005\";
\$fa-var-star-half: \"\\f089\";
\$fa-var-star-half-empty: \"\\f123\";
\$fa-var-star-half-full: \"\\f123\";
\$fa-var-star-half-o: \"\\f123\";
\$fa-var-star-o: \"\\f006\";
\$fa-var-steam: \"\\f1b6\";
\$fa-var-steam-square: \"\\f1b7\";
\$fa-var-step-backward: \"\\f048\";
\$fa-var-step-forward: \"\\f051\";
\$fa-var-stethoscope: \"\\f0f1\";
\$fa-var-sticky-note: \"\\f249\";
\$fa-var-sticky-note-o: \"\\f24a\";
\$fa-var-stop: \"\\f04d\";
\$fa-var-stop-circle: \"\\f28d\";
\$fa-var-stop-circle-o: \"\\f28e\";
\$fa-var-street-view: \"\\f21d\";
\$fa-var-strikethrough: \"\\f0cc\";
\$fa-var-stumbleupon: \"\\f1a4\";
\$fa-var-stumbleupon-circle: \"\\f1a3\";
\$fa-var-subscript: \"\\f12c\";
\$fa-var-subway: \"\\f239\";
\$fa-var-suitcase: \"\\f0f2\";
\$fa-var-sun-o: \"\\f185\";
\$fa-var-superscript: \"\\f12b\";
\$fa-var-support: \"\\f1cd\";
\$fa-var-table: \"\\f0ce\";
\$fa-var-tablet: \"\\f10a\";
\$fa-var-tachometer: \"\\f0e4\";
\$fa-var-tag: \"\\f02b\";
\$fa-var-tags: \"\\f02c\";
\$fa-var-tasks: \"\\f0ae\";
\$fa-var-taxi: \"\\f1ba\";
\$fa-var-television: \"\\f26c\";
\$fa-var-tencent-weibo: \"\\f1d5\";
\$fa-var-terminal: \"\\f120\";
\$fa-var-text-height: \"\\f034\";
\$fa-var-text-width: \"\\f035\";
\$fa-var-th: \"\\f00a\";
\$fa-var-th-large: \"\\f009\";
\$fa-var-th-list: \"\\f00b\";
\$fa-var-themeisle: \"\\f2b2\";
\$fa-var-thumb-tack: \"\\f08d\";
\$fa-var-thumbs-down: \"\\f165\";
\$fa-var-thumbs-o-down: \"\\f088\";
\$fa-var-thumbs-o-up: \"\\f087\";
\$fa-var-thumbs-up: \"\\f164\";
\$fa-var-ticket: \"\\f145\";
\$fa-var-times: \"\\f00d\";
\$fa-var-times-circle: \"\\f057\";
\$fa-var-times-circle-o: \"\\f05c\";
\$fa-var-tint: \"\\f043\";
\$fa-var-toggle-down: \"\\f150\";
\$fa-var-toggle-left: \"\\f191\";
\$fa-var-toggle-off: \"\\f204\";
\$fa-var-toggle-on: \"\\f205\";
\$fa-var-toggle-right: \"\\f152\";
\$fa-var-toggle-up: \"\\f151\";
\$fa-var-trademark: \"\\f25c\";
\$fa-var-train: \"\\f238\";
\$fa-var-transgender: \"\\f224\";
\$fa-var-transgender-alt: \"\\f225\";
\$fa-var-trash: \"\\f1f8\";
\$fa-var-trash-o: \"\\f014\";
\$fa-var-tree: \"\\f1bb\";
\$fa-var-trello: \"\\f181\";
\$fa-var-tripadvisor: \"\\f262\";
\$fa-var-trophy: \"\\f091\";
\$fa-var-truck: \"\\f0d1\";
\$fa-var-try: \"\\f195\";
\$fa-var-tty: \"\\f1e4\";
\$fa-var-tumblr: \"\\f173\";
\$fa-var-tumblr-square: \"\\f174\";
\$fa-var-turkish-lira: \"\\f195\";
\$fa-var-tv: \"\\f26c\";
\$fa-var-twitch: \"\\f1e8\";
\$fa-var-twitter: \"\\f099\";
\$fa-var-twitter-square: \"\\f081\";
\$fa-var-umbrella: \"\\f0e9\";
\$fa-var-underline: \"\\f0cd\";
\$fa-var-undo: \"\\f0e2\";
\$fa-var-universal-access: \"\\f29a\";
\$fa-var-university: \"\\f19c\";
\$fa-var-unlink: \"\\f127\";
\$fa-var-unlock: \"\\f09c\";
\$fa-var-unlock-alt: \"\\f13e\";
\$fa-var-unsorted: \"\\f0dc\";
\$fa-var-upload: \"\\f093\";
\$fa-var-usb: \"\\f287\";
\$fa-var-usd: \"\\f155\";
\$fa-var-user: \"\\f007\";
\$fa-var-user-md: \"\\f0f0\";
\$fa-var-user-plus: \"\\f234\";
\$fa-var-user-secret: \"\\f21b\";
\$fa-var-user-times: \"\\f235\";
\$fa-var-users: \"\\f0c0\";
\$fa-var-venus: \"\\f221\";
\$fa-var-venus-double: \"\\f226\";
\$fa-var-venus-mars: \"\\f228\";
\$fa-var-viacoin: \"\\f237\";
\$fa-var-viadeo: \"\\f2a9\";
\$fa-var-viadeo-square: \"\\f2aa\";
\$fa-var-video-camera: \"\\f03d\";
\$fa-var-vimeo: \"\\f27d\";
\$fa-var-vimeo-square: \"\\f194\";
\$fa-var-vine: \"\\f1ca\";
\$fa-var-vk: \"\\f189\";
\$fa-var-volume-control-phone: \"\\f2a0\";
\$fa-var-volume-down: \"\\f027\";
\$fa-var-volume-off: \"\\f026\";
\$fa-var-volume-up: \"\\f028\";
\$fa-var-warning: \"\\f071\";
\$fa-var-wechat: \"\\f1d7\";
\$fa-var-weibo: \"\\f18a\";
\$fa-var-weixin: \"\\f1d7\";
\$fa-var-whatsapp: \"\\f232\";
\$fa-var-wheelchair: \"\\f193\";
\$fa-var-wheelchair-alt: \"\\f29b\";
\$fa-var-wifi: \"\\f1eb\";
\$fa-var-wikipedia-w: \"\\f266\";
\$fa-var-windows: \"\\f17a\";
\$fa-var-won: \"\\f159\";
\$fa-var-wordpress: \"\\f19a\";
\$fa-var-wpbeginner: \"\\f297\";
\$fa-var-wpforms: \"\\f298\";
\$fa-var-wrench: \"\\f0ad\";
\$fa-var-xing: \"\\f168\";
\$fa-var-xing-square: \"\\f169\";
\$fa-var-y-combinator: \"\\f23b\";
\$fa-var-y-combinator-square: \"\\f1d4\";
\$fa-var-yahoo: \"\\f19e\";
\$fa-var-yc: \"\\f23b\";
\$fa-var-yc-square: \"\\f1d4\";
\$fa-var-yelp: \"\\f1e9\";
\$fa-var-yen: \"\\f157\";
\$fa-var-yoast: \"\\f2b1\";
\$fa-var-youtube: \"\\f167\";
\$fa-var-youtube-play: \"\\f16a\";
\$fa-var-youtube-square: \"\\f166\";

";
        
        $__internal_fdba9461a9fedff5376513e5a8ff81b8aec3075669ffababb45502ab4fd2797b->leave($__internal_fdba9461a9fedff5376513e5a8ff81b8aec3075669ffababb45502ab4fd2797b_prof);

    }

    public function getTemplateName()
    {
        return "resident/vendor/font-awesome/scss/_variables.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* // Variables*/
/* // --------------------------*/
/* */
/* $fa-font-path:        "../fonts" !default;*/
/* $fa-font-size-base:   14px !default;*/
/* $fa-line-height-base: 1 !default;*/
/* //$fa-font-path:        "//netdna.bootstrapcdn.com/font-awesome/4.6.3/fonts" !default; // for referencing Bootstrap CDN font files directly*/
/* $fa-css-prefix:       fa !default;*/
/* $fa-version:          "4.6.3" !default;*/
/* $fa-border-color:     #eee !default;*/
/* $fa-inverse:          #fff !default;*/
/* $fa-li-width:         (30em / 14) !default;*/
/* */
/* $fa-var-500px: "\f26e";*/
/* $fa-var-adjust: "\f042";*/
/* $fa-var-adn: "\f170";*/
/* $fa-var-align-center: "\f037";*/
/* $fa-var-align-justify: "\f039";*/
/* $fa-var-align-left: "\f036";*/
/* $fa-var-align-right: "\f038";*/
/* $fa-var-amazon: "\f270";*/
/* $fa-var-ambulance: "\f0f9";*/
/* $fa-var-american-sign-language-interpreting: "\f2a3";*/
/* $fa-var-anchor: "\f13d";*/
/* $fa-var-android: "\f17b";*/
/* $fa-var-angellist: "\f209";*/
/* $fa-var-angle-double-down: "\f103";*/
/* $fa-var-angle-double-left: "\f100";*/
/* $fa-var-angle-double-right: "\f101";*/
/* $fa-var-angle-double-up: "\f102";*/
/* $fa-var-angle-down: "\f107";*/
/* $fa-var-angle-left: "\f104";*/
/* $fa-var-angle-right: "\f105";*/
/* $fa-var-angle-up: "\f106";*/
/* $fa-var-apple: "\f179";*/
/* $fa-var-archive: "\f187";*/
/* $fa-var-area-chart: "\f1fe";*/
/* $fa-var-arrow-circle-down: "\f0ab";*/
/* $fa-var-arrow-circle-left: "\f0a8";*/
/* $fa-var-arrow-circle-o-down: "\f01a";*/
/* $fa-var-arrow-circle-o-left: "\f190";*/
/* $fa-var-arrow-circle-o-right: "\f18e";*/
/* $fa-var-arrow-circle-o-up: "\f01b";*/
/* $fa-var-arrow-circle-right: "\f0a9";*/
/* $fa-var-arrow-circle-up: "\f0aa";*/
/* $fa-var-arrow-down: "\f063";*/
/* $fa-var-arrow-left: "\f060";*/
/* $fa-var-arrow-right: "\f061";*/
/* $fa-var-arrow-up: "\f062";*/
/* $fa-var-arrows: "\f047";*/
/* $fa-var-arrows-alt: "\f0b2";*/
/* $fa-var-arrows-h: "\f07e";*/
/* $fa-var-arrows-v: "\f07d";*/
/* $fa-var-asl-interpreting: "\f2a3";*/
/* $fa-var-assistive-listening-systems: "\f2a2";*/
/* $fa-var-asterisk: "\f069";*/
/* $fa-var-at: "\f1fa";*/
/* $fa-var-audio-description: "\f29e";*/
/* $fa-var-automobile: "\f1b9";*/
/* $fa-var-backward: "\f04a";*/
/* $fa-var-balance-scale: "\f24e";*/
/* $fa-var-ban: "\f05e";*/
/* $fa-var-bank: "\f19c";*/
/* $fa-var-bar-chart: "\f080";*/
/* $fa-var-bar-chart-o: "\f080";*/
/* $fa-var-barcode: "\f02a";*/
/* $fa-var-bars: "\f0c9";*/
/* $fa-var-battery-0: "\f244";*/
/* $fa-var-battery-1: "\f243";*/
/* $fa-var-battery-2: "\f242";*/
/* $fa-var-battery-3: "\f241";*/
/* $fa-var-battery-4: "\f240";*/
/* $fa-var-battery-empty: "\f244";*/
/* $fa-var-battery-full: "\f240";*/
/* $fa-var-battery-half: "\f242";*/
/* $fa-var-battery-quarter: "\f243";*/
/* $fa-var-battery-three-quarters: "\f241";*/
/* $fa-var-bed: "\f236";*/
/* $fa-var-beer: "\f0fc";*/
/* $fa-var-behance: "\f1b4";*/
/* $fa-var-behance-square: "\f1b5";*/
/* $fa-var-bell: "\f0f3";*/
/* $fa-var-bell-o: "\f0a2";*/
/* $fa-var-bell-slash: "\f1f6";*/
/* $fa-var-bell-slash-o: "\f1f7";*/
/* $fa-var-bicycle: "\f206";*/
/* $fa-var-binoculars: "\f1e5";*/
/* $fa-var-birthday-cake: "\f1fd";*/
/* $fa-var-bitbucket: "\f171";*/
/* $fa-var-bitbucket-square: "\f172";*/
/* $fa-var-bitcoin: "\f15a";*/
/* $fa-var-black-tie: "\f27e";*/
/* $fa-var-blind: "\f29d";*/
/* $fa-var-bluetooth: "\f293";*/
/* $fa-var-bluetooth-b: "\f294";*/
/* $fa-var-bold: "\f032";*/
/* $fa-var-bolt: "\f0e7";*/
/* $fa-var-bomb: "\f1e2";*/
/* $fa-var-book: "\f02d";*/
/* $fa-var-bookmark: "\f02e";*/
/* $fa-var-bookmark-o: "\f097";*/
/* $fa-var-braille: "\f2a1";*/
/* $fa-var-briefcase: "\f0b1";*/
/* $fa-var-btc: "\f15a";*/
/* $fa-var-bug: "\f188";*/
/* $fa-var-building: "\f1ad";*/
/* $fa-var-building-o: "\f0f7";*/
/* $fa-var-bullhorn: "\f0a1";*/
/* $fa-var-bullseye: "\f140";*/
/* $fa-var-bus: "\f207";*/
/* $fa-var-buysellads: "\f20d";*/
/* $fa-var-cab: "\f1ba";*/
/* $fa-var-calculator: "\f1ec";*/
/* $fa-var-calendar: "\f073";*/
/* $fa-var-calendar-check-o: "\f274";*/
/* $fa-var-calendar-minus-o: "\f272";*/
/* $fa-var-calendar-o: "\f133";*/
/* $fa-var-calendar-plus-o: "\f271";*/
/* $fa-var-calendar-times-o: "\f273";*/
/* $fa-var-camera: "\f030";*/
/* $fa-var-camera-retro: "\f083";*/
/* $fa-var-car: "\f1b9";*/
/* $fa-var-caret-down: "\f0d7";*/
/* $fa-var-caret-left: "\f0d9";*/
/* $fa-var-caret-right: "\f0da";*/
/* $fa-var-caret-square-o-down: "\f150";*/
/* $fa-var-caret-square-o-left: "\f191";*/
/* $fa-var-caret-square-o-right: "\f152";*/
/* $fa-var-caret-square-o-up: "\f151";*/
/* $fa-var-caret-up: "\f0d8";*/
/* $fa-var-cart-arrow-down: "\f218";*/
/* $fa-var-cart-plus: "\f217";*/
/* $fa-var-cc: "\f20a";*/
/* $fa-var-cc-amex: "\f1f3";*/
/* $fa-var-cc-diners-club: "\f24c";*/
/* $fa-var-cc-discover: "\f1f2";*/
/* $fa-var-cc-jcb: "\f24b";*/
/* $fa-var-cc-mastercard: "\f1f1";*/
/* $fa-var-cc-paypal: "\f1f4";*/
/* $fa-var-cc-stripe: "\f1f5";*/
/* $fa-var-cc-visa: "\f1f0";*/
/* $fa-var-certificate: "\f0a3";*/
/* $fa-var-chain: "\f0c1";*/
/* $fa-var-chain-broken: "\f127";*/
/* $fa-var-check: "\f00c";*/
/* $fa-var-check-circle: "\f058";*/
/* $fa-var-check-circle-o: "\f05d";*/
/* $fa-var-check-square: "\f14a";*/
/* $fa-var-check-square-o: "\f046";*/
/* $fa-var-chevron-circle-down: "\f13a";*/
/* $fa-var-chevron-circle-left: "\f137";*/
/* $fa-var-chevron-circle-right: "\f138";*/
/* $fa-var-chevron-circle-up: "\f139";*/
/* $fa-var-chevron-down: "\f078";*/
/* $fa-var-chevron-left: "\f053";*/
/* $fa-var-chevron-right: "\f054";*/
/* $fa-var-chevron-up: "\f077";*/
/* $fa-var-child: "\f1ae";*/
/* $fa-var-chrome: "\f268";*/
/* $fa-var-circle: "\f111";*/
/* $fa-var-circle-o: "\f10c";*/
/* $fa-var-circle-o-notch: "\f1ce";*/
/* $fa-var-circle-thin: "\f1db";*/
/* $fa-var-clipboard: "\f0ea";*/
/* $fa-var-clock-o: "\f017";*/
/* $fa-var-clone: "\f24d";*/
/* $fa-var-close: "\f00d";*/
/* $fa-var-cloud: "\f0c2";*/
/* $fa-var-cloud-download: "\f0ed";*/
/* $fa-var-cloud-upload: "\f0ee";*/
/* $fa-var-cny: "\f157";*/
/* $fa-var-code: "\f121";*/
/* $fa-var-code-fork: "\f126";*/
/* $fa-var-codepen: "\f1cb";*/
/* $fa-var-codiepie: "\f284";*/
/* $fa-var-coffee: "\f0f4";*/
/* $fa-var-cog: "\f013";*/
/* $fa-var-cogs: "\f085";*/
/* $fa-var-columns: "\f0db";*/
/* $fa-var-comment: "\f075";*/
/* $fa-var-comment-o: "\f0e5";*/
/* $fa-var-commenting: "\f27a";*/
/* $fa-var-commenting-o: "\f27b";*/
/* $fa-var-comments: "\f086";*/
/* $fa-var-comments-o: "\f0e6";*/
/* $fa-var-compass: "\f14e";*/
/* $fa-var-compress: "\f066";*/
/* $fa-var-connectdevelop: "\f20e";*/
/* $fa-var-contao: "\f26d";*/
/* $fa-var-copy: "\f0c5";*/
/* $fa-var-copyright: "\f1f9";*/
/* $fa-var-creative-commons: "\f25e";*/
/* $fa-var-credit-card: "\f09d";*/
/* $fa-var-credit-card-alt: "\f283";*/
/* $fa-var-crop: "\f125";*/
/* $fa-var-crosshairs: "\f05b";*/
/* $fa-var-css3: "\f13c";*/
/* $fa-var-cube: "\f1b2";*/
/* $fa-var-cubes: "\f1b3";*/
/* $fa-var-cut: "\f0c4";*/
/* $fa-var-cutlery: "\f0f5";*/
/* $fa-var-dashboard: "\f0e4";*/
/* $fa-var-dashcube: "\f210";*/
/* $fa-var-database: "\f1c0";*/
/* $fa-var-deaf: "\f2a4";*/
/* $fa-var-deafness: "\f2a4";*/
/* $fa-var-dedent: "\f03b";*/
/* $fa-var-delicious: "\f1a5";*/
/* $fa-var-desktop: "\f108";*/
/* $fa-var-deviantart: "\f1bd";*/
/* $fa-var-diamond: "\f219";*/
/* $fa-var-digg: "\f1a6";*/
/* $fa-var-dollar: "\f155";*/
/* $fa-var-dot-circle-o: "\f192";*/
/* $fa-var-download: "\f019";*/
/* $fa-var-dribbble: "\f17d";*/
/* $fa-var-dropbox: "\f16b";*/
/* $fa-var-drupal: "\f1a9";*/
/* $fa-var-edge: "\f282";*/
/* $fa-var-edit: "\f044";*/
/* $fa-var-eject: "\f052";*/
/* $fa-var-ellipsis-h: "\f141";*/
/* $fa-var-ellipsis-v: "\f142";*/
/* $fa-var-empire: "\f1d1";*/
/* $fa-var-envelope: "\f0e0";*/
/* $fa-var-envelope-o: "\f003";*/
/* $fa-var-envelope-square: "\f199";*/
/* $fa-var-envira: "\f299";*/
/* $fa-var-eraser: "\f12d";*/
/* $fa-var-eur: "\f153";*/
/* $fa-var-euro: "\f153";*/
/* $fa-var-exchange: "\f0ec";*/
/* $fa-var-exclamation: "\f12a";*/
/* $fa-var-exclamation-circle: "\f06a";*/
/* $fa-var-exclamation-triangle: "\f071";*/
/* $fa-var-expand: "\f065";*/
/* $fa-var-expeditedssl: "\f23e";*/
/* $fa-var-external-link: "\f08e";*/
/* $fa-var-external-link-square: "\f14c";*/
/* $fa-var-eye: "\f06e";*/
/* $fa-var-eye-slash: "\f070";*/
/* $fa-var-eyedropper: "\f1fb";*/
/* $fa-var-fa: "\f2b4";*/
/* $fa-var-facebook: "\f09a";*/
/* $fa-var-facebook-f: "\f09a";*/
/* $fa-var-facebook-official: "\f230";*/
/* $fa-var-facebook-square: "\f082";*/
/* $fa-var-fast-backward: "\f049";*/
/* $fa-var-fast-forward: "\f050";*/
/* $fa-var-fax: "\f1ac";*/
/* $fa-var-feed: "\f09e";*/
/* $fa-var-female: "\f182";*/
/* $fa-var-fighter-jet: "\f0fb";*/
/* $fa-var-file: "\f15b";*/
/* $fa-var-file-archive-o: "\f1c6";*/
/* $fa-var-file-audio-o: "\f1c7";*/
/* $fa-var-file-code-o: "\f1c9";*/
/* $fa-var-file-excel-o: "\f1c3";*/
/* $fa-var-file-image-o: "\f1c5";*/
/* $fa-var-file-movie-o: "\f1c8";*/
/* $fa-var-file-o: "\f016";*/
/* $fa-var-file-pdf-o: "\f1c1";*/
/* $fa-var-file-photo-o: "\f1c5";*/
/* $fa-var-file-picture-o: "\f1c5";*/
/* $fa-var-file-powerpoint-o: "\f1c4";*/
/* $fa-var-file-sound-o: "\f1c7";*/
/* $fa-var-file-text: "\f15c";*/
/* $fa-var-file-text-o: "\f0f6";*/
/* $fa-var-file-video-o: "\f1c8";*/
/* $fa-var-file-word-o: "\f1c2";*/
/* $fa-var-file-zip-o: "\f1c6";*/
/* $fa-var-files-o: "\f0c5";*/
/* $fa-var-film: "\f008";*/
/* $fa-var-filter: "\f0b0";*/
/* $fa-var-fire: "\f06d";*/
/* $fa-var-fire-extinguisher: "\f134";*/
/* $fa-var-firefox: "\f269";*/
/* $fa-var-first-order: "\f2b0";*/
/* $fa-var-flag: "\f024";*/
/* $fa-var-flag-checkered: "\f11e";*/
/* $fa-var-flag-o: "\f11d";*/
/* $fa-var-flash: "\f0e7";*/
/* $fa-var-flask: "\f0c3";*/
/* $fa-var-flickr: "\f16e";*/
/* $fa-var-floppy-o: "\f0c7";*/
/* $fa-var-folder: "\f07b";*/
/* $fa-var-folder-o: "\f114";*/
/* $fa-var-folder-open: "\f07c";*/
/* $fa-var-folder-open-o: "\f115";*/
/* $fa-var-font: "\f031";*/
/* $fa-var-font-awesome: "\f2b4";*/
/* $fa-var-fonticons: "\f280";*/
/* $fa-var-fort-awesome: "\f286";*/
/* $fa-var-forumbee: "\f211";*/
/* $fa-var-forward: "\f04e";*/
/* $fa-var-foursquare: "\f180";*/
/* $fa-var-frown-o: "\f119";*/
/* $fa-var-futbol-o: "\f1e3";*/
/* $fa-var-gamepad: "\f11b";*/
/* $fa-var-gavel: "\f0e3";*/
/* $fa-var-gbp: "\f154";*/
/* $fa-var-ge: "\f1d1";*/
/* $fa-var-gear: "\f013";*/
/* $fa-var-gears: "\f085";*/
/* $fa-var-genderless: "\f22d";*/
/* $fa-var-get-pocket: "\f265";*/
/* $fa-var-gg: "\f260";*/
/* $fa-var-gg-circle: "\f261";*/
/* $fa-var-gift: "\f06b";*/
/* $fa-var-git: "\f1d3";*/
/* $fa-var-git-square: "\f1d2";*/
/* $fa-var-github: "\f09b";*/
/* $fa-var-github-alt: "\f113";*/
/* $fa-var-github-square: "\f092";*/
/* $fa-var-gitlab: "\f296";*/
/* $fa-var-gittip: "\f184";*/
/* $fa-var-glass: "\f000";*/
/* $fa-var-glide: "\f2a5";*/
/* $fa-var-glide-g: "\f2a6";*/
/* $fa-var-globe: "\f0ac";*/
/* $fa-var-google: "\f1a0";*/
/* $fa-var-google-plus: "\f0d5";*/
/* $fa-var-google-plus-circle: "\f2b3";*/
/* $fa-var-google-plus-official: "\f2b3";*/
/* $fa-var-google-plus-square: "\f0d4";*/
/* $fa-var-google-wallet: "\f1ee";*/
/* $fa-var-graduation-cap: "\f19d";*/
/* $fa-var-gratipay: "\f184";*/
/* $fa-var-group: "\f0c0";*/
/* $fa-var-h-square: "\f0fd";*/
/* $fa-var-hacker-news: "\f1d4";*/
/* $fa-var-hand-grab-o: "\f255";*/
/* $fa-var-hand-lizard-o: "\f258";*/
/* $fa-var-hand-o-down: "\f0a7";*/
/* $fa-var-hand-o-left: "\f0a5";*/
/* $fa-var-hand-o-right: "\f0a4";*/
/* $fa-var-hand-o-up: "\f0a6";*/
/* $fa-var-hand-paper-o: "\f256";*/
/* $fa-var-hand-peace-o: "\f25b";*/
/* $fa-var-hand-pointer-o: "\f25a";*/
/* $fa-var-hand-rock-o: "\f255";*/
/* $fa-var-hand-scissors-o: "\f257";*/
/* $fa-var-hand-spock-o: "\f259";*/
/* $fa-var-hand-stop-o: "\f256";*/
/* $fa-var-hard-of-hearing: "\f2a4";*/
/* $fa-var-hashtag: "\f292";*/
/* $fa-var-hdd-o: "\f0a0";*/
/* $fa-var-header: "\f1dc";*/
/* $fa-var-headphones: "\f025";*/
/* $fa-var-heart: "\f004";*/
/* $fa-var-heart-o: "\f08a";*/
/* $fa-var-heartbeat: "\f21e";*/
/* $fa-var-history: "\f1da";*/
/* $fa-var-home: "\f015";*/
/* $fa-var-hospital-o: "\f0f8";*/
/* $fa-var-hotel: "\f236";*/
/* $fa-var-hourglass: "\f254";*/
/* $fa-var-hourglass-1: "\f251";*/
/* $fa-var-hourglass-2: "\f252";*/
/* $fa-var-hourglass-3: "\f253";*/
/* $fa-var-hourglass-end: "\f253";*/
/* $fa-var-hourglass-half: "\f252";*/
/* $fa-var-hourglass-o: "\f250";*/
/* $fa-var-hourglass-start: "\f251";*/
/* $fa-var-houzz: "\f27c";*/
/* $fa-var-html5: "\f13b";*/
/* $fa-var-i-cursor: "\f246";*/
/* $fa-var-ils: "\f20b";*/
/* $fa-var-image: "\f03e";*/
/* $fa-var-inbox: "\f01c";*/
/* $fa-var-indent: "\f03c";*/
/* $fa-var-industry: "\f275";*/
/* $fa-var-info: "\f129";*/
/* $fa-var-info-circle: "\f05a";*/
/* $fa-var-inr: "\f156";*/
/* $fa-var-instagram: "\f16d";*/
/* $fa-var-institution: "\f19c";*/
/* $fa-var-internet-explorer: "\f26b";*/
/* $fa-var-intersex: "\f224";*/
/* $fa-var-ioxhost: "\f208";*/
/* $fa-var-italic: "\f033";*/
/* $fa-var-joomla: "\f1aa";*/
/* $fa-var-jpy: "\f157";*/
/* $fa-var-jsfiddle: "\f1cc";*/
/* $fa-var-key: "\f084";*/
/* $fa-var-keyboard-o: "\f11c";*/
/* $fa-var-krw: "\f159";*/
/* $fa-var-language: "\f1ab";*/
/* $fa-var-laptop: "\f109";*/
/* $fa-var-lastfm: "\f202";*/
/* $fa-var-lastfm-square: "\f203";*/
/* $fa-var-leaf: "\f06c";*/
/* $fa-var-leanpub: "\f212";*/
/* $fa-var-legal: "\f0e3";*/
/* $fa-var-lemon-o: "\f094";*/
/* $fa-var-level-down: "\f149";*/
/* $fa-var-level-up: "\f148";*/
/* $fa-var-life-bouy: "\f1cd";*/
/* $fa-var-life-buoy: "\f1cd";*/
/* $fa-var-life-ring: "\f1cd";*/
/* $fa-var-life-saver: "\f1cd";*/
/* $fa-var-lightbulb-o: "\f0eb";*/
/* $fa-var-line-chart: "\f201";*/
/* $fa-var-link: "\f0c1";*/
/* $fa-var-linkedin: "\f0e1";*/
/* $fa-var-linkedin-square: "\f08c";*/
/* $fa-var-linux: "\f17c";*/
/* $fa-var-list: "\f03a";*/
/* $fa-var-list-alt: "\f022";*/
/* $fa-var-list-ol: "\f0cb";*/
/* $fa-var-list-ul: "\f0ca";*/
/* $fa-var-location-arrow: "\f124";*/
/* $fa-var-lock: "\f023";*/
/* $fa-var-long-arrow-down: "\f175";*/
/* $fa-var-long-arrow-left: "\f177";*/
/* $fa-var-long-arrow-right: "\f178";*/
/* $fa-var-long-arrow-up: "\f176";*/
/* $fa-var-low-vision: "\f2a8";*/
/* $fa-var-magic: "\f0d0";*/
/* $fa-var-magnet: "\f076";*/
/* $fa-var-mail-forward: "\f064";*/
/* $fa-var-mail-reply: "\f112";*/
/* $fa-var-mail-reply-all: "\f122";*/
/* $fa-var-male: "\f183";*/
/* $fa-var-map: "\f279";*/
/* $fa-var-map-marker: "\f041";*/
/* $fa-var-map-o: "\f278";*/
/* $fa-var-map-pin: "\f276";*/
/* $fa-var-map-signs: "\f277";*/
/* $fa-var-mars: "\f222";*/
/* $fa-var-mars-double: "\f227";*/
/* $fa-var-mars-stroke: "\f229";*/
/* $fa-var-mars-stroke-h: "\f22b";*/
/* $fa-var-mars-stroke-v: "\f22a";*/
/* $fa-var-maxcdn: "\f136";*/
/* $fa-var-meanpath: "\f20c";*/
/* $fa-var-medium: "\f23a";*/
/* $fa-var-medkit: "\f0fa";*/
/* $fa-var-meh-o: "\f11a";*/
/* $fa-var-mercury: "\f223";*/
/* $fa-var-microphone: "\f130";*/
/* $fa-var-microphone-slash: "\f131";*/
/* $fa-var-minus: "\f068";*/
/* $fa-var-minus-circle: "\f056";*/
/* $fa-var-minus-square: "\f146";*/
/* $fa-var-minus-square-o: "\f147";*/
/* $fa-var-mixcloud: "\f289";*/
/* $fa-var-mobile: "\f10b";*/
/* $fa-var-mobile-phone: "\f10b";*/
/* $fa-var-modx: "\f285";*/
/* $fa-var-money: "\f0d6";*/
/* $fa-var-moon-o: "\f186";*/
/* $fa-var-mortar-board: "\f19d";*/
/* $fa-var-motorcycle: "\f21c";*/
/* $fa-var-mouse-pointer: "\f245";*/
/* $fa-var-music: "\f001";*/
/* $fa-var-navicon: "\f0c9";*/
/* $fa-var-neuter: "\f22c";*/
/* $fa-var-newspaper-o: "\f1ea";*/
/* $fa-var-object-group: "\f247";*/
/* $fa-var-object-ungroup: "\f248";*/
/* $fa-var-odnoklassniki: "\f263";*/
/* $fa-var-odnoklassniki-square: "\f264";*/
/* $fa-var-opencart: "\f23d";*/
/* $fa-var-openid: "\f19b";*/
/* $fa-var-opera: "\f26a";*/
/* $fa-var-optin-monster: "\f23c";*/
/* $fa-var-outdent: "\f03b";*/
/* $fa-var-pagelines: "\f18c";*/
/* $fa-var-paint-brush: "\f1fc";*/
/* $fa-var-paper-plane: "\f1d8";*/
/* $fa-var-paper-plane-o: "\f1d9";*/
/* $fa-var-paperclip: "\f0c6";*/
/* $fa-var-paragraph: "\f1dd";*/
/* $fa-var-paste: "\f0ea";*/
/* $fa-var-pause: "\f04c";*/
/* $fa-var-pause-circle: "\f28b";*/
/* $fa-var-pause-circle-o: "\f28c";*/
/* $fa-var-paw: "\f1b0";*/
/* $fa-var-paypal: "\f1ed";*/
/* $fa-var-pencil: "\f040";*/
/* $fa-var-pencil-square: "\f14b";*/
/* $fa-var-pencil-square-o: "\f044";*/
/* $fa-var-percent: "\f295";*/
/* $fa-var-phone: "\f095";*/
/* $fa-var-phone-square: "\f098";*/
/* $fa-var-photo: "\f03e";*/
/* $fa-var-picture-o: "\f03e";*/
/* $fa-var-pie-chart: "\f200";*/
/* $fa-var-pied-piper: "\f2ae";*/
/* $fa-var-pied-piper-alt: "\f1a8";*/
/* $fa-var-pied-piper-pp: "\f1a7";*/
/* $fa-var-pinterest: "\f0d2";*/
/* $fa-var-pinterest-p: "\f231";*/
/* $fa-var-pinterest-square: "\f0d3";*/
/* $fa-var-plane: "\f072";*/
/* $fa-var-play: "\f04b";*/
/* $fa-var-play-circle: "\f144";*/
/* $fa-var-play-circle-o: "\f01d";*/
/* $fa-var-plug: "\f1e6";*/
/* $fa-var-plus: "\f067";*/
/* $fa-var-plus-circle: "\f055";*/
/* $fa-var-plus-square: "\f0fe";*/
/* $fa-var-plus-square-o: "\f196";*/
/* $fa-var-power-off: "\f011";*/
/* $fa-var-print: "\f02f";*/
/* $fa-var-product-hunt: "\f288";*/
/* $fa-var-puzzle-piece: "\f12e";*/
/* $fa-var-qq: "\f1d6";*/
/* $fa-var-qrcode: "\f029";*/
/* $fa-var-question: "\f128";*/
/* $fa-var-question-circle: "\f059";*/
/* $fa-var-question-circle-o: "\f29c";*/
/* $fa-var-quote-left: "\f10d";*/
/* $fa-var-quote-right: "\f10e";*/
/* $fa-var-ra: "\f1d0";*/
/* $fa-var-random: "\f074";*/
/* $fa-var-rebel: "\f1d0";*/
/* $fa-var-recycle: "\f1b8";*/
/* $fa-var-reddit: "\f1a1";*/
/* $fa-var-reddit-alien: "\f281";*/
/* $fa-var-reddit-square: "\f1a2";*/
/* $fa-var-refresh: "\f021";*/
/* $fa-var-registered: "\f25d";*/
/* $fa-var-remove: "\f00d";*/
/* $fa-var-renren: "\f18b";*/
/* $fa-var-reorder: "\f0c9";*/
/* $fa-var-repeat: "\f01e";*/
/* $fa-var-reply: "\f112";*/
/* $fa-var-reply-all: "\f122";*/
/* $fa-var-resistance: "\f1d0";*/
/* $fa-var-retweet: "\f079";*/
/* $fa-var-rmb: "\f157";*/
/* $fa-var-road: "\f018";*/
/* $fa-var-rocket: "\f135";*/
/* $fa-var-rotate-left: "\f0e2";*/
/* $fa-var-rotate-right: "\f01e";*/
/* $fa-var-rouble: "\f158";*/
/* $fa-var-rss: "\f09e";*/
/* $fa-var-rss-square: "\f143";*/
/* $fa-var-rub: "\f158";*/
/* $fa-var-ruble: "\f158";*/
/* $fa-var-rupee: "\f156";*/
/* $fa-var-safari: "\f267";*/
/* $fa-var-save: "\f0c7";*/
/* $fa-var-scissors: "\f0c4";*/
/* $fa-var-scribd: "\f28a";*/
/* $fa-var-search: "\f002";*/
/* $fa-var-search-minus: "\f010";*/
/* $fa-var-search-plus: "\f00e";*/
/* $fa-var-sellsy: "\f213";*/
/* $fa-var-send: "\f1d8";*/
/* $fa-var-send-o: "\f1d9";*/
/* $fa-var-server: "\f233";*/
/* $fa-var-share: "\f064";*/
/* $fa-var-share-alt: "\f1e0";*/
/* $fa-var-share-alt-square: "\f1e1";*/
/* $fa-var-share-square: "\f14d";*/
/* $fa-var-share-square-o: "\f045";*/
/* $fa-var-shekel: "\f20b";*/
/* $fa-var-sheqel: "\f20b";*/
/* $fa-var-shield: "\f132";*/
/* $fa-var-ship: "\f21a";*/
/* $fa-var-shirtsinbulk: "\f214";*/
/* $fa-var-shopping-bag: "\f290";*/
/* $fa-var-shopping-basket: "\f291";*/
/* $fa-var-shopping-cart: "\f07a";*/
/* $fa-var-sign-in: "\f090";*/
/* $fa-var-sign-language: "\f2a7";*/
/* $fa-var-sign-out: "\f08b";*/
/* $fa-var-signal: "\f012";*/
/* $fa-var-signing: "\f2a7";*/
/* $fa-var-simplybuilt: "\f215";*/
/* $fa-var-sitemap: "\f0e8";*/
/* $fa-var-skyatlas: "\f216";*/
/* $fa-var-skype: "\f17e";*/
/* $fa-var-slack: "\f198";*/
/* $fa-var-sliders: "\f1de";*/
/* $fa-var-slideshare: "\f1e7";*/
/* $fa-var-smile-o: "\f118";*/
/* $fa-var-snapchat: "\f2ab";*/
/* $fa-var-snapchat-ghost: "\f2ac";*/
/* $fa-var-snapchat-square: "\f2ad";*/
/* $fa-var-soccer-ball-o: "\f1e3";*/
/* $fa-var-sort: "\f0dc";*/
/* $fa-var-sort-alpha-asc: "\f15d";*/
/* $fa-var-sort-alpha-desc: "\f15e";*/
/* $fa-var-sort-amount-asc: "\f160";*/
/* $fa-var-sort-amount-desc: "\f161";*/
/* $fa-var-sort-asc: "\f0de";*/
/* $fa-var-sort-desc: "\f0dd";*/
/* $fa-var-sort-down: "\f0dd";*/
/* $fa-var-sort-numeric-asc: "\f162";*/
/* $fa-var-sort-numeric-desc: "\f163";*/
/* $fa-var-sort-up: "\f0de";*/
/* $fa-var-soundcloud: "\f1be";*/
/* $fa-var-space-shuttle: "\f197";*/
/* $fa-var-spinner: "\f110";*/
/* $fa-var-spoon: "\f1b1";*/
/* $fa-var-spotify: "\f1bc";*/
/* $fa-var-square: "\f0c8";*/
/* $fa-var-square-o: "\f096";*/
/* $fa-var-stack-exchange: "\f18d";*/
/* $fa-var-stack-overflow: "\f16c";*/
/* $fa-var-star: "\f005";*/
/* $fa-var-star-half: "\f089";*/
/* $fa-var-star-half-empty: "\f123";*/
/* $fa-var-star-half-full: "\f123";*/
/* $fa-var-star-half-o: "\f123";*/
/* $fa-var-star-o: "\f006";*/
/* $fa-var-steam: "\f1b6";*/
/* $fa-var-steam-square: "\f1b7";*/
/* $fa-var-step-backward: "\f048";*/
/* $fa-var-step-forward: "\f051";*/
/* $fa-var-stethoscope: "\f0f1";*/
/* $fa-var-sticky-note: "\f249";*/
/* $fa-var-sticky-note-o: "\f24a";*/
/* $fa-var-stop: "\f04d";*/
/* $fa-var-stop-circle: "\f28d";*/
/* $fa-var-stop-circle-o: "\f28e";*/
/* $fa-var-street-view: "\f21d";*/
/* $fa-var-strikethrough: "\f0cc";*/
/* $fa-var-stumbleupon: "\f1a4";*/
/* $fa-var-stumbleupon-circle: "\f1a3";*/
/* $fa-var-subscript: "\f12c";*/
/* $fa-var-subway: "\f239";*/
/* $fa-var-suitcase: "\f0f2";*/
/* $fa-var-sun-o: "\f185";*/
/* $fa-var-superscript: "\f12b";*/
/* $fa-var-support: "\f1cd";*/
/* $fa-var-table: "\f0ce";*/
/* $fa-var-tablet: "\f10a";*/
/* $fa-var-tachometer: "\f0e4";*/
/* $fa-var-tag: "\f02b";*/
/* $fa-var-tags: "\f02c";*/
/* $fa-var-tasks: "\f0ae";*/
/* $fa-var-taxi: "\f1ba";*/
/* $fa-var-television: "\f26c";*/
/* $fa-var-tencent-weibo: "\f1d5";*/
/* $fa-var-terminal: "\f120";*/
/* $fa-var-text-height: "\f034";*/
/* $fa-var-text-width: "\f035";*/
/* $fa-var-th: "\f00a";*/
/* $fa-var-th-large: "\f009";*/
/* $fa-var-th-list: "\f00b";*/
/* $fa-var-themeisle: "\f2b2";*/
/* $fa-var-thumb-tack: "\f08d";*/
/* $fa-var-thumbs-down: "\f165";*/
/* $fa-var-thumbs-o-down: "\f088";*/
/* $fa-var-thumbs-o-up: "\f087";*/
/* $fa-var-thumbs-up: "\f164";*/
/* $fa-var-ticket: "\f145";*/
/* $fa-var-times: "\f00d";*/
/* $fa-var-times-circle: "\f057";*/
/* $fa-var-times-circle-o: "\f05c";*/
/* $fa-var-tint: "\f043";*/
/* $fa-var-toggle-down: "\f150";*/
/* $fa-var-toggle-left: "\f191";*/
/* $fa-var-toggle-off: "\f204";*/
/* $fa-var-toggle-on: "\f205";*/
/* $fa-var-toggle-right: "\f152";*/
/* $fa-var-toggle-up: "\f151";*/
/* $fa-var-trademark: "\f25c";*/
/* $fa-var-train: "\f238";*/
/* $fa-var-transgender: "\f224";*/
/* $fa-var-transgender-alt: "\f225";*/
/* $fa-var-trash: "\f1f8";*/
/* $fa-var-trash-o: "\f014";*/
/* $fa-var-tree: "\f1bb";*/
/* $fa-var-trello: "\f181";*/
/* $fa-var-tripadvisor: "\f262";*/
/* $fa-var-trophy: "\f091";*/
/* $fa-var-truck: "\f0d1";*/
/* $fa-var-try: "\f195";*/
/* $fa-var-tty: "\f1e4";*/
/* $fa-var-tumblr: "\f173";*/
/* $fa-var-tumblr-square: "\f174";*/
/* $fa-var-turkish-lira: "\f195";*/
/* $fa-var-tv: "\f26c";*/
/* $fa-var-twitch: "\f1e8";*/
/* $fa-var-twitter: "\f099";*/
/* $fa-var-twitter-square: "\f081";*/
/* $fa-var-umbrella: "\f0e9";*/
/* $fa-var-underline: "\f0cd";*/
/* $fa-var-undo: "\f0e2";*/
/* $fa-var-universal-access: "\f29a";*/
/* $fa-var-university: "\f19c";*/
/* $fa-var-unlink: "\f127";*/
/* $fa-var-unlock: "\f09c";*/
/* $fa-var-unlock-alt: "\f13e";*/
/* $fa-var-unsorted: "\f0dc";*/
/* $fa-var-upload: "\f093";*/
/* $fa-var-usb: "\f287";*/
/* $fa-var-usd: "\f155";*/
/* $fa-var-user: "\f007";*/
/* $fa-var-user-md: "\f0f0";*/
/* $fa-var-user-plus: "\f234";*/
/* $fa-var-user-secret: "\f21b";*/
/* $fa-var-user-times: "\f235";*/
/* $fa-var-users: "\f0c0";*/
/* $fa-var-venus: "\f221";*/
/* $fa-var-venus-double: "\f226";*/
/* $fa-var-venus-mars: "\f228";*/
/* $fa-var-viacoin: "\f237";*/
/* $fa-var-viadeo: "\f2a9";*/
/* $fa-var-viadeo-square: "\f2aa";*/
/* $fa-var-video-camera: "\f03d";*/
/* $fa-var-vimeo: "\f27d";*/
/* $fa-var-vimeo-square: "\f194";*/
/* $fa-var-vine: "\f1ca";*/
/* $fa-var-vk: "\f189";*/
/* $fa-var-volume-control-phone: "\f2a0";*/
/* $fa-var-volume-down: "\f027";*/
/* $fa-var-volume-off: "\f026";*/
/* $fa-var-volume-up: "\f028";*/
/* $fa-var-warning: "\f071";*/
/* $fa-var-wechat: "\f1d7";*/
/* $fa-var-weibo: "\f18a";*/
/* $fa-var-weixin: "\f1d7";*/
/* $fa-var-whatsapp: "\f232";*/
/* $fa-var-wheelchair: "\f193";*/
/* $fa-var-wheelchair-alt: "\f29b";*/
/* $fa-var-wifi: "\f1eb";*/
/* $fa-var-wikipedia-w: "\f266";*/
/* $fa-var-windows: "\f17a";*/
/* $fa-var-won: "\f159";*/
/* $fa-var-wordpress: "\f19a";*/
/* $fa-var-wpbeginner: "\f297";*/
/* $fa-var-wpforms: "\f298";*/
/* $fa-var-wrench: "\f0ad";*/
/* $fa-var-xing: "\f168";*/
/* $fa-var-xing-square: "\f169";*/
/* $fa-var-y-combinator: "\f23b";*/
/* $fa-var-y-combinator-square: "\f1d4";*/
/* $fa-var-yahoo: "\f19e";*/
/* $fa-var-yc: "\f23b";*/
/* $fa-var-yc-square: "\f1d4";*/
/* $fa-var-yelp: "\f1e9";*/
/* $fa-var-yen: "\f157";*/
/* $fa-var-yoast: "\f2b1";*/
/* $fa-var-youtube: "\f167";*/
/* $fa-var-youtube-play: "\f16a";*/
/* $fa-var-youtube-square: "\f166";*/
/* */
/* */
