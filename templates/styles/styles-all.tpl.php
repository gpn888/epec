<?php ?>

<style>

body{margin:0;padding:0}body.adminimal-menu{margin-top:29px!important;top:0}.element-invisible{display:none}
a,body{color:#333}a,article,aside,b,blockquote,body,div,em,embed,figcaption,figure,footer,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,li,menu,nav,p,q,s,section,small,span,strong,svg,u,ul{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline}body,h1,h2,h3,h4,h5,h6{font-family:sans-serif}article,aside,details,div,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{font-size:1em;line-height:1}a{text-decoration:none}ol,ul{list-style:none}*,::after,::before{box-sizing:border-box}

body {
	background-color: white;
	color: #444;
	font-size: 16px;
	line-height: 1;
	font-family: Open Sans, Arial, sans-serif;
}
.contextual-links-wrapper { display: none; }

.preheader,
.menu-main,
.mobile,
.slick__slide,
.tabs,
.dropdown-box .block-inside,
.icon-title,
.menu-drop .children,
.box.no-p p,
.menu-programas .drop-title,
.menu-programas.menu-ambar,
[class*="brochure"] img,
.menu-paes > .menu {
    display: none;
}
.slick__slide:first-child {
    display: block;
}
.mobile {
    transform: translateX(-100%);
}

.header {
    width: 100%;
    position: fixed;
    z-index: 10;
    top: 0;
    left: 0;
    transition: .4s top;
}
.header + *:nth-child(2) {
    margin-top: 60px;
}

@media (min-width: 37.5em) {

.header + *:nth-child(2) {
    margin-top: 75px;
}

}

@media (min-width: 56.25em) {

.header {
    box-shadow: 0 0 5px rgba(0,0,0,.25);
}
.preheader {
    transition: .2s top;
    top: 0;
}
.mainheader-inset {
    transition:.2s padding-top, .2s padding-bottom;
    top: 0;
}
.is-heights .preheader {
    top: 0; 
}
.is-heights .mainheader-inset { 
    padding-top: .5rem;
    padding-bottom: .5rem;
}
.logo a, .logo img {
    transition: .2s height;
}
.is-heights .logo a, .is-heights .logo img {
    height: 70px;
}


.header + *:nth-child(2) {
    margin-top: 90px;
}

}

@media (min-width: 75em) {

.header + *:nth-child(2) {
    margin-top: 100px;
}

}

.gris { background-color: #e3e3e3; }
.white { background-color: white; }
.ambar { background-color: #f9b128; }

.centrado {
    margin: auto;
    max-width: 100%;
    width: 100%;
} 
.alineado {
    margin-left: -1rem;
}

.relleno {
    padding-left: .5rem;
    padding-right: .5rem;
}

.relativo {
    position: relative;
}
.flotado {
    position: absolute;
}
.overflow {
    overflow: hidden;
}

@media (min-width: 37.5em) {

.relleno {
    padding-left: 1rem;
    padding-right: 1rem;
}

}

@media (min-width: 56.25em) {

.relleno {
    padding-left: 0;
    padding-right: 0;
}

}

.logo-outset { 
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    position: relative;
}
.logo-outset::before {
    content: '';
    width: 100%;
    position: absolute;
    background-color: #56565a;
    height: 1.03em;
    bottom: 0;
    z-index: 1;
}
.logo-outset > * {
    position: relative;
    z-index: 2;
}
.logo a, .logo img {
    display: block;
    height: 60px;
    width: auto;
}
.toggle {
    display: block;
    width: 60px;
    background-color: transparent;
    height: calc(60px - 1.03em);
    cursor: pointer;
}
.toggle span {
    position: absolute;
    font-family: Maven Pro, Arial, sans-serif;
    text-transform: uppercase;
    font-size: 10px;
    left: 0;
    right: 0;
    margin: auto;
    text-align: center;
    bottom: .25rem;
    letter-spacing: 4px;
}

.preheader-inset {
    padding-top: .3rem;
    padding-bottom: .25rem;
    justify-content: flex-end;
    display: flex;
}
.menues-inline li {
    display: inline;
}
 
.menu-main .block-inside > .nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.menu-main .expanded {
    position: relative;
}
.menu-main :not([class*="children"]) > li > a:not([class*="btn"]) {
    font-family: Maven Pro, Arial, sans-serif;
    text-transform: uppercase;
    display: inline-block;
    margin: 0 .5rem;
    color: #777;
    font-size: 12px;
    position: relative;
    padding: 1.5rem .5rem 1rem;
    transition: .2s color;
}
.menu-main :not([class*="children"]) > li.expanded > a:not([class*="btn"]) { 
    padding: 1rem 1.5rem 0 .75rem;
}

.menu-secondary li {
    display: inline-block;
}
.menu-secondary li a {
    font-size: 13px;
}

.btn {
    padding: .5rem 1rem;
    display: inline-block;
    font-size: 14px;
}
.menu-main .btn {
    color: white;
    margin-right: 0;
    padding-right: 1rem;
    text-transform: uppercase;
    margin-top: 1rem;
    margin-left: 1rem;
    font-size: 12px;
}
.menu-main .btn:before,
.menu-main .btn:after {
    display: none;
}

@media (min-width: 75em) {

.menu-main :not([class*="children"]) > li > a:not([class*="btn"]) {
    font-size: 13px;
}
[lang="en"] .menu-main :not([class*="children"]) > li > a:not([class*="btn"]) {
    font-size: 13px;
}
.menu-main .btn {
    font-size: 13px;
    margin-left: 1rem;
}

}


.switch { 
    margin-top: .75rem;
    margin-right: .75rem;
}

.switch s {
    border: 1px solid #777;
    padding: .25rem .5rem;
    color: #666;
    display: inline-block;
    position: relative;
    text-transform: uppercase;
    font-size: 12px;
    cursor: pointer;
    text-decoration: none;
}
.switch s i {
    font-style: normal;
}

@media (min-width: 37.5em) {

.logo-outset::before{
	height: 1.25em;
}
.logo a, .logo img { 
    height: 75px; 
}
.toggle { 
    width: 75px; 
    height: calc(75px - 1.25em); 
}

}

@media (min-width: 56.25em) {

.mainheader .switch { display: none; }
.switch { 
    margin-top: 0;
    margin-right: 0;
    margin-left: 1rem;
}

.preheader {
    position: absolute;
    right: 0;
    width: 25rem;
    padding-right: 1rem;
}
.preheader::before {
    content: '';
    left: -1rem;
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border-top: 2.25rem solid #e3e3e3;
    border-left: 1rem solid transparent;
}

.centrado {
    max-width: calc(100% - 2rem);
}
.mainheader-inset {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.preheader,
.menu-main {
    display: block;
}

.logo-outset {
	background-color: transparent;
}
.logo-outset::before{
	display: none;
}
.toggle,
.mobile { 
    display: none;
}

}

@media (min-width: 75em) {

.centrado {
    max-width: 70em;
} 

.preheader {
    padding-right: 1rem;
}
.mainheader-inset {
    max-width: calc(100% - 2rem);
}

.logo a, 
.logo img { 
    height: 90px; 
}

}

@media (min-width: 100em) {

.centrado {
    max-width: 95em;
}

.preheader {
    padding-right: 2rem;
}

}

/* - FOLD - */

.grupo { 
    background-size: cover;
    background-position: center top;
    position: relative; 
}
.slick-main,
.slick-main .grupo, 
.slick__slide .grupo, 
.slick-main .centrado, 
.slick__slide .centrado {
    height: 300px;
    max-height: 300px;
}
.slick-main .flotado, 
.slick__slide .flotado {
    bottom: 1rem;
    left: .5rem; 
    max-width: calc(100% - 1rem);
}
.slick-main .ambar, 
.slick__slide .ambar {
    padding: .5rem .5rem .5rem;
}
.slick-main h2,
.slick__slide h2 {
    color: white;
    font-family: Maven Pro, Arial, sans-serif;
    text-transform: uppercase;
    font-size: 16px;
}
.slick-main h2 + * {
    font-size: .8em;
    margin-top: .5rem;
    font-family: Maven Pro, Arial, sans-serif;
}
.slick-main .btn,
.slick__slide .btn {
    text-transform: uppercase;
    font-family: Maven Pro, Arial, sans-serif;
    font-size: .7em;
    letter-spacing: 1px;
}
.slick-main .ambar + .btn,
.slick__slide .ambar + .btn {
    margin-top: .5rem;
}
.slick__arrow,
.slick-arrow {
    display: none;
    border: 0;
    background-color: transparent;
    color: white;
}

@media (min-width: 37.5em) {

.slick-main,
.slick-main .grupo,
.slick__slide .grupo,
.slick-main .centrado,
.slick__slide .centrado {
    height: 400px;
    max-height: 400px;
}
.slick-main .flotado,
.slick__slide .flotado {
    bottom: 2rem;
    left: 1rem; 
    max-width: 50%;
}
.slick-main .ambar,
.slick__slide .ambar {
    padding: .75rem 1rem 1rem; 
}
.slick-main h2,
.slick__slide h2 { 
    font-size: 24px;
}
.slick-main h2 + * {
    font-size: .95em; 
}
.slick-main .btn,
.slick__slide .btn { 
    font-family: Maven Pro, Arial, sans-serif;
    font-size: .8em; 
}

}

@media (min-width: 56.25em) {

.slick-main,
.slick-main .grupo,
.slick__slide .grupo,
.slick-main .centrado,
.slick__slide .centrado {
    height: 500px;
    max-height: 500px;
}
.slick-main .flotado,
.slick__slide .flotado {
    left: 0;
}

}

@media (min-width: 100em) {

.banner {
    margin: auto;
    max-width: 104em;
}
.banner .centrado { 
    width: 100rem;
}

.slick-main,
.slick-main .grupo,
.slick__slide .grupo,
.slick-main .centrado,
.slick__slide .centrado {
    height: 600px;
    max-height: 600px;
}

} 

.front .main {
    overflow: hidden;
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.intro {
    margin-bottom: 2rem;
}
.intro h2,
.new-block-title h3 {
    text-transform: uppercase;
    color: #56565a;
    font-family: Maven Pro, Arial, sans-serif;
    font-weight: 400;
    font-size: 1.25em;
    line-height: 1.25;
    position: relative;
}

@media (min-width: 37.5em) {

.front .main { 
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.intro h2 {
    font-size: 1.5em;
    line-height: 1.5;
} 

}

.home-programas .agrupador {
    display: block;
    position: relative;
}
.home-programas .agrupador figure {
    overflow: hidden;
    display: none;
}
.home-programas .agrupador h4 {
    position: relative;
    bottom: 0;
    background-color: #56565a;
    color: white;
    padding: 1rem;
    text-transform: uppercase;
    width: 100%;
    z-index: 3;
    font-family: Maven Pro, Arial, sans-serif;
    transition: .2s background-color, .2s color;
}

@media (min-width: 37.5em) {

.home-programas .agrupador figure {
    display: block;
}
.home-programas .agrupador h4 {
    position: absolute;
    padding: .5rem;
}

}

/* - FOLD INTERNA - */

.page-title {
    color: black;
    font-family: Maven Pro, Arial, Sans-serif;
    font-size: 1.25em;
    line-height: 1.2;
}
.title {
    font-family: Maven Pro, Arial, sans-serif;
    text-transform: uppercase;
    font-size: 1.25em;
    color: white;
}
.crumbs a {
    font-family: Maven Pro, Arial, sans-serif;
    text-transform: uppercase;
    color: #f9b128;
    display: inline-block;
    margin-bottom: 1rem;
    font-size: 1.1em;
}

[class*="base-"] .banner { 
    background-size: cover;
    background-position: center top; 
} 
.base-1 .banner,
.base-1 .banner .centrado {
    min-height: 200px;
}
.base:not(.base-1) .banner,
.base:not(.base-1) .banner .centrado {
    min-height: 200px;
}
.base .banner .flotado {
    bottom: .5rem;
    left: .5rem;
    width: auto;
    max-width: calc(100% - 1rem); 
}
.base:not(.base-1) .flotado {
    bottom: 1rem; 
}
.base .crumbs a {
    background-color: #56565a;
    color: white;
    display: inline-block;
    font-family: Maven Pro, Arial, sans-serif;
    text-transform: uppercase;
    padding: .5rem;
    font-size: .75em;
    letter-spacing: 1px;
    margin-bottom: .25rem;
}
.base .banner .ambar {
    display: inline-block;
    padding: .5rem; 
}

.base .banner .flotado h2 {
    background-color: white;
    display: inline-block;
    margin-top: .5rem;
    padding: .5rem;
    text-transform: uppercase;
    font-family: Maven Pro, Arial, sans-serif;
    font-size: .9em;
}

@media (min-width: 37.5em) {

.base:not(.base-1) .banner,
.base:not(.base-1) .banner .centrado {
    min-height: 250px;
}

.base .banner .flotado {
    left: 1rem;
}

.comun .crumbs a { 
    margin-bottom: 2rem;
    margin-top: 2rem;
    font-size: 1.25em;
}

}

@media (min-width: 56.25em) {

.title {
    font-size: 1.75em;
}
.page-title {
    font-size: 1.5em;
}

.base:not(.base-1) .banner,
.base:not(.base-1) .banner .centrado {
    min-height: 350px;
}
.base .banner .flotado {
    left: 0;
}

.base .crumbs a {
    font-size: .85em;
}
.base .banner .ambar { 
    padding: .5rem 1rem .75rem;  
}
.base .banner .flotado h2 { 
    font-size: 1em;
}

}

@media (min-width: 75em) {

.base:not(.base-1) .banner,
.base:not(.base-1) .banner .centrado {
    min-height: 400px;
}

}


.not-front .main {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
    overflow: hidden;
} 
.comun .main,
.page-novedades .main {
    border-top: 5px solid #f9b128;
}
.page-novedades .main {
    padding-top: 2.5rem;
}

@media (min-width: 56.25em) {

.not-front .main {
    padding-top: 3rem;
    padding-bottom: 0;
    overflow: hidden;
}
.not-front .main-content,
.not-front .sidebar-fisrt,
.not-front .sidebar-second {
    padding-bottom: 4rem;
}
.page-novedades .main {
    padding-top: 4rem;
}

}

/* INTERNA */
.page-node:not([class*="base-"]) .view-mode-full > * {
    padding-top: 1rem;
}

/* GRILLAS */
.kols {
    float: left;
    padding-left: 1rem;
    width: 100%;
}

.kol-15 { width: 15%; }
.kol-20 { width: 20%; }
.kol-25 { width: 25%; }
.kol-30 { width: 30%; }
.kol-33 { width: 33%; }
.kol-40 { width: 40%; }
.kol-45 { width: 45%; }
.kol-50 { width: 50%; }
.kol-55 { width: 55%; }
.kol-60 { width: 60%; }
.kol-67 { width: 67%; }
.kol-70 { width: 70%; }
.kol-75 { width: 75%; }
.kol-80 { width: 80%; }
.kol-85 { width: 85%; }

@media (min-width: 30em) {

.kol-480-15 { width: 15%; }
.kol-480-20 { width: 20%; }
.kol-480-25 { width: 25%; }
.kol-480-30 { width: 30%; }
.kol-480-33 { width: 33%; }
.kol-480-40 { width: 40%; }
.kol-480-45 { width: 45%; }
.kol-480-50 { width: 50%; }
.kol-480-55 { width: 55%; }
.kol-480-60 { width: 60%; }
.kol-480-67 { width: 67%; }
.kol-480-70 { width: 70%; }
.kol-480-75 { width: 75%; }
.kol-480-80 { width: 80%; }
.kol-480-85 { width: 85%; }

}

@media (min-width: 37.5em) {

.kol-600-15 { width: 15%; }
.kol-600-20 { width: 20%; }
.kol-600-25 { width: 25%; }
.kol-600-30 { width: 30%; }
.kol-600-33 { width: 33%; }
.kol-600-40 { width: 40%; }
.kol-600-45 { width: 45%; }
.kol-600-50 { width: 50%; }
.kol-600-55 { width: 55%; }
.kol-600-60 { width: 60%; }
.kol-600-67 { width: 67%; }
.kol-600-70 { width: 70%; }
.kol-600-75 { width: 75%; }
.kol-600-80 { width: 80%; }
.kol-600-85 { width: 85%; }

}

@media (min-width: 56.25em) {

.kol-900-15 { width: 15%; }
.kol-900-20 { width: 20%; }
.kol-900-25 { width: 25%; }
.kol-900-30 { width: 30%; }
.kol-900-33 { width: 33%; }
.kol-900-40 { width: 40%; }
.kol-900-45 { width: 45%; }
.kol-900-50 { width: 50%; }
.kol-900-55 { width: 55%; }
.kol-900-60 { width: 60%; }
.kol-900-67 { width: 67%; }
.kol-900-70 { width: 70%; }
.kol-900-75 { width: 75%; }
.kol-900-80 { width: 80%; }
.kol-900-85 { width: 85%; }

}

@media (min-width: 75em) {

.kol-1200-15 { width: 15%; }
.kol-1200-20 { width: 20%; }
.kol-1200-25 { width: 25%; }
.kol-1200-30 { width: 30%; }
.kol-1200-33 { width: 33%; }
.kol-1200-40 { width: 40%; }
.kol-1200-45 { width: 45%; }
.kol-1200-50 { width: 50%; }
.kol-1200-55 { width: 55%; }
.kol-1200-60 { width: 60%; }
.kol-1200-67 { width: 67%; }
.kol-1200-70 { width: 70%; }
.kol-1200-75 { width: 75%; }
.kol-1200-80 { width: 80%; }
.kol-1200-85 { width: 85%; }

}

[class*="box-kol"] .view-content {
    margin-left: -1rem;
}
[class*="box-kol"] .views-row {
    float: left;
    margin-bottom: 1rem;
    padding-left: 1rem; 
    width: 100%;
} 

.box-kol-2 .views-row { width: 50%; } 

.box-kol-2 .views-row:nth-child(2n+1) { clear: left; }

@media (min-width: 30em) {

.box-kol-480-2 .views-row { width: 50%; }
.box-kol-480-3 .views-row { width: 33.33%; }
.box-kol-480-4 .views-row { width: 25%; }

.box-kol-2 .views-row:nth-child(2n+1) { clear: none; }

.box-kol-480-2 .views-row:nth-child(2n+1) { clear: left; }
.box-kol-480-3 .views-row:nth-child(3n+1) { clear: left; }
.box-kol-480-4 .views-row:nth-child(4n+1) { clear: left; }

}

@media (min-width: 37.5em) {

.box-kol-600-2 .views-row { width: 50%; }
.box-kol-600-3 .views-row { width: 33.33%; }
.box-kol-600-4 .views-row { width: 25%; }

.box-kol-480-2 .views-row:nth-child(2n+1) { clear: none; }
.box-kol-480-3 .views-row:nth-child(3n+1) { clear: none; }
.box-kol-480-4 .views-row:nth-child(4n+1) { clear: none; }

.box-kol-600-2 .views-row:nth-child(2n+1) { clear: left; }
.box-kol-600-3 .views-row:nth-child(3n+1) { clear: left; }
.box-kol-600-4 .views-row:nth-child(4n+1) { clear: left; }

}

@media (min-width: 56.25em) {

.box-kol-900-2 .views-row { width: 50%; }
.box-kol-900-3 .views-row { width: 33.33%; }
.box-kol-900-4 .views-row { width: 25%; }

.box-kol-600-2 .views-row:nth-child(2n+1) { clear: none; }
.box-kol-600-3 .views-row:nth-child(3n+1) { clear: none; }
.box-kol-600-4 .views-row:nth-child(4n+1) { clear: none; }

.box-kol-900-2 .views-row:nth-child(2n+1) { clear: left; }
.box-kol-900-3 .views-row:nth-child(3n+1) { clear: left; }
.box-kol-900-4 .views-row:nth-child(4n+1) { clear: left; }

}

[class*="box--"] [class*="anchor"] {
    display: block;
    overflow: hidden;
}
[class*="box--"] [class*="anchor"] > * {
    float: left;
    width: 100%;
}

.box [class*="anchor"] > figure {
   margin-bottom: .5rem;
   max-width: 100%;
   overflow: hidden;
}  
.box--5 [class*="anchor"] > figure { 
   max-width: 80px; 
} 
.box--8 [class*="anchor"] > figure { 
   max-width: 200px; 
} 
.box p {
    max-height: 4.5em;
    overflow-y: hidden;
}

@media (min-width: 37.5em) {

.box--5 [class*="anchor"] > figure,
.box--8 [class*="anchor"] > figure { 
    margin-right: 1rem;
    overflow: hidden; 
}
.box--5 [class*="anchor"] > figure {
    width: 4rem;  
}
.box--5 [class*="anchor"] > figure + .box-body {
    width: calc(100% - 5rem);
}
.box--8 [class*="anchor"] > figure {
    width: 6rem;  
}
.box--8 [class*="anchor"] > figure + .box-body {
    width: calc(100% - 7rem);
}

}

@media (min-width: 56.25em) {


.box--8 [class*="anchor"] > figure {
    width: 5rem; 
}
.box--8 [class*="anchor"] > figure + .box-body {
    width: calc(100% - 6rem);
}
.box--8 [class*="anchor"] > figure {
    width: 8rem; 
}
.box--8 [class*="anchor"] > figure + .box-body {
    width: calc(100% - 9rem);
}

}

html[lang="en"] time.es,
html[lang="es"] time.en,
html[lang="en"] span.es,
html[lang="es"] span.en,
html[lang="en"] .more.es,
html[lang="es"] .more.en {
    display: none!important;
}

.has-more .more {
    position: absolute;
    top: 0;
    right: 0;
}
.box figure span {
    color: white;
}

@media (min-width: 37.5em) {

.comun .main-content {
    padding-right: 3rem;
}
.comun .sidebar-second {
    margin-top: 7rem;
}

}

@media (max-width: 37.4375em) {

.base:not(.base-1) .main {
    padding-top: 0;
}
.base:not(.base-1) .banner .ambar,
.base:not(.base-1) .banner .flotado h2 {
    display: none;
}

}

.campus img {
    display: none;
}

.main,
.prefooter,
.footer {
    display: none;
}

</style>