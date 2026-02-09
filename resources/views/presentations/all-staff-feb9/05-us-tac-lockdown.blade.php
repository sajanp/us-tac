<div class="relative min-h-screen overflow-hidden" style="background: #050a14;">

    {{-- Background: layered atmosphere --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="m5-dots"></div>
        <div class="m5-glow m5-glow-1"></div>
        <div class="m5-glow m5-glow-2"></div>
        {{-- Floating node network --}}
        <canvas class="m5-nodes" id="m5Nodes"></canvas>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 32px 72px 48px 72px;">

        {{-- Header --}}
        <div class="m5-header m5-in-1">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="width: 36px; height: 36px;" />
            <h1 class="m5-title">US Tech Lockdown</h1>
            <div class="m5-title-rule"></div>
            <div class="m5-title-meta">
                <span class="m5-meta-location">West Palm Beach</span>
                <span class="m5-meta-sep"></span>
                <span class="m5-meta-date">Feb 9 – 12</span>
            </div>
        </div>

        {{-- Two-column layout --}}
        <div class="m5-layout flex-1">

            {{-- Left: context --}}
            <div class="m5-context">
                <p class="m5-lead m5-in-2">
                    This week, the US technical team is gathering for a <strong>4-day intensive</strong> to lock in the processes that have made our development side run like clockwork — and prepare to export them across the company.
                </p>

                {{-- Who's there --}}
                <div class="m5-who m5-in-3">
                    <div class="m5-who-label">In the room</div>
                    <div class="m5-who-names">
                        <span class="m5-name-tag">Dustin</span>
                        <span class="m5-name-tag">Saks</span>
                        <span class="m5-name-tag">Zack</span>
                        <span class="m5-name-tag">Nick</span>
                        <span class="m5-name-tag">Rogers</span>
                        <span class="m5-name-tag">Sajan</span>
                    </div>
                </div>

                {{-- Why it matters to everyone --}}
                <div class="m5-note m5-in-4">
                    <div class="m5-note-accent"></div>
                    <p class="m5-note-text">What gets built here will scale to the rest of COS. This is the first real test of exporting our processes to the broader organization.</p>
                </div>

                {{-- Streaming callout --}}
                <div class="m5-stream m5-in-5">
                    <div class="m5-stream-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" /></svg>
                    </div>
                    <p class="m5-stream-text">We'll try to <strong>live stream sessions via Zoom</strong> — at minimum, sessions will be recorded and shared.</p>
                </div>
            </div>

            {{-- Right: pillars + outcomes --}}
            <div class="m5-right">

                {{-- Three Pillars --}}
                <div class="m5-pillars-label m5-in-2">Focus areas</div>
                <div class="m5-pillars">
                    <div class="m5-pillar m5-in-3">
                        <div class="m5-pillar-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" /></svg>
                        </div>
                        <div>
                            <div class="m5-pillar-name">Alignment</div>
                            <div class="m5-pillar-desc">Shared direction and context across the US team</div>
                        </div>
                    </div>
                    <div class="m5-pillar m5-in-4">
                        <div class="m5-pillar-icon m5-pillar-icon-teal">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#48AAA5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" /></svg>
                        </div>
                        <div>
                            <div class="m5-pillar-name">Documentation</div>
                            <div class="m5-pillar-desc">Repeatable playbook for how we work</div>
                        </div>
                    </div>
                    <div class="m5-pillar m5-in-5">
                        <div class="m5-pillar-icon">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.281m5.94 2.28l-2.28 5.941" /></svg>
                        </div>
                        <div>
                            <div class="m5-pillar-name">Intentional Scale</div>
                            <div class="m5-pillar-desc">Export what works to the broader company</div>
                        </div>
                    </div>
                </div>

                {{-- Expected outcomes --}}
                <div class="m5-outcomes-label m5-in-5">Expected outcomes</div>
                <div class="m5-outcomes">
                    <div class="m5-outcome m5-in-6">
                        <span class="m5-outcome-num">01</span>
                        <span class="m5-outcome-text">Shared direction and clear priorities</span>
                    </div>
                    <div class="m5-outcome m5-in-7">
                        <span class="m5-outcome-num">02</span>
                        <span class="m5-outcome-text">Documented playbook from the last 6 weeks</span>
                    </div>
                    <div class="m5-outcome m5-in-8">
                        <span class="m5-outcome-num">03</span>
                        <span class="m5-outcome-text">6-week accountability plan for FSM</span>
                    </div>
                    <div class="m5-outcome m5-outcome-scale m5-in-9">
                        <span class="m5-outcome-num m5-outcome-num-teal">04</span>
                        <span class="m5-outcome-text">Wholesale Engine export strategy</span>
                    </div>
                    <div class="m5-outcome m5-outcome-scale m5-in-10">
                        <span class="m5-outcome-num m5-outcome-num-teal">05</span>
                        <span class="m5-outcome-text">Broader product roadmap alignment</span>
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
    /* ======= SLIDE 5 — US TAC LOCKDOWN OVERVIEW ======= */

    /* Dot background */
    .m5-dots {
        position: absolute; inset: 0;
        background-image: radial-gradient(circle, rgba(17,193,143,0.6) 0.8px, transparent 0.8px);
        background-size: 40px 40px;
        opacity: 0.035;
    }

    /* Dual ambient glows */
    .m5-glow {
        position: absolute;
        border-radius: 50%;
        filter: blur(100px);
    }
    .m5-glow-1 {
        top: -10%; left: 5%;
        width: 40vw; height: 40vw;
        max-width: 600px; max-height: 600px;
        background: radial-gradient(circle, rgba(17,193,143,0.06) 0%, transparent 60%);
    }
    .m5-glow-2 {
        bottom: -8%; right: 8%;
        width: 35vw; height: 35vw;
        max-width: 500px; max-height: 500px;
        background: radial-gradient(circle, rgba(72,170,165,0.04) 0%, transparent 60%);
    }

    /* Floating node network canvas */
    .m5-nodes {
        position: absolute;
        inset: 0;
        width: 100%; height: 100%;
        z-index: 1;
    }

    /* Header */
    .m5-header {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 16px;
    }
    .m5-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 2rem;
        color: #11C18F;
        letter-spacing: -0.02em;
        white-space: nowrap;
    }
    .m5-title-rule {
        flex: 1;
        height: 1px;
        background: linear-gradient(90deg, rgba(17,193,143,0.2), transparent 80%);
    }
    .m5-title-meta {
        display: flex;
        align-items: center;
        gap: 10px;
        flex-shrink: 0;
    }
    .m5-meta-location {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        font-weight: 500;
        color: rgba(255,255,255,0.35);
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }
    .m5-meta-sep {
        width: 3px; height: 3px;
        border-radius: 50%;
        background: rgba(17,193,143,0.3);
    }
    .m5-meta-date {
        font-family: 'Sora', sans-serif;
        font-size: 0.72rem;
        font-weight: 600;
        color: rgba(17,193,143,0.5);
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    /* Two-column layout */
    .m5-layout {
        display: grid;
        grid-template-columns: 42% 1fr;
        gap: 48px;
        align-items: start;
    }

    /* Left column: context */
    .m5-context {
        display: flex;
        flex-direction: column;
        gap: 16px;
        padding-top: 4px;
    }

    .m5-lead {
        font-family: 'Sora', sans-serif;
        font-size: 0.92rem;
        color: rgba(255,255,255,0.4);
        line-height: 1.7;
    }
    .m5-lead strong {
        color: rgba(255,255,255,0.75);
        font-weight: 600;
    }

    /* Who's there */
    .m5-who {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    .m5-who-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.65rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: rgba(255,255,255,0.2);
    }
    .m5-who-names {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
    .m5-name-tag {
        display: inline-block;
        padding: 4px 14px;
        border-radius: 6px;
        border: 1px solid rgba(17,193,143,0.12);
        background: rgba(17,193,143,0.04);
        color: rgba(17,193,143,0.7);
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        font-weight: 600;
        letter-spacing: 0.02em;
    }
    .m5-name-lead {
        border-color: rgba(17,193,143,0.2);
        background: rgba(17,193,143,0.08);
        color: #11C18F;
    }

    /* Bottom note */
    .m5-note {
        display: flex;
        gap: 16px;
        padding: 14px 18px;
        border-radius: 10px;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.04);
    }
    .m5-note-accent {
        width: 3px;
        flex-shrink: 0;
        border-radius: 2px;
        background: linear-gradient(180deg, #11C18F, rgba(17,193,143,0.2));
    }
    .m5-note-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        color: rgba(255,255,255,0.35);
        line-height: 1.65;
    }

    /* Streaming callout */
    .m5-stream {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 10px 14px;
        border-radius: 8px;
        background: rgba(17,193,143,0.03);
        border: 1px dashed rgba(17,193,143,0.12);
    }
    .m5-stream-icon {
        flex-shrink: 0;
        width: 28px; height: 28px;
        border-radius: 6px;
        background: rgba(17,193,143,0.06);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 1px;
    }
    .m5-stream-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.78rem;
        color: rgba(255,255,255,0.3);
        line-height: 1.6;
    }
    .m5-stream-text strong {
        color: rgba(17,193,143,0.7);
        font-weight: 600;
    }

    /* Right column */
    .m5-right {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    /* Pillars section */
    .m5-pillars-label,
    .m5-outcomes-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.65rem;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: rgba(255,255,255,0.2);
        margin-bottom: 10px;
    }
    .m5-outcomes-label {
        margin-top: 14px;
        color: rgba(72,170,165,0.35);
    }

    .m5-pillars {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .m5-pillar {
        display: flex;
        align-items: flex-start;
        gap: 14px;
        padding: 10px 16px;
        border-radius: 10px;
        background: rgba(255,255,255,0.018);
        border: 1px solid rgba(255,255,255,0.04);
        transition: background 0.5s ease, border-color 0.5s ease;
    }
    .m5-pillar:hover {
        background: rgba(17,193,143,0.03);
        border-color: rgba(17,193,143,0.1);
    }

    .m5-pillar-icon {
        width: 36px; height: 36px;
        border-radius: 9px;
        background: rgba(17,193,143,0.08);
        border: 1px solid rgba(17,193,143,0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
    }
    .m5-pillar-icon-teal {
        background: rgba(12,117,119,0.1);
        border-color: rgba(72,170,165,0.1);
    }

    .m5-pillar-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1rem;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.01em;
        margin-bottom: 2px;
    }
    .m5-pillar-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.78rem;
        color: rgba(255,255,255,0.3);
        line-height: 1.5;
    }

    /* Outcomes */
    .m5-outcomes {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .m5-outcome {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 6px 0;
        border-bottom: 1px solid rgba(255,255,255,0.025);
    }
    .m5-outcome:last-child {
        border-bottom: none;
    }

    .m5-outcome-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 0.8rem;
        color: #11C18F;
        width: 28px;
        flex-shrink: 0;
    }
    .m5-outcome-num-teal {
        color: #48AAA5;
    }

    .m5-outcome-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        color: rgba(255,255,255,0.5);
        line-height: 1.45;
    }

    .m5-outcome-scale .m5-outcome-text {
        color: rgba(255,255,255,0.35);
    }

    /* Entrances */
    @keyframes m5-in {
        from { opacity: 0; transform: translateY(18px) scale(0.98); filter: blur(3px); }
        to   { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
    }
    .m5-in-1  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .m5-in-2  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .m5-in-3  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards; }
    .m5-in-4  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .m5-in-5  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.75s forwards; }
    .m5-in-6  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .m5-in-7  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .m5-in-8  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .m5-in-9  { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
    .m5-in-10 { opacity: 0; animation: m5-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('m5Nodes');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h;

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
        }
        resize();
        window.addEventListener('resize', resize);

        // Nodes — slow floating dots with connection lines
        const nodes = [];
        const count = 28;
        const maxDist = 160;

        for (let i = 0; i < count; i++) {
            nodes.push({
                x: Math.random() * w,
                y: Math.random() * h,
                vx: (Math.random() - 0.5) * 0.25,
                vy: (Math.random() - 0.5) * 0.25,
                r: Math.random() * 1.8 + 0.6,
                o: Math.random() * 0.25 + 0.04,
                hue: Math.random() > 0.65 ? 170 : 160 // mix of green and teal
            });
        }

        function draw() {
            ctx.clearRect(0, 0, w, h);

            // Update positions
            nodes.forEach(n => {
                n.x += n.vx;
                n.y += n.vy;
                if (n.x < 0) n.x = w;
                if (n.x > w) n.x = 0;
                if (n.y < 0) n.y = h;
                if (n.y > h) n.y = 0;
            });

            // Draw connections
            for (let i = 0; i < count; i++) {
                for (let j = i + 1; j < count; j++) {
                    const dx = nodes[i].x - nodes[j].x;
                    const dy = nodes[i].y - nodes[j].y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < maxDist) {
                        const alpha = (1 - dist / maxDist) * 0.05;
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.strokeStyle = `rgba(17,193,143,${alpha})`;
                        ctx.lineWidth = 0.5;
                        ctx.stroke();
                    }
                }
            }

            // Draw nodes
            nodes.forEach(n => {
                ctx.beginPath();
                ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
                ctx.fillStyle = n.hue === 170
                    ? `rgba(72,170,165,${n.o})`
                    : `rgba(17,193,143,${n.o})`;
                ctx.fill();
            });

            requestAnimationFrame(draw);
        }
        draw();
    });
</script>
