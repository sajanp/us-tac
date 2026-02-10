<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 50%, rgba(17,193,143,0.05) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Constellation particles --}}
    <canvas id="tt09-particles" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 36px 72px 48px;">

        {{-- Top bar --}}
        <div class="tt09-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Technical Toolkit</span>
        </div>

        {{-- Hero --}}
        <div class="flex-1 flex flex-col items-center justify-center">

            {{-- Eyebrow --}}
            <div class="tt09-s2 mb-3">
                <div class="inline-flex items-center gap-3 px-6 py-2.5 rounded-full" style="border: 1px solid rgba(17,193,143,0.12); background: rgba(17,193,143,0.03);">
                    <div class="w-1 h-1 rounded-full" style="background: #11C18F; box-shadow: 0 0 6px #11C18F;"></div>
                    <span style="text-transform: uppercase; letter-spacing: 0.35em; color: rgba(17,193,143,0.8); font-size: 11px; font-weight: 600; font-family: 'Sora', sans-serif;">45 Minutes Remaining</span>
                    <div class="w-1 h-1 rounded-full" style="background: #11C18F; box-shadow: 0 0 6px #11C18F;"></div>
                </div>
            </div>

            {{-- Title --}}
            <div class="tt09-s3 mb-3">
                <h1 class="tt09-title text-center leading-[0.95]">
                    <span class="block" style="color: rgba(255,255,255,0.92);">Let's Get</span>
                    <span class="block tt09-gradient">Hands On</span>
                </h1>
            </div>

            {{-- Divider --}}
            <div class="tt09-s4 mb-6">
                <div class="flex items-center gap-4">
                    <div style="width: 80px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.35));"></div>
                    <div style="width: 8px; height: 8px; transform: rotate(45deg); border: 1px solid rgba(17,193,143,0.35);"></div>
                    <div style="width: 80px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.35));"></div>
                </div>
            </div>

            {{-- Demo items --}}
            <div class="tt09-demo-grid">

                <div class="tt09-demo-item tt09-s5">
                    <div class="tt09-demo-icon" style="color: #11C18F; border-color: rgba(17,193,143,0.15); background: rgba(17,193,143,0.04);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" /></svg>
                    </div>
                    <div class="tt09-demo-label">GitHub &amp; GitLab</div>
                    <div class="tt09-demo-desc">Repos, branches, CI/CD</div>
                </div>

                <div class="tt09-demo-item tt09-s6">
                    <div class="tt09-demo-icon" style="color: #48AAA5; border-color: rgba(72,170,165,0.15); background: rgba(72,170,165,0.04);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" /></svg>
                    </div>
                    <div class="tt09-demo-label">Forge &amp; Vapor</div>
                    <div class="tt09-demo-desc">Deployment workflows</div>
                </div>

                <div class="tt09-demo-item tt09-s7">
                    <div class="tt09-demo-icon" style="color: #AFEFCD; border-color: rgba(175,239,205,0.15); background: rgba(175,239,205,0.04);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
                    </div>
                    <div class="tt09-demo-label">Sentry</div>
                    <div class="tt09-demo-desc">Errors, logging, traces</div>
                </div>

                <div class="tt09-demo-item tt09-s8">
                    <div class="tt09-demo-icon" style="color: #8FAAA1; border-color: rgba(143,170,161,0.15); background: rgba(143,170,161,0.04);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                    </div>
                    <div class="tt09-demo-label">Papertrail</div>
                    <div class="tt09-demo-desc">Log streaming</div>
                </div>

                <div class="tt09-demo-item tt09-s9">
                    <div class="tt09-demo-icon" style="color: #EFD61B; border-color: rgba(239,214,27,0.15); background: rgba(239,214,27,0.04);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" /></svg>
                    </div>
                    <div class="tt09-demo-label">Tinker &amp; Tinkerwell</div>
                    <div class="tt09-demo-desc">Interactive debugging</div>
                </div>

                <div class="tt09-demo-item tt09-s10">
                    <div class="tt09-demo-icon" style="color: #48AAA5; border-color: rgba(72,170,165,0.15); background: rgba(72,170,165,0.04);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" /></svg>
                    </div>
                    <div class="tt09-demo-label">Database Access</div>
                    <div class="tt09-demo-desc">Querying production</div>
                </div>

            </div>
        </div>

        {{-- Bottom --}}
        <div class="tt09-s11 text-center">
            <p style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.25); line-height: 1.7;">
                Every tool. Live. Ask questions as we go.
            </p>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .tt09-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.5rem, 6vw, 4.5rem);
        letter-spacing: -0.035em;
    }

    .tt09-gradient {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 35%, #11C18F 65%, #AFEFCD 100%);
        background-size: 300% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: tt09-shimmer 5s ease-in-out infinite;
        position: relative;
    }

    .tt09-gradient::after {
        content: 'Hands On';
        position: absolute;
        top: 0; left: 0; right: 0;
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 35%, #11C18F 65%, #AFEFCD 100%);
        background-size: 300% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: tt09-shimmer 5s ease-in-out infinite;
        filter: blur(30px);
        opacity: 0.35;
        z-index: -1;
    }

    @keyframes tt09-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 300% center; }
    }

    /* Demo grid */
    .tt09-demo-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 14px;
        max-width: 700px;
        width: 100%;
    }

    .tt09-demo-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        padding: 16px 14px;
        border-radius: 14px;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.04);
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        cursor: default;
    }

    .tt09-demo-item:hover {
        border-color: rgba(17,193,143,0.15);
        transform: translateY(-3px);
        background: rgba(255,255,255,0.025);
    }

    .tt09-demo-icon {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        border: 1px solid;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tt09-demo-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.01em;
        text-align: center;
    }

    .tt09-demo-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.68rem;
        color: rgba(255,255,255,0.3);
        text-align: center;
    }

    /* Reveal animations */
    @keyframes tt09-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt09-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tt09-s1 { opacity: 0; animation: tt09-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt09-s2 { opacity: 0; animation: tt09-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .tt09-s3 { opacity: 0; animation: tt09-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .tt09-s4 { opacity: 0; animation: tt09-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .tt09-s5 { opacity: 0; animation: tt09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .tt09-s6 { opacity: 0; animation: tt09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.15s forwards; }
    .tt09-s7 { opacity: 0; animation: tt09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }
    .tt09-s8 { opacity: 0; animation: tt09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.45s forwards; }
    .tt09-s9 { opacity: 0; animation: tt09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.6s forwards; }
    .tt09-s10 { opacity: 0; animation: tt09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.75s forwards; }
    .tt09-s11 { opacity: 0; animation: tt09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 2.1s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var canvas = document.getElementById('tt09-particles');
        if (!canvas) return;
        var ctx = canvas.getContext('2d');
        var w, h, particles = [];
        var COUNT = 45;
        var CONNECT = 120;

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
        }

        function init() {
            particles = [];
            for (var i = 0; i < COUNT; i++) {
                particles.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    vx: (Math.random() - 0.5) * 0.2,
                    vy: (Math.random() - 0.5) * 0.2,
                    r: Math.random() * 1.5 + 0.5,
                    o: Math.random() * 0.15 + 0.05,
                });
            }
        }

        function frame() {
            ctx.clearRect(0, 0, w, h);
            for (var i = 0; i < particles.length; i++) {
                for (var j = i + 1; j < particles.length; j++) {
                    var dx = particles[i].x - particles[j].x;
                    var dy = particles[i].y - particles[j].y;
                    var d = Math.sqrt(dx * dx + dy * dy);
                    if (d < CONNECT) {
                        ctx.beginPath();
                        ctx.strokeStyle = 'rgba(17,193,143,' + ((1 - d / CONNECT) * 0.04) + ')';
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
            particles.forEach(function(p) {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(17,193,143,' + p.o + ')';
                ctx.fill();
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > w) p.vx *= -1;
                if (p.y < 0 || p.y > h) p.vy *= -1;
            });
            requestAnimationFrame(frame);
        }

        resize();
        init();
        frame();
        window.addEventListener('resize', function() { resize(); init(); });
    });
</script>
