<div class="relative min-h-screen overflow-hidden" style="background: #060a12;">

    {{-- Deep abstract background --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Shifting aurora gradient --}}
        <div class="pl15-aurora"></div>
        {{-- Deep blue undertone --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 40%, rgba(20,30,60,0.4) 0%, transparent 60%);"></div>
        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        {{-- Heavy vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 20%, #060a12 75%);"></div>
    </div>

    {{-- Neural network canvas --}}
    <canvas id="pl15-neural" class="absolute inset-0 w-full h-full pointer-events-none"></canvas>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 56px 72px;">

        {{-- Subtle header --}}
        <div class="pl15-stagger-0 flex items-center justify-between" style="margin-bottom: auto;">
            <div class="flex items-center gap-3">
                <div class="pl15-pulse-dot"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.35em; color: rgba(255,255,255,0.15); font-size: 10px; font-weight: 500; font-family: 'Sora', sans-serif;">The Landscape Is Shifting</span>
            </div>
        </div>

        {{-- Central questions --}}
        <div class="flex-1 flex flex-col items-center justify-center" style="gap: 0;">

            {{-- Pre-title --}}
            <div class="pl15-stagger-1" style="margin-bottom: 48px;">
                <span style="font-family: 'Sora', sans-serif; font-size: 14px; font-weight: 400; letter-spacing: 0.15em; text-transform: uppercase; color: rgba(255,255,255,0.2);">The World of AI Is Changing Everything</span>
            </div>

            {{-- Question 1 --}}
            <div class="pl15-question pl15-q1">
                <div class="pl15-q-glow pl15-glow-muted"></div>
                <h2 class="pl15-q-text" style="color: rgba(255,255,255,0.7);">What is a software vendor?</h2>
            </div>

            {{-- Question 2 --}}
            <div class="pl15-question pl15-q2">
                <div class="pl15-q-glow pl15-glow-muted"></div>
                <h2 class="pl15-q-text" style="color: rgba(255,255,255,0.75);">Why will people buy "off the shelf"<br><span style="font-size: 0.75em; color: rgba(255,255,255,0.4);">two years from now?</span></h2>
            </div>

            {{-- Question 3 (THE question) --}}
            <div class="pl15-question pl15-q3">
                <div class="pl15-q-glow pl15-glow-green"></div>
                <h2 class="pl15-q-text pl15-q-final">What is our value?</h2>
            </div>

        </div>

        {{-- Empty bottom for breathing room --}}
        <div style="height: 40px;"></div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Aurora background */
    .pl15-aurora {
        position: absolute;
        inset: 0;
        background:
            radial-gradient(ellipse at 30% 20%, rgba(17,193,143,0.03) 0%, transparent 50%),
            radial-gradient(ellipse at 70% 80%, rgba(72,170,165,0.02) 0%, transparent 50%),
            radial-gradient(ellipse at 50% 50%, rgba(20,30,80,0.08) 0%, transparent 60%);
        animation: pl15-aurora-shift 12s ease-in-out infinite;
    }

    @keyframes pl15-aurora-shift {
        0%, 100% {
            background:
                radial-gradient(ellipse at 30% 20%, rgba(17,193,143,0.03) 0%, transparent 50%),
                radial-gradient(ellipse at 70% 80%, rgba(72,170,165,0.02) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 50%, rgba(20,30,80,0.08) 0%, transparent 60%);
        }
        33% {
            background:
                radial-gradient(ellipse at 60% 30%, rgba(17,193,143,0.04) 0%, transparent 50%),
                radial-gradient(ellipse at 30% 70%, rgba(72,170,165,0.03) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 50%, rgba(20,30,80,0.06) 0%, transparent 60%);
        }
        66% {
            background:
                radial-gradient(ellipse at 40% 60%, rgba(17,193,143,0.03) 0%, transparent 50%),
                radial-gradient(ellipse at 80% 30%, rgba(72,170,165,0.02) 0%, transparent 50%),
                radial-gradient(ellipse at 50% 50%, rgba(20,30,80,0.1) 0%, transparent 60%);
        }
    }

    /* Pulse dot */
    .pl15-pulse-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: rgba(17,193,143,0.4);
        box-shadow: 0 0 12px rgba(17,193,143,0.2);
        animation: pl15-pulse 3s ease-in-out infinite;
    }

    @keyframes pl15-pulse {
        0%, 100% { opacity: 0.3; transform: scale(1); }
        50% { opacity: 0.8; transform: scale(1.3); }
    }

    /* Questions */
    .pl15-question {
        position: relative;
        text-align: center;
        padding: 20px 0;
    }

    .pl15-q-text {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2rem, 4.5vw, 3.5rem);
        letter-spacing: -0.03em;
        line-height: 1.15;
        position: relative;
        z-index: 1;
    }

    .pl15-q-final {
        font-size: clamp(2.8rem, 6vw, 5rem);
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 50%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl15-final-shimmer 4s ease-in-out infinite;
    }

    @keyframes pl15-final-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Question glows */
    .pl15-q-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        height: 100%;
        border-radius: 50%;
        filter: blur(60px);
        z-index: 0;
        pointer-events: none;
    }

    .pl15-glow-muted {
        background: rgba(255,255,255,0.01);
    }

    .pl15-glow-green {
        background: rgba(17,193,143,0.06);
        animation: pl15-glow-breathe 4s ease-in-out infinite;
    }

    @keyframes pl15-glow-breathe {
        0%, 100% { opacity: 0.5; transform: translate(-50%, -50%) scale(1); }
        50% { opacity: 1; transform: translate(-50%, -50%) scale(1.1); }
    }

    /* Staggered reveal with LONG delays */
    @keyframes pl15-reveal {
        from { opacity: 0; transform: translateY(40px); filter: blur(8px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes pl15-reveal-subtle {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .pl15-stagger-0 { opacity: 0; animation: pl15-reveal-subtle 1.2s ease-out 0.2s forwards; }
    .pl15-stagger-1 { opacity: 0; animation: pl15-reveal-subtle 1.5s ease-out 0.5s forwards; }
    .pl15-q1 { opacity: 0; animation: pl15-reveal 1.2s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .pl15-q2 { opacity: 0; animation: pl15-reveal 1.2s cubic-bezier(0.22, 1, 0.36, 1) 2.5s forwards; }
    .pl15-q3 { opacity: 0; animation: pl15-reveal 1.4s cubic-bezier(0.22, 1, 0.36, 1) 4.0s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('pl15-neural');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h, nodes = [], t = 0;
        const NODE_COUNT = 40;
        const CONNECTION_DIST = 200;

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
        }

        function init() {
            nodes = [];
            for (let i = 0; i < NODE_COUNT; i++) {
                nodes.push({
                    x: Math.random() * w,
                    y: Math.random() * h,
                    vx: (Math.random() - 0.5) * 0.15,
                    vy: (Math.random() - 0.5) * 0.15,
                    r: Math.random() * 1.5 + 0.5,
                    phase: Math.random() * Math.PI * 2,
                });
            }
        }

        function frame() {
            t += 0.003;
            ctx.clearRect(0, 0, w, h);

            // Draw connections
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    const dx = nodes[i].x - nodes[j].x;
                    const dy = nodes[i].y - nodes[j].y;
                    const d = Math.sqrt(dx * dx + dy * dy);
                    if (d < CONNECTION_DIST) {
                        const alpha = (1 - d / CONNECTION_DIST) * 0.03;
                        const pulse = Math.sin(t * 2 + nodes[i].phase) * 0.5 + 0.5;
                        ctx.beginPath();
                        ctx.strokeStyle = `rgba(17,193,143,${alpha * (0.5 + pulse * 0.5)})`;
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.stroke();
                    }
                }
            }

            // Draw and move nodes
            nodes.forEach(n => {
                const pulse = Math.sin(t * 3 + n.phase) * 0.5 + 0.5;
                ctx.beginPath();
                ctx.arc(n.x, n.y, n.r * (0.8 + pulse * 0.4), 0, Math.PI * 2);
                ctx.fillStyle = `rgba(17,193,143,${0.04 + pulse * 0.04})`;
                ctx.fill();

                n.x += n.vx;
                n.y += n.vy;
                if (n.x < 0 || n.x > w) n.vx *= -1;
                if (n.y < 0 || n.y > h) n.vy *= -1;
            });

            requestAnimationFrame(frame);
        }

        resize();
        init();
        frame();
        window.addEventListener('resize', () => { resize(); init(); });
    });
</script>
