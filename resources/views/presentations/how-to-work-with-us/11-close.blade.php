<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 40%; left: 50%; width: 55%; height: 45%; transform: translate(-50%, -50%); background: radial-gradient(ellipse, rgba(17,193,143,0.05) 0%, transparent 65%); filter: blur(50px); animation: hw11-breathe 8s ease-in-out infinite;"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(17,193,143,0.35) 1px, transparent 1px); background-size: 44px 44px; opacity: 0.025;"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 35%, #080c14 80%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center items-center text-center" style="padding: 60px 72px;">

        <h1 class="hw11-stagger-1" style="opacity: 0; font-family: 'Cairo', sans-serif; font-weight: 900; font-size: clamp(2.8rem, 6vw, 5rem); line-height: 1; letter-spacing: -0.03em; color: rgba(255,255,255,0.9);">
            Now You <span style="color: #11C18F;">Know</span>
        </h1>

        <div class="hw11-line" style="width: 60px; height: 2px; margin: 32px auto; transform: scaleX(0); transform-origin: center;"></div>

        <p class="hw11-stagger-3" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: clamp(1rem, 1.4vw, 1.15rem); font-weight: 400; color: rgba(255,255,255,0.45); line-height: 1.8; max-width: 560px;">
            Understanding how your teammates operate isn't just nice to know — it's how we move faster, communicate with less friction, and build stronger together.
        </p>

        <p class="hw11-stagger-4" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: 0.88rem; font-weight: 500; color: rgba(17,193,143,0.6); margin-top: 36px; letter-spacing: 0.03em;">
            Reference it. Respect it. Get better together.
        </p>

        <div class="hw11-stagger-5" style="opacity: 0; margin-top: 56px;">
            <img src="/cos-systems-logo.svg" alt="COS Systems" style="height: 24px; opacity: 0.3;">
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .hw11-line {
        background: linear-gradient(90deg, transparent, #11C18F, transparent);
        animation: hw11-draw 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards;
    }

    @keyframes hw11-breathe {
        0%, 100% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
        50% { opacity: 0.6; transform: translate(-50%, -50%) scale(1.06); }
    }

    @keyframes hw11-draw { to { transform: scaleX(1); } }

    @keyframes hw11-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    .hw11-stagger-1 { opacity: 0; animation: hw11-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .hw11-stagger-3 { opacity: 0; animation: hw11-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .hw11-stagger-4 { opacity: 0; animation: hw11-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.0s forwards; }
    .hw11-stagger-5 { opacity: 0; animation: hw11-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }
</style>
