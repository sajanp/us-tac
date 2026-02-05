<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Animated aurora background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="aurora-blob aurora-1"></div>
        <div class="aurora-blob aurora-2"></div>
        <div class="aurora-blob aurora-3"></div>

        {{-- Noise texture overlay --}}
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>

        {{-- Radial vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Animated constellation particles --}}
    <canvas id="particles" class="absolute inset-0 pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="relative z-10 flex flex-col min-h-screen">

        {{-- Top bar --}}
        <div class="flex items-center justify-between px-12 pt-10 animate-fade-down">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-14 h-14" />
            <div class="flex items-center gap-3 px-4 py-2 rounded-full border border-white/5 bg-white/[0.02]">
                <div class="w-2 h-2 rounded-full bg-[#11C18F] animate-pulse shadow-[0_0_8px_#11C18F]"></div>
                <span class="uppercase tracking-[0.3em] text-white/40 text-[10px] font-medium">Live</span>
            </div>
        </div>

        {{-- Hero section --}}
        <div class="flex-1 flex flex-col items-center justify-center px-8">

            {{-- Eyebrow --}}
            <div class="stagger-1 mb-8">
                <div class="inline-flex items-center gap-3 px-6 py-2.5 rounded-full border border-[#11C18F]/15 bg-[#11C18F]/[0.04]">
                    <div class="w-1 h-1 rounded-full bg-[#11C18F] shadow-[0_0_6px_#11C18F]"></div>
                    <span class="uppercase tracking-[0.35em] text-[#11C18F]/90 text-[11px] font-semibold">US TAC Lockdown 2026</span>
                    <div class="w-1 h-1 rounded-full bg-[#11C18F] shadow-[0_0_6px_#11C18F]"></div>
                </div>
            </div>

            {{-- Massive headline --}}
            <div class="stagger-2 mb-6">
                <h1 class="hero-title text-center leading-[0.95] max-w-6xl">
                    <span class="block text-white/90">Welcome &amp;</span>
                    <span class="block gradient-text">Lockdown Goals</span>
                </h1>
            </div>

            {{-- Decorative line --}}
            <div class="stagger-3 mb-10">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-[1px] bg-gradient-to-r from-transparent to-[#11C18F]/40"></div>
                    <div class="w-2 h-2 rotate-45 border border-[#11C18F]/40"></div>
                    <div class="w-16 h-[1px] bg-gradient-to-l from-transparent to-[#11C18F]/40"></div>
                </div>
            </div>

            {{-- Subtitle --}}
            <div class="stagger-4 mb-20">
                <p class="text-lg md:text-xl text-center max-w-2xl leading-relaxed text-white/40">
                    Aligning on where we're headed and how we'll get there together.
                    <span class="text-white/70 font-medium">Let's build the foundation for how we scale.</span>
                </p>
            </div>

            {{-- Three pillars with dramatic numbering --}}
            <div class="stagger-5 grid grid-cols-1 md:grid-cols-3 gap-0 max-w-5xl w-full">

                {{-- Pillar 1 --}}
                <div class="pillar-card group relative border-r border-white/[0.04]">
                    <div class="relative p-10 text-center h-full">
                        {{-- Large background number --}}
                        <span class="absolute top-4 left-6 text-[80px] font-bold text-white/[0.08] leading-none select-none" style="font-family: 'Cairo', sans-serif;">01</span>

                        <div class="relative z-10">
                            <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-[#11C18F]/15 to-[#11C18F]/5 border border-[#11C18F]/10 flex items-center justify-center group-hover:border-[#11C18F]/30 group-hover:shadow-[0_0_30px_-5px_rgba(17,193,143,0.15)] transition-all duration-700">
                                <svg class="w-7 h-7 text-[#11C18F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 tracking-tight" style="font-family: 'Cairo', sans-serif;">Alignment</h3>
                            <p class="text-sm text-white/35 leading-relaxed group-hover:text-white/50 transition-colors duration-500">Get everyone rowing in the same direction with shared context</p>
                        </div>

                        {{-- Bottom accent line --}}
                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[2px] bg-gradient-to-r from-transparent via-[#11C18F]/50 to-transparent group-hover:w-3/4 transition-all duration-700"></div>
                    </div>
                </div>

                {{-- Pillar 2 --}}
                <div class="pillar-card group relative border-r border-white/[0.04]">
                    <div class="relative p-10 text-center h-full">
                        <span class="absolute top-4 left-6 text-[80px] font-bold text-white/[0.08] leading-none select-none" style="font-family: 'Cairo', sans-serif;">02</span>

                        <div class="relative z-10">
                            <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-[#0C7577]/20 to-[#0C7577]/5 border border-[#48AAA5]/10 flex items-center justify-center group-hover:border-[#48AAA5]/30 group-hover:shadow-[0_0_30px_-5px_rgba(72,170,165,0.15)] transition-all duration-700">
                                <svg class="w-7 h-7 text-[#48AAA5]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 tracking-tight" style="font-family: 'Cairo', sans-serif;">Documentation</h3>
                            <p class="text-sm text-white/35 leading-relaxed group-hover:text-white/50 transition-colors duration-500">Build repeatable, clear steps for how we work</p>
                        </div>

                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[2px] bg-gradient-to-r from-transparent via-[#48AAA5]/50 to-transparent group-hover:w-3/4 transition-all duration-700"></div>
                    </div>
                </div>

                {{-- Pillar 3 --}}
                <div class="pillar-card group relative">
                    <div class="relative p-10 text-center h-full">
                        <span class="absolute top-4 left-6 text-[80px] font-bold text-white/[0.08] leading-none select-none" style="font-family: 'Cairo', sans-serif;">03</span>

                        <div class="relative z-10">
                            <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-[#11C18F]/15 to-[#11C18F]/5 border border-[#11C18F]/10 flex items-center justify-center group-hover:border-[#11C18F]/30 group-hover:shadow-[0_0_30px_-5px_rgba(17,193,143,0.15)] transition-all duration-700">
                                <svg class="w-7 h-7 text-[#11C18F]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.281m5.94 2.28l-2.28 5.941" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-3 tracking-tight" style="font-family: 'Cairo', sans-serif;">Intentional Scale</h3>
                            <p class="text-sm text-white/35 leading-relaxed group-hover:text-white/50 transition-colors duration-500">Export our lessons and processes to the rest of the company</p>
                        </div>

                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[2px] bg-gradient-to-r from-transparent via-[#11C18F]/50 to-transparent group-hover:w-3/4 transition-all duration-700"></div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Bottom --}}
        <div class="stagger-6 px-12 pb-20 flex justify-center">
            <div class="flex items-center gap-4">
                <div class="w-12 h-[1px] bg-gradient-to-r from-transparent to-white/10"></div>
                <span class="text-[11px] tracking-[0.3em] uppercase text-white/25">Presented by <span class="text-[#11C18F]/70 font-semibold">Sajan</span></span>
                <div class="w-12 h-[1px] bg-gradient-to-l from-transparent to-white/10"></div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&display=swap" rel="stylesheet">
<style>
    /* Hero title */
    .hero-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(4rem, 10vw, 8rem);
        letter-spacing: -0.03em;
    }

    /* Gradient text */
    .gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: shimmer 6s ease-in-out infinite;
    }

    @keyframes shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Aurora blobs */
    .aurora-blob {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .aurora-1 {
        width: 600px; height: 600px;
        background: radial-gradient(circle, rgba(17,193,143,0.12) 0%, transparent 70%);
        top: -15%; right: -5%;
        animation: aurora-drift-1 12s ease-in-out infinite;
    }
    .aurora-2 {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(12,117,119,0.1) 0%, transparent 70%);
        bottom: -10%; left: -10%;
        animation: aurora-drift-2 15s ease-in-out infinite;
    }
    .aurora-3 {
        width: 400px; height: 400px;
        background: radial-gradient(circle, rgba(72,170,165,0.06) 0%, transparent 70%);
        top: 40%; left: 30%;
        animation: aurora-drift-3 18s ease-in-out infinite;
    }

    @keyframes aurora-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(-40px, 30px) scale(1.1); }
        66% { transform: translate(20px, -20px) scale(0.95); }
    }
    @keyframes aurora-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        33% { transform: translate(50px, -30px) scale(1.05); }
        66% { transform: translate(-30px, 40px) scale(1.1); }
    }
    @keyframes aurora-drift-3 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(40px, 20px) scale(1.15); }
    }

    /* Pillar hover glow */
    .pillar-card {
        transition: background 0.7s ease;
    }
    .pillar-card:hover {
        background: rgba(255,255,255,0.01);
    }

    /* Staggered entrance animations */
    @keyframes reveal {
        from { opacity: 0; transform: translateY(40px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes reveal-down {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-down { opacity: 0; animation: reveal-down 0.8s ease-out 0.1s forwards; }
    .stagger-1 { opacity: 0; animation: reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .stagger-2 { opacity: 0; animation: reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .stagger-3 { opacity: 0; animation: reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .stagger-4 { opacity: 0; animation: reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .stagger-5 { opacity: 0; animation: reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .stagger-6 { opacity: 0; animation: reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }
</style>

<script>
    // Constellation particle system
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('particles');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h, particles = [];
        const PARTICLE_COUNT = 50;
        const CONNECTION_DIST = 150;

        function resize() {
            w = canvas.width = window.innerWidth;
            h = canvas.height = window.innerHeight;
        }

        function createParticles() {
            particles = [];
            for (let i = 0; i < PARTICLE_COUNT; i++) {
                particles.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    vx: (Math.random() - 0.5) * 0.3,
                    vy: (Math.random() - 0.5) * 0.3,
                    size: Math.random() * 1.5 + 0.5,
                    opacity: Math.random() * 0.3 + 0.05,
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
                    if (dist < CONNECTION_DIST) {
                        const opacity = (1 - dist / CONNECTION_DIST) * 0.06;
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(17, 193, 143, ${opacity})`;
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
        createParticles();
        draw();
        window.addEventListener('resize', () => { resize(); createParticles(); });
    });
</script>
