<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Centered balanced glow --}}
        <div class="pl12-center-glow"></div>

        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>

        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Top bar --}}
        <div class="pl12-stagger-1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Product Landscape</span>
        </div>

        {{-- Heading --}}
        <div class="pl12-stagger-2" style="margin-top: 32px; margin-bottom: 16px;">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Key Milestone</span>
            </div>
            <h1 class="pl12-headline">Product Landscape 2026</h1>
        </div>

        {{-- Then vs Now --}}
        <div class="pl12-stagger-3" style="margin-bottom: 48px;">
            <div class="flex items-center gap-4">
                <span class="pl12-then-label">Then</span>
                <div class="pl12-then-bar">
                    <div class="pl12-then-fill"></div>
                    <span class="pl12-then-text">100% BE</span>
                </div>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" style="flex-shrink: 0; opacity: 0.3;">
                    <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="#11C18F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="pl12-now-label">Now</span>
                <span style="font-family: 'Sora', sans-serif; font-size: 0.82rem; color: rgba(17,193,143,0.6); font-weight: 500;">Diversified</span>
            </div>
        </div>

        {{-- Main bars --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1100px; width: 100%; gap: 20px;">

            {{-- FSM Bar --}}
            <div class="pl12-bar-row pl12-bar-1">
                <div class="pl12-bar-label">
                    <span class="pl12-bar-name" style="color: #11C18F;">FSM</span>
                </div>
                <div class="pl12-bar-track">
                    <div class="pl12-bar-fill pl12-fill-fsm" data-width="30"></div>
                    <div class="pl12-bar-glow pl12-glow-fsm"></div>
                </div>
                <div class="pl12-bar-pct">
                    <span class="pl12-counter" data-target="30">0</span><span class="pl12-pct-sign">%</span>
                </div>
            </div>

            {{-- WE Bar --}}
            <div class="pl12-bar-row pl12-bar-2">
                <div class="pl12-bar-label">
                    <span class="pl12-bar-name" style="color: #48AAA5;">WE</span>
                </div>
                <div class="pl12-bar-track">
                    <div class="pl12-bar-fill pl12-fill-we" data-width="30"></div>
                    <div class="pl12-bar-glow pl12-glow-we"></div>
                </div>
                <div class="pl12-bar-pct">
                    <span class="pl12-counter" data-target="30">0</span><span class="pl12-pct-sign">%</span>
                </div>
            </div>

            {{-- BE Bar --}}
            <div class="pl12-bar-row pl12-bar-3">
                <div class="pl12-bar-label">
                    <span class="pl12-bar-name" style="color: #8FAAA1;">BE</span>
                </div>
                <div class="pl12-bar-track">
                    <div class="pl12-bar-fill pl12-fill-be" data-width="30"></div>
                    <div class="pl12-bar-glow pl12-glow-be"></div>
                </div>
                <div class="pl12-bar-pct">
                    <span class="pl12-counter" data-target="30">0</span><span class="pl12-pct-sign">%</span>
                </div>
            </div>

            {{-- Prospector Bar --}}
            <div class="pl12-bar-row pl12-bar-4">
                <div class="pl12-bar-label">
                    <span class="pl12-bar-name" style="color: #4D5460;">Prospector</span>
                </div>
                <div class="pl12-bar-track">
                    <div class="pl12-bar-fill pl12-fill-prosp" data-width="9"></div>
                </div>
                <div class="pl12-bar-pct">
                    <span class="pl12-counter" data-target="9">0</span><span class="pl12-pct-sign">%</span>
                </div>
            </div>

        </div>

        {{-- Bottom note --}}
        <div class="pl12-stagger-4" style="margin-top: 40px;">
            <div class="flex items-center gap-4">
                <div style="width: 40px; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.25));"></div>
                <p style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.3); line-height: 1.6;">
                    From 100% BE to a balanced portfolio. The first time in COS history.
                </p>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    .pl12-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2.2rem, 5vw, 3.8rem);
        letter-spacing: -0.03em;
        line-height: 1.08;
        color: rgba(255,255,255,0.9);
    }

    /* Background glow */
    .pl12-center-glow {
        position: absolute;
        width: 900px; height: 600px;
        left: 50%; top: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(ellipse, rgba(17,193,143,0.04) 0%, rgba(72,170,165,0.02) 40%, transparent 70%);
        filter: blur(80px);
        animation: pl12-breathe 10s ease-in-out infinite;
    }
    @keyframes pl12-breathe {
        0%, 100% { transform: translate(-50%,-50%) scale(1); opacity: 1; }
        50% { transform: translate(-50%,-50%) scale(1.06); opacity: 0.7; }
    }

    /* Then vs Now */
    .pl12-then-label, .pl12-now-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.15em;
        color: rgba(255,255,255,0.3);
        flex-shrink: 0;
    }
    .pl12-then-bar {
        position: relative;
        width: 120px; height: 6px;
        border-radius: 3px;
        background: rgba(255,255,255,0.04);
        overflow: hidden;
    }
    .pl12-then-fill {
        position: absolute;
        inset: 0;
        border-radius: 3px;
        background: rgba(143,170,161,0.2);
    }
    .pl12-then-text {
        position: absolute;
        top: -20px; left: 0;
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        color: rgba(143,170,161,0.5);
        white-space: nowrap;
    }

    /* Bar rows */
    .pl12-bar-row {
        display: grid;
        grid-template-columns: 120px 1fr 80px;
        align-items: center;
        gap: 24px;
    }
    .pl12-bar-label {
        text-align: right;
    }
    .pl12-bar-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.2rem;
        letter-spacing: 0.03em;
    }

    /* Bar track */
    .pl12-bar-track {
        position: relative;
        height: 40px;
        border-radius: 6px;
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.03);
        overflow: hidden;
    }
    .pl12-bar-fill {
        position: absolute;
        top: 0; left: 0; bottom: 0;
        border-radius: 5px;
        width: 0%;
        transition: none;
    }
    .pl12-bar-glow {
        position: absolute;
        top: -10px; bottom: -10px;
        left: 0;
        width: 0%;
        border-radius: 20px;
        filter: blur(20px);
        opacity: 0.3;
        pointer-events: none;
    }

    /* Bar colors */
    .pl12-fill-fsm {
        background: linear-gradient(90deg, rgba(17,193,143,0.7) 0%, #11C18F 100%);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .pl12-glow-fsm { background: #11C18F; }

    .pl12-fill-we {
        background: linear-gradient(90deg, rgba(72,170,165,0.7) 0%, #48AAA5 100%);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .pl12-glow-we { background: #48AAA5; }

    .pl12-fill-be {
        background: linear-gradient(90deg, rgba(143,170,161,0.5) 0%, #8FAAA1 100%);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.08);
    }
    .pl12-glow-be { background: #8FAAA1; }

    .pl12-fill-prosp {
        background: linear-gradient(90deg, rgba(77,84,96,0.5) 0%, #4D5460 100%);
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.05);
    }

    /* Percentage */
    .pl12-bar-pct {
        display: flex;
        align-items: baseline;
    }
    .pl12-counter {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2.2rem;
        line-height: 1;
        color: rgba(255,255,255,0.85);
    }
    .pl12-pct-sign {
        font-family: 'Sora', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        color: rgba(255,255,255,0.35);
        margin-left: 2px;
    }

    /* Bar animation keyframes */
    @keyframes pl12-bar-grow-30 {
        from { width: 0%; }
        to { width: 30%; }
    }
    @keyframes pl12-bar-grow-9 {
        from { width: 0%; }
        to { width: 9%; }
    }

    /* Staggered bar fills */
    .pl12-bar-1 .pl12-bar-fill { animation: pl12-bar-grow-30 1.4s cubic-bezier(0.22,1,0.36,1) 1.2s forwards; }
    .pl12-bar-1 .pl12-bar-glow { animation: pl12-bar-grow-30 1.4s cubic-bezier(0.22,1,0.36,1) 1.2s forwards; }

    .pl12-bar-2 .pl12-bar-fill { animation: pl12-bar-grow-30 1.4s cubic-bezier(0.22,1,0.36,1) 1.5s forwards; }
    .pl12-bar-2 .pl12-bar-glow { animation: pl12-bar-grow-30 1.4s cubic-bezier(0.22,1,0.36,1) 1.5s forwards; }

    .pl12-bar-3 .pl12-bar-fill { animation: pl12-bar-grow-30 1.4s cubic-bezier(0.22,1,0.36,1) 1.8s forwards; }
    .pl12-bar-3 .pl12-bar-glow { animation: pl12-bar-grow-30 1.4s cubic-bezier(0.22,1,0.36,1) 1.8s forwards; }

    .pl12-bar-4 .pl12-bar-fill { animation: pl12-bar-grow-9 1.4s cubic-bezier(0.22,1,0.36,1) 2.1s forwards; }

    /* Reveal animations */
    @keyframes pl12-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes pl12-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl12-stagger-1 { opacity: 0; animation: pl12-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl12-stagger-2 { opacity: 0; animation: pl12-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.3s forwards; }
    .pl12-stagger-3 { opacity: 0; animation: pl12-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.6s forwards; }
    .pl12-stagger-4 { opacity: 0; animation: pl12-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 3.5s forwards; }

    /* Row reveals */
    .pl12-bar-1 { opacity: 0; animation: pl12-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.0s forwards; }
    .pl12-bar-2 { opacity: 0; animation: pl12-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.3s forwards; }
    .pl12-bar-3 { opacity: 0; animation: pl12-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.6s forwards; }
    .pl12-bar-4 { opacity: 0; animation: pl12-reveal 0.8s cubic-bezier(0.22,1,0.36,1) 1.9s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animated counter for each percentage
        var counters = document.querySelectorAll('.pl12-counter');
        counters.forEach(function(el) {
            var target = parseInt(el.getAttribute('data-target'));
            var delay = 1200;
            // Stagger based on bar position
            var row = el.closest('.pl12-bar-row');
            if (row && row.classList.contains('pl12-bar-2')) { delay = 1500; }
            if (row && row.classList.contains('pl12-bar-3')) { delay = 1800; }
            if (row && row.classList.contains('pl12-bar-4')) { delay = 2100; }

            var started = false;
            var observer = new IntersectionObserver(function(entries) {
                if (entries[0].isIntersecting && !started) {
                    started = true;
                    setTimeout(function() {
                        var duration = 1400;
                        var startTime = performance.now();

                        function animate(now) {
                            var elapsed = now - startTime;
                            var progress = Math.min(elapsed / duration, 1);
                            var eased = 1 - Math.pow(1 - progress, 3);
                            el.textContent = Math.round(eased * target);
                            if (progress < 1) {
                                requestAnimationFrame(animate);
                            }
                        }
                        requestAnimationFrame(animate);
                    }, delay);
                }
            });
            observer.observe(el);
        });
    });
</script>
