<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Central green glow — triumph emanating --}}
        <div class="pl10-hero-glow"></div>

        {{-- Warm secondary glow --}}
        <div class="pl10-warm-glow"></div>

        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>

        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Ember particle canvas --}}
    <canvas id="pl10-embers" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="pl10-stagger-1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Product Landscape</span>
        </div>

        {{-- Main content --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1100px; width: 100%;">

            {{-- Hero text --}}
            <div class="pl10-stagger-2" style="margin-bottom: 56px;">
                <h1 class="pl10-hero-text">We did it.</h1>
            </div>

            {{-- Three honest-but-proud blocks --}}
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; margin-bottom: 56px;">

                <div class="pl10-stagger-3 pl10-quote-block">
                    <div class="pl10-quote-accent" style="background: #11C18F;"></div>
                    <div class="pl10-quote-content">
                        <p class="pl10-quote-main">FSM was a hit.</p>
                        <p class="pl10-quote-sub">Even though it sucked.</p>
                    </div>
                </div>

                <div class="pl10-stagger-4 pl10-quote-block">
                    <div class="pl10-quote-accent" style="background: #11C18F;"></div>
                    <div class="pl10-quote-content">
                        <p class="pl10-quote-main">WE was a hit.</p>
                        <p class="pl10-quote-sub">Even though it had no UI.</p>
                    </div>
                </div>

                <div class="pl10-stagger-5 pl10-quote-block">
                    <div class="pl10-quote-accent" style="background: #11C18F;"></div>
                    <div class="pl10-quote-content">
                        <p class="pl10-quote-main">AT&T saw something like this work</p>
                        <p class="pl10-quote-sub">for the first time.</p>
                    </div>
                </div>

            </div>

            {{-- The $100mm stat --}}
            <div class="pl10-stagger-6" style="margin-bottom: 56px;">
                <div class="pl10-stat-block">
                    <div class="pl10-stat-label">Prime didn't have to pay Compax Digital</div>
                    <div class="pl10-stat-number">
                        <span class="pl10-dollar">$</span><span id="pl10-counter" class="pl10-amount">0</span><span class="pl10-unit">mm</span>
                    </div>
                </div>
            </div>

            {{-- Launch sequence --}}
            <div style="display: flex; align-items: center; gap: 32px;">
                <div class="pl10-launch pl10-stagger-7">
                    <div class="pl10-launch-dot"></div>
                    <span class="pl10-launch-text">Launched BSN</span>
                </div>
                <div class="pl10-launch-divider pl10-stagger-7"></div>
                <div class="pl10-launch pl10-stagger-8">
                    <div class="pl10-launch-dot"></div>
                    <span class="pl10-launch-text">Launched Prime</span>
                </div>
                <div class="pl10-launch-divider pl10-stagger-8"></div>
                <div class="pl10-launch pl10-stagger-9">
                    <div class="pl10-launch-dot"></div>
                    <span class="pl10-launch-text">Signed Ting</span>
                </div>
            </div>

        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Hero text */
    .pl10-hero-text {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(4rem, 10vw, 8rem);
        letter-spacing: -0.04em;
        line-height: 1;
        color: rgba(255,255,255,0.95);
        position: relative;
    }
    .pl10-hero-text::after {
        content: 'We did it.';
        position: absolute;
        top: 0; left: 0;
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(4rem, 10vw, 8rem);
        letter-spacing: -0.04em;
        color: rgba(17,193,143,0.15);
        filter: blur(40px);
        z-index: -1;
        animation: pl10-glow-pulse 4s ease-in-out infinite;
    }

    @keyframes pl10-glow-pulse {
        0%, 100% { opacity: 0.4; transform: scale(1); }
        50% { opacity: 0.7; transform: scale(1.02); }
    }

    /* Background glows */
    .pl10-hero-glow {
        position: absolute;
        width: 800px; height: 800px;
        left: -10%; top: -20%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(17,193,143,0.06) 0%, rgba(17,193,143,0.02) 40%, transparent 70%);
        filter: blur(80px);
        animation: pl10-breathe 8s ease-in-out infinite;
    }
    .pl10-warm-glow {
        position: absolute;
        width: 500px; height: 500px;
        right: 5%; bottom: 5%;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(17,193,143,0.04) 0%, transparent 70%);
        filter: blur(60px);
        animation: pl10-breathe 10s ease-in-out infinite reverse;
    }
    @keyframes pl10-breathe {
        0%, 100% { transform: scale(1); opacity: 1; }
        50% { transform: scale(1.1); opacity: 0.6; }
    }

    /* Quote blocks */
    .pl10-quote-block {
        display: flex;
        gap: 16px;
        padding: 20px;
        border-radius: 8px;
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.04);
        transition: border-color 0.3s ease;
    }
    .pl10-quote-block:hover {
        border-color: rgba(17,193,143,0.15);
    }
    .pl10-quote-accent {
        width: 3px;
        border-radius: 2px;
        flex-shrink: 0;
        opacity: 0.6;
    }
    .pl10-quote-content {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }
    .pl10-quote-main {
        font-family: 'Sora', sans-serif;
        font-weight: 600;
        font-size: 0.95rem;
        color: rgba(255,255,255,0.85);
        line-height: 1.4;
    }
    .pl10-quote-sub {
        font-family: 'Sora', sans-serif;
        font-weight: 400;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.35);
        line-height: 1.4;
    }

    /* Stat block */
    .pl10-stat-block {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }
    .pl10-stat-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.35);
        text-transform: uppercase;
        letter-spacing: 0.15em;
    }
    .pl10-stat-number {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        line-height: 1;
        display: flex;
        align-items: baseline;
    }
    .pl10-dollar {
        font-size: clamp(2rem, 5vw, 3.5rem);
        color: rgba(17,193,143,0.6);
    }
    .pl10-amount {
        font-size: clamp(3rem, 7vw, 5rem);
        background: linear-gradient(135deg, #11C18F, #AFEFCD);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .pl10-unit {
        font-size: clamp(1.5rem, 3vw, 2.2rem);
        color: rgba(17,193,143,0.6);
        margin-left: 4px;
    }

    /* Launch sequence */
    .pl10-launch {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .pl10-launch-dot {
        width: 8px; height: 8px;
        border-radius: 50%;
        background: #11C18F;
        box-shadow: 0 0 12px rgba(17,193,143,0.5);
    }
    .pl10-launch-text {
        font-family: 'Sora', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        color: rgba(255,255,255,0.8);
        letter-spacing: 0.01em;
    }
    .pl10-launch-divider {
        width: 40px; height: 1px;
        background: linear-gradient(to right, rgba(17,193,143,0.3), rgba(17,193,143,0.05));
    }

    /* Reveal animations */
    @keyframes pl10-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes pl10-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl10-stagger-1 { opacity: 0; animation: pl10-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl10-stagger-2 { opacity: 0; animation: pl10-reveal 1.2s cubic-bezier(0.22,1,0.36,1) 0.4s forwards; }
    .pl10-stagger-3 { opacity: 0; animation: pl10-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.0s forwards; }
    .pl10-stagger-4 { opacity: 0; animation: pl10-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.2s forwards; }
    .pl10-stagger-5 { opacity: 0; animation: pl10-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.4s forwards; }
    .pl10-stagger-6 { opacity: 0; animation: pl10-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 1.8s forwards; }
    .pl10-stagger-7 { opacity: 0; animation: pl10-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.4s forwards; }
    .pl10-stagger-8 { opacity: 0; animation: pl10-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 2.7s forwards; }
    .pl10-stagger-9 { opacity: 0; animation: pl10-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 3.0s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Counter animation for $100mm
        const counter = document.getElementById('pl10-counter');
        if (!counter) return;

        let started = false;
        const observer = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting && !started) {
                started = true;
                setTimeout(function() {
                    let current = 0;
                    const target = 100;
                    const duration = 2000;
                    const startTime = performance.now();

                    function animate(now) {
                        const elapsed = now - startTime;
                        const progress = Math.min(elapsed / duration, 1);
                        const eased = 1 - Math.pow(1 - progress, 3);
                        current = Math.round(eased * target);
                        counter.textContent = current;
                        if (progress < 1) {
                            requestAnimationFrame(animate);
                        }
                    }
                    requestAnimationFrame(animate);
                }, 1800);
            }
        });
        observer.observe(counter);

        // Ember particle system — slow-rising muted particles
        const canvas = document.getElementById('pl10-embers');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h, embers = [];
        const COUNT = 35;

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
        }

        function init() {
            embers = [];
            for (let i = 0; i < COUNT; i++) {
                embers.push({
                    x: Math.random() * w,
                    y: h + Math.random() * 200,
                    vx: (Math.random() - 0.5) * 0.3,
                    vy: -(Math.random() * 0.4 + 0.15),
                    r: Math.random() * 2 + 0.5,
                    life: Math.random(),
                    maxLife: 0.6 + Math.random() * 0.4,
                    hue: Math.random() > 0.6 ? '17,193,143' : '175,239,205',
                });
            }
        }

        function frame() {
            ctx.clearRect(0, 0, w, h);
            embers.forEach(function(e) {
                e.x += e.vx + Math.sin(e.life * 3) * 0.15;
                e.y += e.vy;
                e.life += 0.002;

                if (e.y < -20 || e.life > e.maxLife) {
                    e.x = Math.random() * w;
                    e.y = h + 20;
                    e.life = 0;
                }

                const alpha = Math.sin((e.life / e.maxLife) * Math.PI) * 0.15;
                ctx.beginPath();
                ctx.arc(e.x, e.y, e.r, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(' + e.hue + ',' + alpha + ')';
                ctx.fill();
            });
            requestAnimationFrame(frame);
        }

        resize();
        init();
        frame();
        window.addEventListener('resize', function() { resize(); init(); });
    });
</script>
