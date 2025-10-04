(function(){const o=document.createElement("link").relList;if(o&&o.supports&&o.supports("modulepreload"))return;for(const e of document.querySelectorAll('link[rel="modulepreload"]'))s(e);new MutationObserver(e=>{for(const n of e)if(n.type==="childList")for(const d of n.addedNodes)d.tagName==="LINK"&&d.rel==="modulepreload"&&s(d)}).observe(document,{childList:!0,subtree:!0});function l(e){const n={};return e.integrity&&(n.integrity=e.integrity),e.referrerPolicy&&(n.referrerPolicy=e.referrerPolicy),e.crossOrigin==="use-credentials"?n.credentials="include":e.crossOrigin==="anonymous"?n.credentials="omit":n.credentials="same-origin",n}function s(e){if(e.ep)return;e.ep=!0;const n=l(e);fetch(e.href,n)}})();document.addEventListener("DOMContentLoaded",()=>{const c=document.querySelector(".nav-toggle"),o=document.querySelector(".nav-menu"),l=document.querySelector(".header");c&&c.addEventListener("click",()=>{o.classList.toggle("active"),c.classList.toggle("active")}),window.addEventListener("scroll",()=>{window.scrollY>50?l.classList.add("scrolled"):l.classList.remove("scrolled")});const s=document.querySelectorAll(".faq-item");s.forEach(r=>{r.querySelector(".faq-question").addEventListener("click",()=>{s.forEach(t=>{t!==r&&t.classList.remove("active")}),r.classList.toggle("active")})}),L(),E(),document.querySelectorAll(".game-card").forEach((r,a)=>{const t=r;t.setAttribute("style",`animation-delay: ${a*.1}s`),t.addEventListener("mousemove",i=>{const u=t.getBoundingClientRect(),m=i.clientX-u.left,h=i.clientY-u.top,g=u.width/2,p=u.height/2,v=(h-p)/10,y=(g-m)/10;t.style.transform=`perspective(1000px) rotateX(${v}deg) rotateY(${y}deg) scale3d(1.05, 1.05, 1.05)`}),t.addEventListener("mouseleave",()=>{t.style.transform=""})});const n=document.querySelector(".hero-content h1");if(n){let r=function(){t<a.length&&(n.innerHTML+=a.charAt(t),t++,setTimeout(r,50))};const a=n.innerHTML;n.innerHTML="";let t=0;setTimeout(()=>{r()},500)}b(),document.querySelectorAll('a[href^="#"]').forEach(r=>{r.addEventListener("click",a=>{a.preventDefault();const t=r.getAttribute("href"),i=document.querySelector(t);i&&(window.scrollTo({top:i.getBoundingClientRect().top+window.scrollY-100,behavior:"smooth"}),o.classList.contains("active")&&(o.classList.remove("active"),c.classList.remove("active")))})}),document.querySelectorAll(".count-number").forEach(r=>{const a=r,t=parseInt(a.dataset.target||"0",10);let i=0;const m=2e3/t,h=setInterval(()=>{i+=1,a.innerText=i.toString(),i>=t&&clearInterval(h)},m)})});function L(){const c=document.querySelector(".sliding-banner-container");if(!c)return;let o=0;const s=c.querySelectorAll(".sliding-banner").length,e=document.querySelectorAll(".sliding-banner-dot");r(),e.forEach((t,i)=>{t.addEventListener("click",()=>{o=i,r(),a()})}),setInterval(()=>{o=(o+1)%s,r(),a()},5e3);let n,d;c.addEventListener("touchstart",t=>{n=t.touches[0].clientX},!1),c.addEventListener("touchend",t=>{d=t.changedTouches[0].clientX,f()},!1);function f(){n-d>50?o=(o+1)%s:d-n>50&&(o=(o-1+s)%s),r(),a()}function r(){const t=-o*100,i=c.querySelector(".sliding-banner-track");i.style.transform=`translateX(${t}%)`}function a(){e.forEach((t,i)=>{i===o?t.classList.add("active"):t.classList.remove("active")})}}function E(){const c=document.querySelectorAll(".animate-on-scroll"),o=new IntersectionObserver(l=>{l.forEach(s=>{if(s.isIntersecting){const e=["","from-left","from-right","rotate-in"],n=e[Math.floor(Math.random()*e.length)];n&&!s.target.classList.contains(n)&&s.target.classList.add(n),s.target.classList.add("animated"),o.unobserve(s.target)}})},{threshold:.1});c.forEach(l=>{o.observe(l)})}function b(){const c=document.querySelector(".hero");if(!c)return;const o=document.createElement("div");o.className="particles-container",c.appendChild(o);for(let s=0;s<50;s++){const e=document.createElement("span");e.className="particle";const n=Math.random()*8+2,d=Math.random()*100,f=Math.random()*100,r=Math.random()*5,a=Math.random()*10+5;e.style.width=`${n}px`,e.style.height=`${n}px`,e.style.left=`${d}%`,e.style.top=`${f}%`,e.style.animationDelay=`${r}s`,e.style.animationDuration=`${a}s`,o.appendChild(e)}const l=document.createElement("style");l.textContent=`
    .particles-container {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      overflow: hidden;
      z-index: 2;
    }

    .particle {
      position: absolute;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.3);
      pointer-events: none;
      animation: float-particle linear infinite;
    }

    @keyframes float-particle {
      0% {
        transform: translateY(0) rotate(0);
        opacity: 0;
      }
      10% {
        opacity: 1;
      }
      90% {
        opacity: 1;
      }
      100% {
        transform: translateY(-100vh) rotate(360deg);
        opacity: 0;
      }
    }
  `,document.head.appendChild(l)}
