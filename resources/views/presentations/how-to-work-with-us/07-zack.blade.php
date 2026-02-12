<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 12%; left: 50%; width: 45%; height: 30%; transform: translateX(-50%); background: radial-gradient(ellipse, rgba(17,193,143,0.04) 0%, transparent 70%); filter: blur(50px);"></div>
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(17,193,143,0.012) 1px, transparent 1px), linear-gradient(90deg, rgba(17,193,143,0.012) 1px, transparent 1px); background-size: 64px 64px;"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(17,193,143,0.3) 1px, transparent 1px); background-size: 44px 44px; opacity: 0.025;"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 82%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex" style="padding: 56px 72px 48px;">

        <div style="width: 38%; display: flex; flex-direction: column; justify-content: center; padding-right: 48px;">
            <div class="hw07-stagger-1" style="opacity: 0;">
                <h1 class="hw07-name" style="font-family: 'Cairo', sans-serif; font-weight: 900; font-size: clamp(4rem, 8vw, 7rem); line-height: 0.95; letter-spacing: -0.035em;">Zack</h1>
            </div>
            <p class="hw07-stagger-2" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: 1.1rem; font-weight: 300; color: rgba(255,255,255,0.3); margin-top: 14px; font-style: italic;">"Draw the Lines"</p>
            <div class="hw07-line" style="width: 52px; height: 2px; margin-top: 24px; transform: scaleX(0); transform-origin: left;"></div>
        </div>

        <div style="width: 62%; display: flex; flex-direction: column; justify-content: center; gap: 12px;">

            <div class="hw07-stagger-3 hw07-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">01</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Clear Expectations</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    I operate best when there's not much gray area on what you need from me. Define it and I'll deliver.
                </p>
            </div>

            <div class="hw07-stagger-4 hw07-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">02</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Give It to Me Straight</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    Constructive criticism is always welcome — I can take it and I learn from it every single time.
                </p>
            </div>

            <div class="hw07-stagger-5 hw07-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">03</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Heads Up Early</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    Give me as much advance notice as possible when something critical is coming my way. No surprises.
                </p>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .hw07-name {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 50%, #AFEFCD 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hw07-line {
        background: linear-gradient(90deg, #11C18F, rgba(17,193,143,0.1));
        animation: hw07-draw 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards;
    }

    .hw07-point { padding: 22px 0; }

    @keyframes hw07-reveal {
        from { opacity: 0; transform: translateY(20px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes hw07-draw { to { transform: scaleX(1); } }

    .hw07-stagger-1 { opacity: 0; animation: hw07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.1s forwards; }
    .hw07-stagger-2 { opacity: 0; animation: hw07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .hw07-stagger-3 { opacity: 0; animation: hw07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .hw07-stagger-4 { opacity: 0; animation: hw07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .hw07-stagger-5 { opacity: 0; animation: hw07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
</style>
