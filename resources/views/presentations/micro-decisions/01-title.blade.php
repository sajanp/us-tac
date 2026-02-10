<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Aurora background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="md01-aurora md01-aurora-1"></div>
        <div class="md01-aurora md01-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Constellation particles --}}
    <canvas id="md01-particles" class="absolute inset-0 pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col min-h-screen">

        {{-- Top bar --}}
        <div class="flex items-center justify-between px-12 pt-10 md01-s1">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-14 h-14" />
            <div class="flex items-center gap-3 px-4 py-2 rounded-full border border-white/5 bg-white/[0.02]">
                <div class="w-2 h-2 rounded-full bg-[#11C18F] animate-pulse shadow-[0_0_8px_#11C18F]"></div>
                <span class="uppercase tracking-[0.3em] text-white/40 text-[10px] font-medium" style="font-family: 'Sora', sans-serif;">Live</span>
            </div>
        </div>

        {{-- Hero --}}
        <div class="flex-1 flex flex-col items-center justify-center px-8">

            {{-- Pulsing dot with ripples --}}
            <div class="md01-s2 mb-14 relative flex items-center justify-center" style="width: 200px; height: 200px;">
                <div class="md01-ripple md01-ripple-1"></div>
                <div class="md01-ripple md01-ripple-2"></div>
                <div class="md01-ripple md01-ripple-3"></div>
                <div class="md01-dot"></div>
            </div>

            {{-- Headline --}}
            <div class="md01-s3 mb-6">
                <h1 class="md01-title text-center leading-[0.95]">
                    <span class="block text-white/90">Micro</span>
                    <span class="block md01-gradient-text">Decisions</span>
                </h1>
            </div>

            {{-- Divider --}}
            <div class="md01-s4 mb-8">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-[1px] bg-gradient-to-r from-transparent to-[#11C18F]/40"></div>
                    <div class="w-2 h-2 rotate-45 border border-[#11C18F]/40"></div>
                    <div class="w-16 h-[1px] bg-gradient-to-l from-transparent to-[#11C18F]/40"></div>
                </div>
            </div>

            {{-- Subtitle --}}
            <div class="md01-s5">
                <p class="text-lg md:text-xl text-center max-w-2xl leading-relaxed text-white/40" style="font-family: 'Sora', sans-serif;">
                    Small moves. <span class="text-white/70 font-medium">Real momentum.</span>
                </p>
            </div>
        </div>

        {{-- Bottom --}}
        <div class="md01-s6 px-12 pb-20 flex justify-center">
            <div class="flex items-center gap-4">
                <div class="w-12 h-[1px] bg-gradient-to-r from-transparent to-white/10"></div>
                <span class="text-[11px] tracking-[0.3em] uppercase text-white/25" style="font-family: 'Sora', sans-serif;">Team <span class="text-[#11C18F]/70 font-semibold">Discussion</span></span>
                <div class="w-12 h-[1px] bg-gradient-to-l from-transparent to-white/10"></div>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    .md01-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(4rem, 10vw, 8rem);
        letter-spacing: -0.03em;
    }

    .md01-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: md01-shimmer 6s ease-in-out infinite;
    }

    @keyframes md01-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Pulsing dot */
    .md01-dot {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        background: #11C18F;
        box-shadow: 0 0 40px rgba(17,193,143,0.6), 0 0 80px rgba(17,193,143,0.3);
        position: relative;
        z-index: 2;
        animation: md01-dot-pulse 3s ease-in-out infinite;
    }

    @keyframes md01-dot-pulse {
        0%, 100% { box-shadow: 0 0 40px rgba(17,193,143,0.6), 0 0 80px rgba(17,193,143,0.3); transform: scale(1); }
        50% { box-shadow: 0 0 60px rgba(17,193,143,0.8), 0 0 120px rgba(17,193,143,0.4); transform: scale(1.15); }
    }

    /* Ripples */
    .md01-ripple {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 24px;
        height: 24px;
        margin-top: -12px;
        margin-left: -12px;
        border-radius: 50%;
        border: 1px solid rgba(17,193,143,0.3);
        animation: md01-ripple-out 4s ease-out infinite;
    }
    .md01-ripple-2 { animation-delay: 1.3s; }
    .md01-ripple-3 { animation-delay: 2.6s; }

    @keyframes md01-ripple-out {
        0% { transform: scale(1); opacity: 0.6; }
        100% { transform: scale(12); opacity: 0; }
    }

    /* Aurora */
    .md01-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .md01-aurora-1 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(17,193,143,0.08) 0%, transparent 70%);
        top: -10%; right: -5%;
        animation: md01-drift-1 14s ease-in-out infinite;
    }
    .md01-aurora-2 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(12,117,119,0.06) 0%, transparent 70%);
        bottom: -10%; left: -8%;
        animation: md01-drift-2 16s ease-in-out infinite;
    }

    @keyframes md01-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-30px, 20px) scale(1.1); }
    }
    @keyframes md01-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(40px, -20px) scale(1.08); }
    }

    /* Stagger */
    @keyframes md01-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md01-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md01-s1 { opacity: 0; animation: md01-reveal-down 0.8s ease-out 0.1s forwards; }
    .md01-s2 { opacity: 0; animation: md01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .md01-s3 { opacity: 0; animation: md01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .md01-s4 { opacity: 0; animation: md01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .md01-s5 { opacity: 0; animation: md01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .md01-s6 { opacity: 0; animation: md01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('md01-particles');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h, particles = [];
        const COUNT = 40;
        const DIST = 140;

        function resize() {
            w = canvas.width = window.innerWidth;
            h = canvas.height = window.innerHeight;
        }

        function init() {
            particles = [];
            for (let i = 0; i < COUNT; i++) {
                particles.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    vx: (Math.random() - 0.5) * 0.25,
                    vy: (Math.random() - 0.5) * 0.25,
                    size: Math.random() * 1.5 + 0.5,
                    opacity: Math.random() * 0.25 + 0.05,
                });
            }
        }

        function draw() {
            ctx.clearRect(0, 0, w, h);
            for (let i = 0; i < particles.length; i++) {
                for (let j = i + 1; j < particles.length; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < DIST) {
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(17, 193, 143, ${(1 - dist / DIST) * 0.05})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            }
            particles.forEach(p => {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(17, 193, 143, ${p.opacity})`;
                ctx.fill();
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0 || p.x > w) p.vx *= -1;
                if (p.y < 0 || p.y > h) p.vy *= -1;
            });
            requestAnimationFrame(draw);
        }

        resize();
        init();
        draw();
        window.addEventListener('resize', () => { resize(); init(); });
    });
</script>
