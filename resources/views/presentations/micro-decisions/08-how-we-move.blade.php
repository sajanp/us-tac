<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="md08-aurora md08-aurora-1"></div>
        <div class="md08-aurora md08-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Momentum lines --}}
    <canvas id="md08-momentum" class="absolute inset-0 pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col min-h-screen items-center justify-center" style="padding: 32px 72px 48px;">

        {{-- Top bar (absolute positioned) --}}
        <div class="md08-s1 absolute top-8 left-[72px] right-[72px] flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Micro Decisions</span>
        </div>

        {{-- Central message --}}
        <div class="max-w-3xl text-center">

            {{-- Eyebrow --}}
            <div class="md08-s2 mb-10">
                <div class="inline-flex items-center gap-3 px-6 py-2.5 rounded-full border border-[#11C18F]/15 bg-[#11C18F]/[0.04]">
                    <div class="w-1 h-1 rounded-full bg-[#11C18F] shadow-[0_0_6px_#11C18F]"></div>
                    <span class="uppercase tracking-[0.35em] text-[#11C18F]/90 text-[11px] font-semibold" style="font-family: 'Sora', sans-serif;">Our Reality</span>
                    <div class="w-1 h-1 rounded-full bg-[#11C18F] shadow-[0_0_6px_#11C18F]"></div>
                </div>
            </div>

            {{-- Main statement --}}
            <div class="md08-s3 mb-8">
                <h1 class="md08-headline">
                    We are in the middle of <span class="md08-gradient-text">real change.</span>
                </h1>
            </div>

            {{-- Supporting lines --}}
            <div class="md08-s4 mb-6">
                <p style="font-family: 'Sora', sans-serif; font-size: 1.1rem; color: rgba(255,255,255,0.4); line-height: 2;">
                    New processes. New structures. New ways of working.
                </p>
            </div>

            <div class="md08-s5 mb-12">
                <p style="font-family: 'Sora', sans-serif; font-size: 1.1rem; color: rgba(255,255,255,0.4); line-height: 2;">
                    Not everything will be perfect on day one.<br>
                    <span style="color: rgba(255,255,255,0.6); font-weight: 500;">And that's exactly the point.</span>
                </p>
            </div>

            {{-- Divider --}}
            <div class="md08-s6 mb-12">
                <div class="flex items-center justify-center gap-4">
                    <div class="w-20 h-[1px] bg-gradient-to-r from-transparent to-[#11C18F]/30"></div>
                    <div class="w-2 h-2 rotate-45 border border-[#11C18F]/30"></div>
                    <div class="w-20 h-[1px] bg-gradient-to-l from-transparent to-[#11C18F]/30"></div>
                </div>
            </div>

            {{-- Kicker --}}
            <div class="md08-s7">
                <p class="md08-kicker">
                    Every micro decision <span style="color: #11C18F; font-weight: 900;">compounds.</span>
                </p>
                <p style="font-family: 'Sora', sans-serif; font-size: 0.95rem; color: rgba(255,255,255,0.3); margin-top: 12px;">
                    Small moves today become the foundation we build on tomorrow.
                </p>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    .md08-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2.5rem, 5.5vw, 4rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .md08-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: md08-shimmer 6s ease-in-out infinite;
    }

    @keyframes md08-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    .md08-kicker {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: clamp(1.5rem, 3vw, 2.2rem);
        color: rgba(255,255,255,0.7);
        letter-spacing: -0.02em;
    }

    /* Aurora */
    .md08-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .md08-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.08) 0%, transparent 70%);
        top: 10%; left: -10%;
        animation: md08-drift-1 14s ease-in-out infinite;
    }
    .md08-aurora-2 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(72,170,165,0.06) 0%, transparent 70%);
        bottom: 5%; right: -5%;
        animation: md08-drift-2 16s ease-in-out infinite;
    }

    @keyframes md08-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(40px, -20px) scale(1.1); }
    }
    @keyframes md08-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-30px, 20px) scale(1.08); }
    }

    /* Stagger */
    @keyframes md08-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md08-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md08-s1 { opacity: 0; animation: md08-reveal-down 0.8s ease-out 0.1s forwards; }
    .md08-s2 { opacity: 0; animation: md08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .md08-s3 { opacity: 0; animation: md08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .md08-s4 { opacity: 0; animation: md08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .md08-s5 { opacity: 0; animation: md08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .md08-s6 { opacity: 0; animation: md08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards; }
    .md08-s7 { opacity: 0; animation: md08-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.7s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('md08-momentum');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h, lines = [];
        const LINE_COUNT = 12;

        function resize() {
            w = canvas.width = window.innerWidth;
            h = canvas.height = window.innerHeight;
        }

        function init() {
            lines = [];
            for (let i = 0; i < LINE_COUNT; i++) {
                lines.push({
                    y: Math.random() * h,
                    speed: 1.5 + Math.random() * 2,
                    length: 60 + Math.random() * 120,
                    opacity: 0.02 + Math.random() * 0.04,
                    x: Math.random() * w,
                });
            }
        }

        function draw() {
            ctx.clearRect(0, 0, w, h);
            lines.forEach(l => {
                const grad = ctx.createLinearGradient(l.x, l.y, l.x + l.length, l.y);
                grad.addColorStop(0, `rgba(17, 193, 143, 0)`);
                grad.addColorStop(0.5, `rgba(17, 193, 143, ${l.opacity})`);
                grad.addColorStop(1, `rgba(17, 193, 143, 0)`);

                ctx.beginPath();
                ctx.strokeStyle = grad;
                ctx.lineWidth = 1;
                ctx.moveTo(l.x, l.y);
                ctx.lineTo(l.x + l.length, l.y);
                ctx.stroke();

                l.x += l.speed;
                if (l.x > w + l.length) {
                    l.x = -l.length;
                    l.y = Math.random() * h;
                }
            });
            requestAnimationFrame(draw);
        }

        resize();
        init();
        draw();
        window.addEventListener('resize', () => { resize(); init(); });
    });
</script>
