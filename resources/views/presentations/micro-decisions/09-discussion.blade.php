<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="md09-aurora md09-aurora-1"></div>
        <div class="md09-aurora md09-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Constellation particles --}}
    <canvas id="md09-particles" class="absolute inset-0 pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="md09-page relative z-10">

        {{-- Top bar --}}
        <div class="md09-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Micro Decisions</span>
        </div>

        {{-- Headline --}}
        <div class="md09-s2 text-center">
            <h1 class="md09-headline">Let's <span class="md09-gradient-text">Talk</span></h1>
            <p style="font-family: 'Sora', sans-serif; font-size: 1rem; color: rgba(255,255,255,0.35); margin-top: 10px;">Three questions for the room.</p>
        </div>

        {{-- Discussion prompt cards --}}
        <div class="md09-prompts">

            {{-- Prompt 1 --}}
            <div class="md09-s3">
                <div class="md09-prompt group">
                    <div class="md09-prompt-glow md09-glow-green"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="md09-prompt-num">01</span>
                        <h3 class="md09-prompt-question">Where are we overthinking right now?</h3>
                        <p class="md09-prompt-sub">What's a decision or process that we're making harder than it needs to be?</p>
                    </div>
                </div>
            </div>

            {{-- Prompt 2 --}}
            <div class="md09-s4">
                <div class="md09-prompt group">
                    <div class="md09-prompt-glow md09-glow-teal"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="md09-prompt-num">02</span>
                        <h3 class="md09-prompt-question">What's our "kitchen"?</h3>
                        <p class="md09-prompt-sub">If we could only focus on one thing first, what room do we clean?</p>
                    </div>
                </div>
            </div>

            {{-- Prompt 3 --}}
            <div class="md09-s5">
                <div class="md09-prompt group">
                    <div class="md09-prompt-glow md09-glow-green"></div>
                    <div style="position: relative; z-index: 1;">
                        <span class="md09-prompt-num">03</span>
                        <h3 class="md09-prompt-question">What "pans" do we need permission to throw?</h3>
                        <p class="md09-prompt-sub">What imperfect-but-forward action are we hesitating on?</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom --}}
        <div class="md09-s6 text-center">
            <div class="flex items-center justify-center gap-4">
                <div class="w-12 h-[1px] bg-gradient-to-r from-transparent to-white/10"></div>
                <span class="text-[11px] tracking-[0.3em] uppercase text-white/25" style="font-family: 'Sora', sans-serif;">Micro Decisions <span class="text-[#11C18F]/70 font-semibold">&middot;</span> COS Systems</span>
                <div class="w-12 h-[1px] bg-gradient-to-l from-transparent to-white/10"></div>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    .md09-page {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        min-height: 100vh;
        padding: 32px 72px 48px;
        gap: 20px;
        align-content: center;
    }

    .md09-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(3rem, 6vw, 5rem);
        letter-spacing: -0.03em;
        line-height: 1;
        color: rgba(255,255,255,0.9);
    }

    .md09-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: md09-shimmer 6s ease-in-out infinite;
    }

    @keyframes md09-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Prompt cards */
    .md09-prompts {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        align-self: center;
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
    }

    .md09-prompt {
        position: relative;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.05);
        border-radius: 16px;
        padding: 32px 28px;
        overflow: hidden;
        transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .md09-prompt:hover {
        border-color: rgba(17,193,143,0.15);
        background: rgba(255,255,255,0.025);
        transform: translateY(-3px);
    }

    .md09-prompt-glow {
        position: absolute;
        top: -30px;
        right: -30px;
        width: 120px;
        height: 120px;
        border-radius: 50%;
        filter: blur(50px);
        opacity: 0;
        transition: opacity 0.7s ease;
    }

    .md09-glow-green { background: rgba(17,193,143,0.15); }
    .md09-glow-teal { background: rgba(72,170,165,0.15); }

    .md09-prompt:hover .md09-prompt-glow { opacity: 1; }

    .md09-prompt-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2.5rem;
        line-height: 1;
        background: linear-gradient(135deg, rgba(17,193,143,0.2), rgba(17,193,143,0.05));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: block;
        margin-bottom: 16px;
    }

    .md09-prompt-question {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.2rem;
        color: rgba(255,255,255,0.8);
        letter-spacing: -0.02em;
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .md09-prompt-sub {
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        color: rgba(255,255,255,0.3);
        line-height: 1.6;
    }

    /* Aurora */
    .md09-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .md09-aurora-1 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(17,193,143,0.07) 0%, transparent 70%);
        top: -10%; left: 20%;
        animation: md09-drift-1 14s ease-in-out infinite;
    }
    .md09-aurora-2 {
        width: 350px; height: 350px;
        background: radial-gradient(circle, rgba(72,170,165,0.05) 0%, transparent 70%);
        bottom: -5%; right: 10%;
        animation: md09-drift-2 16s ease-in-out infinite;
    }

    @keyframes md09-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(30px, 20px) scale(1.08); }
    }
    @keyframes md09-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-20px, -15px) scale(1.1); }
    }

    /* Stagger */
    @keyframes md09-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md09-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md09-s1 { opacity: 0; animation: md09-reveal-down 0.8s ease-out 0.1s forwards; }
    .md09-s2 { opacity: 0; animation: md09-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .md09-s3 { opacity: 0; animation: md09-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .md09-s4 { opacity: 0; animation: md09-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .md09-s5 { opacity: 0; animation: md09-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .md09-s6 { opacity: 0; animation: md09-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('md09-particles');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h, particles = [];
        const COUNT = 30;
        const DIST = 130;

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
                    vx: (Math.random() - 0.5) * 0.2,
                    vy: (Math.random() - 0.5) * 0.2,
                    size: Math.random() * 1.2 + 0.5,
                    opacity: Math.random() * 0.2 + 0.03,
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
                        ctx.strokeStyle = `rgba(17, 193, 143, ${(1 - dist / DIST) * 0.04})`;
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
