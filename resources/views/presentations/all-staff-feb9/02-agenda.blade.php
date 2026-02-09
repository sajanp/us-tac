<div class="relative min-h-screen overflow-hidden" style="background: #050a14;">

    {{-- Background: subtle grid --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="m2-grid"></div>
        <div class="m2-glow"></div>
        <canvas class="m2-fiber-canvas" id="m2FiberCanvas"></canvas>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 48px 72px 48px 72px;">

        {{-- Header bar --}}
        <div class="m2-header m2-in-1">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 36px; height: 36px;" />
            <h1 class="m2-title">Agenda</h1>
            <div class="m2-title-rule"></div>
            <span class="m2-title-date">Feb 9</span>
        </div>

        {{-- Two-column layout --}}
        <div class="m2-cols flex-1">

            {{-- Left column: What's up --}}
            <div class="m2-col m2-in-2">
                <h2 class="m2-sec-title">What's up</h2>
                <div class="m2-sec-line"></div>
                <ul class="m2-list">
                    <li class="m2-in-4">Ashley hosted a Fireside Chat with 1Finity (Fujitsu) — great turnout</li>
                    <li class="m2-in-5">Valentine's Day is right around the corner</li>
                    <li class="m2-in-6">Isak is on winter break catching some sun</li>
                </ul>
            </div>

            {{-- Vertical divider --}}
            <div class="m2-divider m2-in-3">
                <div class="m2-div-line"></div>
                <div class="m2-div-dot"></div>
                <div class="m2-div-line"></div>
            </div>

            {{-- Right column: Highlights --}}
            <div class="m2-col m2-in-8">
                <h2 class="m2-sec-title">Highlights</h2>
                <div class="m2-sec-line"></div>

                <div class="m2-highlights">
                    <div class="m2-hl m2-in-9">
                        <div class="m2-hl-icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 1L11.5 6.5L17 7.5L13 11.5L14 17L9 14.5L4 17L5 11.5L1 7.5L6.5 6.5L9 1Z" fill="#11C18F" opacity="0.8"/></svg>
                        </div>
                        <div class="m2-hl-text">
                            <h3 class="m2-hl-title">US Tech Lockdown</h3>
                            <p class="m2-hl-desc">Focus areas, objectives, and the roadmap for the week ahead in West Palm Beach</p>
                        </div>
                    </div>
                    <div class="m2-hl m2-in-10">
                        <div class="m2-hl-icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 1L11.5 6.5L17 7.5L13 11.5L14 17L9 14.5L4 17L5 11.5L1 7.5L6.5 6.5L9 1Z" fill="#11C18F" opacity="0.8"/></svg>
                        </div>
                        <div class="m2-hl-text">
                            <h3 class="m2-hl-title">ISMS Documentation shared with auditor — <span class="m2-hl-date">February 11th</span></h3>
                        </div>
                    </div>
                    <div class="m2-hl m2-in-11">
                        <div class="m2-hl-icon">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M9 1L11.5 6.5L17 7.5L13 11.5L14 17L9 14.5L4 17L5 11.5L1 7.5L6.5 6.5L9 1Z" fill="#11C18F" opacity="0.8"/></svg>
                        </div>
                        <div class="m2-hl-text">
                            <h3 class="m2-hl-title">ISO Pre-audit scheduled — <span class="m2-hl-date">February 19th</span></h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* ======= SLIDE 2 — MERIDIAN AGENDA ======= */

    /* Grid background */
    .m2-grid {
        position: absolute; inset: 0;
        background-image:
            linear-gradient(rgba(17,193,143,0.5) 1px, transparent 1px),
            linear-gradient(90deg, rgba(17,193,143,0.5) 1px, transparent 1px);
        background-size: 80px 80px;
        opacity: 0.018;
    }
    .m2-glow {
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        width: 60vw; height: 60vh;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(17,193,143,0.035) 0%, transparent 60%);
        filter: blur(60px);
    }

    /* Header */
    .m2-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 44px;
    }
    .m2-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2rem;
        color: #11C18F;
        letter-spacing: -0.02em;
    }
    .m2-title-rule {
        flex: 1;
        height: 1px;
        background: linear-gradient(90deg, rgba(17,193,143,0.2), transparent 80%);
    }
    .m2-title-date {
        font-family: 'Sora', sans-serif;
        font-weight: 500;
        font-size: 0.8rem;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: rgba(17,193,143,0.4);
    }

    /* Columns */
    .m2-cols {
        display: grid;
        grid-template-columns: 38% auto 1fr;
        align-items: start;
    }
    .m2-col {
        position: relative;
        padding: 28px 36px;
    }

    /* Section titles */
    .m2-sec-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.4rem;
        color: rgba(255,255,255,0.88);
        letter-spacing: -0.01em;
        margin-bottom: 8px;
    }
    .m2-sec-line {
        width: 48px; height: 2px;
        background: #11C18F;
        margin-bottom: 28px;
    }

    /* List items */
    .m2-list {
        list-style: none;
        padding: 0; margin: 0;
        display: flex;
        flex-direction: column;
        gap: 18px;
    }
    .m2-list li {
        position: relative;
        padding-left: 18px;
        font-family: 'Sora', sans-serif;
        font-size: 0.92rem;
        color: rgba(255,255,255,0.48);
        line-height: 1.65;
    }
    .m2-list li::before {
        content: '';
        position: absolute;
        left: 0; top: 9px;
        width: 5px; height: 5px;
        border-radius: 50%;
        background: #11C18F;
    }

    /* Vertical divider */
    .m2-divider {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 28px 28px;
        align-self: stretch;
    }
    .m2-div-line {
        flex: 1;
        width: 1px;
        background: linear-gradient(to bottom, transparent, rgba(17,193,143,0.15), transparent);
    }
    .m2-div-dot {
        width: 8px; height: 8px;
        border-radius: 50%;
        background: #11C18F;
        box-shadow: 0 0 14px rgba(17,193,143,0.5);
        margin: 10px 0;
        animation: m2-dot-beat 3s ease-in-out infinite;
    }
    @keyframes m2-dot-beat {
        0%, 100% { transform: scale(1); opacity: 0.8; }
        50% { transform: scale(1.6); opacity: 0.25; }
    }

    /* Highlights — equal-weight items */
    .m2-highlights {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }
    .m2-hl {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        padding: 20px 24px;
        background: rgba(17,193,143,0.025);
        border: 1px solid rgba(17,193,143,0.08);
        border-radius: 10px;
        transition: background 0.4s ease, border-color 0.4s ease;
    }
    .m2-hl:hover {
        background: rgba(17,193,143,0.05);
        border-color: rgba(17,193,143,0.15);
    }
    .m2-hl-icon {
        flex-shrink: 0;
        width: 28px; height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(17,193,143,0.08);
        border-radius: 6px;
        margin-top: 1px;
    }
    .m2-hl-text {
        flex: 1;
        min-width: 0;
    }
    .m2-hl-title {
        font-family: 'Sora', sans-serif;
        font-size: 0.95rem;
        font-weight: 600;
        color: rgba(255,255,255,0.75);
        line-height: 1.5;
    }
    .m2-hl-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.38);
        line-height: 1.6;
        margin-top: 6px;
    }
    .m2-hl-date {
        color: #11C18F;
        font-weight: 600;
    }

    /* Discussion note */
    .m2-disc {
        display: flex;
        align-items: center;
        gap: 14px;
        font-family: 'Sora', sans-serif;
        font-size: 0.88rem;
        color: rgba(255,255,255,0.3);
        padding-left: 4px;
    }
    .m2-disc-ring {
        width: 10px; height: 10px;
        border-radius: 50%;
        border: 1.5px solid rgba(17,193,143,0.4);
    }

    /* Entrances */
    @keyframes m2-in {
        from { opacity: 0; transform: translateY(16px); }
        to   { opacity: 1; transform: translateY(0); }
    }
    .m2-in-1  { opacity: 0; animation: m2-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .m2-in-2  { opacity: 0; animation: m2-in 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .m2-in-3  { opacity: 0; animation: m2-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .m2-in-4  { opacity: 0; animation: m2-in 0.5s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .m2-in-5  { opacity: 0; animation: m2-in 0.5s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .m2-in-6  { opacity: 0; animation: m2-in 0.5s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .m2-in-7  { opacity: 0; animation: m2-in 0.5s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .m2-in-8  { opacity: 0; animation: m2-in 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .m2-in-9  { opacity: 0; animation: m2-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .m2-in-10 { opacity: 0; animation: m2-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .m2-in-11 { opacity: 0; animation: m2-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }

    /* Fiber network canvas */
    .m2-fiber-canvas {
        position: absolute;
        inset: 0;
        width: 100%; height: 100%;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('m2FiberCanvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h;

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
        }
        resize();
        window.addEventListener('resize', resize);

        // Fiber particles
        const particles = [];
        const count = 35;
        const maxDist = 140;

        for (let i = 0; i < count; i++) {
            particles.push({
                x: Math.random() * w,
                y: Math.random() * h,
                vx: (Math.random() - 0.5) * 0.3,
                vy: (Math.random() - 0.5) * 0.3,
                r: Math.random() * 1.5 + 0.5,
                o: Math.random() * 0.3 + 0.05
            });
        }

        function draw() {
            ctx.clearRect(0, 0, w, h);

            // Update positions
            particles.forEach(p => {
                p.x += p.vx;
                p.y += p.vy;
                if (p.x < 0) p.x = w;
                if (p.x > w) p.x = 0;
                if (p.y < 0) p.y = h;
                if (p.y > h) p.y = 0;
            });

            // Draw connections
            for (let i = 0; i < count; i++) {
                for (let j = i + 1; j < count; j++) {
                    const dx = particles[i].x - particles[j].x;
                    const dy = particles[i].y - particles[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < maxDist) {
                        const alpha = (1 - dist / maxDist) * 0.06;
                        ctx.beginPath();
                        ctx.moveTo(particles[i].x, particles[i].y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.strokeStyle = `rgba(17,193,143,${alpha})`;
                        ctx.lineWidth = 0.5;
                        ctx.stroke();
                    }
                }
            }

            // Draw particles
            particles.forEach(p => {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(17,193,143,${p.o})`;
                ctx.fill();
            });

            requestAnimationFrame(draw);
        }
        draw();
    });
</script>
