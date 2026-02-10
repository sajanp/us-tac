<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 50%, rgba(17,193,143,0.045) 0%, transparent 60%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Constellation particles --}}
    <canvas id="tt01-particles" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="tt01-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <div class="flex items-center gap-3 px-4 py-2 rounded-full" style="border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div class="w-2 h-2 rounded-full animate-pulse" style="background: #11C18F; box-shadow: 0 0 8px #11C18F;"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">US TAC 2026</span>
            </div>
        </div>

        {{-- Hero --}}
        <div class="flex-1 flex flex-col items-center justify-center">

            {{-- Eyebrow --}}
            <div class="tt01-s2 mb-8">
                <div class="inline-flex items-center gap-3 px-6 py-2.5 rounded-full" style="border: 1px solid rgba(17,193,143,0.12); background: rgba(17,193,143,0.03);">
                    <div class="w-1 h-1 rounded-full" style="background: #11C18F; box-shadow: 0 0 6px #11C18F;"></div>
                    <span style="text-transform: uppercase; letter-spacing: 0.35em; color: rgba(17,193,143,0.8); font-size: 11px; font-weight: 600; font-family: 'Sora', sans-serif;">Development &amp; Operations</span>
                    <div class="w-1 h-1 rounded-full" style="background: #11C18F; box-shadow: 0 0 6px #11C18F;"></div>
                </div>
            </div>

            {{-- Title --}}
            <div class="tt01-s3 mb-6">
                <h1 class="tt01-title text-center leading-[0.95]">
                    <span class="block" style="color: rgba(255,255,255,0.92);">Our Technical</span>
                    <span class="block tt01-gradient">Toolkit</span>
                </h1>
            </div>

            {{-- Decorative divider --}}
            <div class="tt01-s4 mb-10">
                <div class="flex items-center gap-4">
                    <div style="width: 80px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.35));"></div>
                    <div style="width: 8px; height: 8px; transform: rotate(45deg); border: 1px solid rgba(17,193,143,0.35);"></div>
                    <div style="width: 80px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.35));"></div>
                </div>
            </div>

            {{-- Subtitle --}}
            <div class="tt01-s5">
                <p style="font-family: 'Sora', sans-serif; font-size: 1.1rem; color: rgba(255,255,255,0.3); letter-spacing: 0.01em; text-align: center; max-width: 520px; line-height: 1.7;">
                    How we build, ship, and support Field Service Management and Wholesale Engine.
                </p>
            </div>

            {{-- Product pills --}}
            <div class="tt01-s6 flex items-center gap-4 mt-10">
                <div class="tt01-product-pill" style="border-color: rgba(17,193,143,0.2); background: rgba(17,193,143,0.04);">
                    <div class="w-2 h-2 rounded-full" style="background: #11C18F;"></div>
                    <span style="color: #11C18F;">FSM</span>
                </div>
                <div class="tt01-product-pill" style="border-color: rgba(72,170,165,0.2); background: rgba(72,170,165,0.04);">
                    <div class="w-2 h-2 rounded-full" style="background: #48AAA5;"></div>
                    <span style="color: #48AAA5;">WE</span>
                </div>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="tt01-s7 flex items-center justify-between">
            <div></div>
            <span style="font-family: 'Sora', sans-serif; font-size: 12px; letter-spacing: 0.15em; text-transform: uppercase; color: rgba(255,255,255,0.18);">February 2026</span>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .tt01-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(3.5rem, 9vw, 7rem);
        letter-spacing: -0.035em;
    }

    .tt01-gradient {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 35%, #11C18F 65%, #AFEFCD 100%);
        background-size: 300% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: tt01-shimmer 5s ease-in-out infinite;
        position: relative;
    }

    .tt01-gradient::after {
        content: 'Toolkit';
        position: absolute;
        top: 0; left: 0; right: 0;
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 35%, #11C18F 65%, #AFEFCD 100%);
        background-size: 300% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: tt01-shimmer 5s ease-in-out infinite;
        filter: blur(30px);
        opacity: 0.35;
        z-index: -1;
    }

    .tt01-product-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        border-radius: 9999px;
        border: 1px solid;
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 0.9rem;
        letter-spacing: 0.05em;
    }

    @keyframes tt01-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 300% center; }
    }

    @keyframes tt01-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt01-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tt01-s1 { opacity: 0; animation: tt01-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt01-s2 { opacity: 0; animation: tt01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .tt01-s3 { opacity: 0; animation: tt01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .tt01-s4 { opacity: 0; animation: tt01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .tt01-s5 { opacity: 0; animation: tt01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .tt01-s6 { opacity: 0; animation: tt01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
    .tt01-s7 { opacity: 0; animation: tt01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var canvas = document.getElementById('tt01-particles');
        if (!canvas) return;
        var ctx = canvas.getContext('2d');
        var w, h, particles = [];
        var COUNT = 55;
        var CONNECT = 130;

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
                    o: Math.random() * 0.2 + 0.05,
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
                        ctx.strokeStyle = 'rgba(17,193,143,' + ((1 - d / CONNECT) * 0.05) + ')';
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
