<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 45%; left: 15%; width: 40%; height: 45%; transform: translate(-50%, -50%); background: radial-gradient(ellipse, rgba(17,193,143,0.045) 0%, transparent 65%); filter: blur(50px);"></div>
        <div class="absolute" style="top: 50%; left: 15%; transform: translate(-50%, -50%); width: 500px; height: 500px; border-radius: 50%; border: 1px solid rgba(17,193,143,0.02);"></div>
        <div class="absolute" style="top: 50%; left: 15%; transform: translate(-50%, -50%); width: 340px; height: 340px; border-radius: 50%; border: 1px solid rgba(17,193,143,0.025);"></div>
        <div class="absolute" style="top: 50%; left: 15%; transform: translate(-50%, -50%); width: 180px; height: 180px; border-radius: 50%; border: 1px solid rgba(17,193,143,0.03);"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(17,193,143,0.3) 1px, transparent 1px); background-size: 44px 44px; opacity: 0.025;"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 82%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex" style="padding: 56px 72px 48px;">

        {{-- Left column --}}
        <div style="width: 38%; display: flex; flex-direction: column; justify-content: center; padding-right: 48px;">
            <div class="hw04-stagger-1" style="opacity: 0;">
                <h1 class="hw04-name" style="font-family: 'Cairo', sans-serif; font-weight: 900; font-size: clamp(4rem, 8vw, 7rem); line-height: 0.95; letter-spacing: -0.035em;">Saks</h1>
            </div>
            <p class="hw04-stagger-2" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: 1.1rem; font-weight: 300; color: rgba(255,255,255,0.3); margin-top: 14px; font-style: italic;">"Start With Why"</p>
            <div class="hw04-line" style="width: 52px; height: 2px; margin-top: 24px; transform: scaleX(0); transform-origin: left;"></div>
        </div>

        {{-- Right column --}}
        <div style="width: 62%; display: flex; flex-direction: column; justify-content: center; gap: 12px;">

            <div class="hw04-stagger-3 hw04-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">01</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">I Go Back to Basics</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    It might look like I'm dumbing things down to step zero — but there's a reason. The fundamentals matter more than you think.
                </p>
            </div>

            <div class="hw04-stagger-4 hw04-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">02</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">I Over-Communicate</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    Communication is key. I love giving as much information as possible. It might seem like a lot, but I'd rather you have too much context than not enough.
                </p>
            </div>

            <div class="hw04-stagger-5 hw04-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">03</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Purpose Before Solution</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    Before I jump to the fix, I'll question the why. What seems like an irrelevant question often turns out to be the key to a better answer.
                </p>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .hw04-name {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 50%, #AFEFCD 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hw04-line {
        background: linear-gradient(90deg, #11C18F, rgba(17,193,143,0.1));
        animation: hw04-draw 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards;
    }

    .hw04-point { padding: 22px 0; }

    @keyframes hw04-reveal {
        from { opacity: 0; transform: translateY(20px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes hw04-draw { to { transform: scaleX(1); } }

    .hw04-stagger-1 { opacity: 0; animation: hw04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.1s forwards; }
    .hw04-stagger-2 { opacity: 0; animation: hw04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .hw04-stagger-3 { opacity: 0; animation: hw04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .hw04-stagger-4 { opacity: 0; animation: hw04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .hw04-stagger-5 { opacity: 0; animation: hw04-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
</style>
