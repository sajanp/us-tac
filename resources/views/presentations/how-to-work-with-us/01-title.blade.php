<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 35%; left: 50%; width: 60%; height: 50%; transform: translate(-50%, -50%); background: radial-gradient(ellipse, rgba(17,193,143,0.06) 0%, transparent 65%); filter: blur(50px); animation: hw01-breathe 8s ease-in-out infinite;"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(17,193,143,0.35) 1px, transparent 1px); background-size: 44px 44px; opacity: 0.03;"></div>
        <div class="absolute inset-0" style="opacity: 0.015; background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIj48ZmlsdGVyIGlkPSJuIj48ZmVUdXJidWxlbmNlIHR5cGU9ImZyYWN0YWxOb2lzZSIgYmFzZUZyZXF1ZW5jeT0iLjc1IiBudW1PY3RhdmVzPSI0IiBzdGl0Y2hUaWxlcz0ic3RpdGNoIi8+PC9maWx0ZXI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsdGVyPSJ1cmwoI24pIiBvcGFjaXR5PSIwLjUiLz48L3N2Zz4=');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 35%, #080c14 80%);"></div>
        <canvas id="hw01-canvas" class="absolute inset-0 w-full h-full"></canvas>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center items-center text-center" style="padding: 40px 72px;">

        <img src="/cos-systems-logo.svg" class="hw01-stagger-1" alt="COS Systems" style="height: 28px; margin-bottom: 56px; opacity: 0;">

        <div class="hw01-stagger-2" style="font-family: 'Sora', sans-serif; font-size: 0.72rem; font-weight: 500; letter-spacing: 0.3em; color: rgba(255,255,255,0.2); text-transform: uppercase; margin-bottom: 28px; opacity: 0;">
            US TAC
        </div>

        <h1 class="hw01-stagger-3" style="opacity: 0;">
            <span style="font-family: 'Cairo', sans-serif; font-weight: 800; font-size: clamp(3rem, 8vw, 6.5rem); line-height: 0.92; letter-spacing: -0.035em; color: rgba(255,255,255,0.85); display: block;">How to</span>
            <span class="hw01-gradient" style="font-family: 'Cairo', sans-serif; font-weight: 900; font-size: clamp(3.5rem, 10vw, 8rem); line-height: 0.92; letter-spacing: -0.04em; display: block; margin-top: 4px;">Work With Us</span>
        </h1>

        <div class="hw01-line" style="width: 80px; height: 2px; margin: 40px auto; transform: scaleX(0); transform-origin: center;"></div>

        <p class="hw01-stagger-5" style="font-family: 'Sora', sans-serif; font-size: 1.05rem; font-weight: 300; color: rgba(255,255,255,0.3); max-width: 440px; line-height: 1.7; opacity: 0;">
            A guide to understanding how each of us operates best
        </p>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .hw01-gradient {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #11C18F 70%, #AFEFCD 100%);
        background-size: 300% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: hw01-shimmer 6s ease-in-out infinite;
    }

    .hw01-line {
        background: linear-gradient(90deg, transparent, #11C18F, transparent);
        animation: hw01-draw 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards;
    }

    @keyframes hw01-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 300% center; }
    }

    @keyframes hw01-breathe {
        0%, 100% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
        50% { opacity: 0.6; transform: translate(-50%, -50%) scale(1.08); }
    }

    @keyframes hw01-draw { to { transform: scaleX(1); } }

    @keyframes hw01-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    .hw01-stagger-1 { opacity: 0; animation: hw01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .hw01-stagger-2 { opacity: 0; animation: hw01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .hw01-stagger-3 { opacity: 0; animation: hw01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards; }
    .hw01-stagger-5 { opacity: 0; animation: hw01-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.15s forwards; }
</style>

<script>
    (function() {
        var canvas = document.getElementById('hw01-canvas');
        if (!canvas) return;
        var ctx = canvas.getContext('2d');
        var w, h, nodes = [];

        function resize() {
            w = canvas.width = window.innerWidth;
            h = canvas.height = window.innerHeight;
        }

        function init() {
            resize();
            for (var i = 0; i < 7; i++) {
                nodes.push({ x: w * 0.15 + Math.random() * w * 0.7, y: h * 0.15 + Math.random() * h * 0.7, vx: (Math.random() - 0.5) * 0.25, vy: (Math.random() - 0.5) * 0.25, r: 3 + Math.random() * 1.5, phase: Math.random() * Math.PI * 2 });
            }
            for (var i = 0; i < 28; i++) {
                nodes.push({ x: Math.random() * w, y: Math.random() * h, vx: (Math.random() - 0.5) * 0.12, vy: (Math.random() - 0.5) * 0.12, r: 0.8 + Math.random() * 0.8, phase: Math.random() * Math.PI * 2 });
            }
        }

        function frame(t) {
            ctx.clearRect(0, 0, w, h);
            for (var i = 0; i < nodes.length; i++) {
                for (var j = i + 1; j < nodes.length; j++) {
                    var dx = nodes[i].x - nodes[j].x, dy = nodes[i].y - nodes[j].y;
                    var d = Math.sqrt(dx * dx + dy * dy);
                    if (d < 260) {
                        ctx.beginPath();
                        ctx.moveTo(nodes[i].x, nodes[i].y);
                        ctx.lineTo(nodes[j].x, nodes[j].y);
                        ctx.strokeStyle = 'rgba(17,193,143,' + ((1 - d / 260) * 0.12) + ')';
                        ctx.lineWidth = 0.5;
                        ctx.stroke();
                    }
                }
            }
            for (var i = 0; i < nodes.length; i++) {
                var n = nodes[i];
                var pulse = Math.sin(t * 0.001 + n.phase) * 0.3 + 0.7;
                var isMain = i < 7;
                ctx.beginPath();
                ctx.arc(n.x, n.y, n.r * pulse, 0, Math.PI * 2);
                ctx.fillStyle = isMain ? 'rgba(17,193,143,' + (0.5 * pulse) + ')' : 'rgba(17,193,143,' + (0.15 * pulse) + ')';
                ctx.fill();
                if (isMain) {
                    ctx.beginPath();
                    ctx.arc(n.x, n.y, n.r * 3, 0, Math.PI * 2);
                    ctx.fillStyle = 'rgba(17,193,143,' + (0.04 * pulse) + ')';
                    ctx.fill();
                }
                n.x += n.vx; n.y += n.vy;
                if (n.x < 0 || n.x > w) n.vx *= -1;
                if (n.y < 0 || n.y > h) n.vy *= -1;
            }
            requestAnimationFrame(frame);
        }

        init();
        window.addEventListener('resize', resize);
        requestAnimationFrame(frame);
    })();
</script>
