<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Radial glow from center --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 50%, rgba(17,193,143,0.04) 0%, transparent 60%);"></div>

        {{-- Subtle dot grid --}}
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Noise texture --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>

        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Constellation canvas --}}
    <canvas id="pl01-particles" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="pl01-stagger-1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <div class="flex items-center gap-3 px-4 py-2 rounded-full" style="border: 1px solid rgba(255,255,255,0.05); background: rgba(255,255,255,0.02);">
                <div class="w-2 h-2 rounded-full animate-pulse" style="background: #11C18F; box-shadow: 0 0 8px #11C18F;"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.3em; color: rgba(255,255,255,0.4); font-size: 10px; font-weight: 500;">US TAC</span>
            </div>
        </div>

        {{-- Hero --}}
        <div class="flex-1 flex flex-col items-center justify-center">

            {{-- Eyebrow --}}
            <div class="pl01-stagger-2 mb-8">
                <div class="inline-flex items-center gap-3 px-6 py-2.5 rounded-full" style="border: 1px solid rgba(17,193,143,0.12); background: rgba(17,193,143,0.03);">
                    <div class="w-1 h-1 rounded-full" style="background: #11C18F; box-shadow: 0 0 6px #11C18F;"></div>
                    <span style="text-transform: uppercase; letter-spacing: 0.35em; color: rgba(17,193,143,0.8); font-size: 11px; font-weight: 600; font-family: 'Sora', sans-serif;">Product Landscape 2026</span>
                    <div class="w-1 h-1 rounded-full" style="background: #11C18F; box-shadow: 0 0 6px #11C18F;"></div>
                </div>
            </div>

            {{-- Title --}}
            <div class="pl01-stagger-3 mb-6">
                <h1 class="pl01-title text-center leading-[0.92]">
                    <span class="block" style="color: rgba(255,255,255,0.9);">The State of</span>
                    <span class="block pl01-product-names">WE, FSM & BE</span>
                </h1>
            </div>

            {{-- Decorative divider --}}
            <div class="pl01-stagger-4 mb-10">
                <div class="flex items-center gap-4">
                    <div style="width: 80px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.35));"></div>
                    <div style="width: 8px; height: 8px; transform: rotate(45deg); border: 1px solid rgba(17,193,143,0.35);"></div>
                    <div style="width: 80px; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.35));"></div>
                </div>
            </div>

            {{-- Subtitle --}}
            <div class="pl01-stagger-5">
                <p style="font-family: 'Sora', sans-serif; font-size: 1.15rem; color: rgba(255,255,255,0.35); letter-spacing: 0.01em; text-align: center; max-width: 520px; line-height: 1.7;">
                    An honest look at where our products stand, how we got here, and what happens next.
                </p>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="pl01-stagger-6 flex items-center justify-between">
            <div></div>
            <span style="font-family: 'Sora', sans-serif; font-size: 12px; letter-spacing: 0.15em; text-transform: uppercase; color: rgba(255,255,255,0.2);">February 2026</span>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    .pl01-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(4.5rem, 11vw, 9rem);
        letter-spacing: -0.035em;
    }

    .pl01-product-names {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 35%, #11C18F 65%, #AFEFCD 100%);
        background-size: 300% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl01-shimmer 5s ease-in-out infinite;
        position: relative;
    }

    .pl01-product-names::after {
        content: 'WE, FSM & BE';
        position: absolute;
        top: 0; left: 0; right: 0;
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 35%, #11C18F 65%, #AFEFCD 100%);
        background-size: 300% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl01-shimmer 5s ease-in-out infinite;
        filter: blur(30px);
        opacity: 0.4;
        z-index: -1;
    }

    @keyframes pl01-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 300% center; }
    }

    @keyframes pl01-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes pl01-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl01-stagger-1 { opacity: 0; animation: pl01-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl01-stagger-2 { opacity: 0; animation: pl01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .pl01-stagger-3 { opacity: 0; animation: pl01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .pl01-stagger-4 { opacity: 0; animation: pl01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .pl01-stagger-5 { opacity: 0; animation: pl01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .pl01-stagger-6 { opacity: 0; animation: pl01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('pl01-particles');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h, particles = [];
        const COUNT = 60;
        const CONNECT = 140;

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
        }

        function init() {
            particles = [];
            for (let i = 0; i < COUNT; i++) {
                particles.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    vx: (Math.random() - 0.5) * 0.25,
                    vy: (Math.random() - 0.5) * 0.25,
                    r: Math.random() * 1.5 + 0.5,
                    o: Math.random() * 0.25 + 0.05,
                });
            }
        }

        function frame() {
            ctx.clearRect(0, 0, w, h);

            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const d = Math.sqrt(dx * dx + dy * dy);
                    if (d < CONNECT) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(17,193,143,${(1 - d / CONNECT) * 0.06})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }

            particles.forEach(p => {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(17,193,143,${p.o})`;
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
        window.addEventListener('resize', () => { resize(); init(); });
    });
</script>
