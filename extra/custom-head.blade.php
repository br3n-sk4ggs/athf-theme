{{-- ATHF background rendered with CSS only; no markup injected into head. --}}
<style>
html,body{min-height:100%;}
body{background:#0b1332 url("{{ themeAsset('../../background-desktop.webp') }}") center center / cover fixed no-repeat !important;}
body::before{content:"";position:fixed;inset:0;z-index:0;pointer-events:none;background:linear-gradient(90deg,rgba(2,4,12,.54),rgba(2,4,12,.72) 50%,rgba(2,4,12,.54));}
body::after{content:"";position:fixed;inset:-3%;z-index:0;pointer-events:none;background:radial-gradient(ellipse at 50% 30%,transparent 25%,rgba(0,0,0,.22));animation:athf-pulse 9s ease-in-out infinite alternate;}
@keyframes athf-pulse{from{opacity:.45}to{opacity:1}}
body > *{position:relative;z-index:1}
/* Mobile: fixed composited wallpaper layer, independent of scrolling body height.
   100lvh remains constant when Chrome's browser toolbar collapses/expands. */
@media(max-width:700px){
  html{background:#0b1332!important}
  body{background:#0b1332!important;background-image:none!important;background-attachment:scroll!important;}
  body::before{
    content:"";
    position:fixed;
    top:0;left:0;
    width:100%;height:100vh;
    height:100lvh;
    inset:auto;
    z-index:0;
    pointer-events:none;
    background-image:linear-gradient(90deg,rgba(2,4,12,.18),rgba(2,4,12,.52) 50%,rgba(2,4,12,.18)),url("{{ themeAsset('../../background-mobile.webp') }}");
    background-size:100% 100%,cover;
    background-position:center,center top;
    background-repeat:no-repeat;
    transform:translateZ(0);
  }
  body::after{display:none}
}
@media(prefers-reduced-motion:reduce){body::after{animation:none}}
</style>
