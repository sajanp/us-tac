<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="bottom: 10%; right: 5%; width: 40%; height: 35%; background: radial-gradient(ellipse, rgba(17,193,143,0.045) 0%, transparent 70%); filter: blur(50px);"></div>
        <div class="hw06-ripple" style="position: absolute; top: 55%; right: 10%; width: 300px; height: 300px; transform: translate(50%, -50%);">
            <div class="hw06-ring hw06-ring-1"></div>
            <div class="hw06-ring hw06-ring-2"></div>
            <div class="hw06-ring hw06-ring-3"></div>
        </div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(17,193,143,0.3) 1px, transparent 1px); background-size: 44px 44px; opacity: 0.025;"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 82%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex" style="padding: 56px 72px 48px;">

        <div style="width: 38%; display: flex; flex-direction: column; justify-content: center; padding-right: 48px;">
            <div class="hw06-stagger-1" style="opacity: 0;">
                <h1 class="hw06-name" style="font-family: 'Cairo', sans-serif; font-weight: 900; font-size: clamp(4rem, 8vw, 7rem); line-height: 0.95; letter-spacing: -0.035em;">Nick</h1>
            </div>
            <p class="hw06-stagger-2" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: 1.1rem; font-weight: 300; color: rgba(255,255,255,0.3); margin-top: 14px; font-style: italic;">"Just Reach Out"</p>
            <div class="hw06-line" style="width: 52px; height: 2px; margin-top: 24px; transform: scaleX(0); transform-origin: left;"></div>
        </div>

        <div style="width: 62%; display: flex; flex-direction: column; justify-content: center; gap: 12px;">

            <div class="hw06-stagger-3 hw06-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">01</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Don't Hesitate</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    Especially if you're waiting on something from me or need my help. Say something — don't sit on it.
                </p>
            </div>

            <div class="hw06-stagger-4 hw06-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">02</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Slack Me Anytime</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    Drop a message at any hour. It'll likely be the first thing I tackle in the morning if priority allows.
                </p>
            </div>

            <div class="hw06-stagger-5 hw06-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">03</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Skip the Email</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    Email is my most hated communication method. DM me directly — even if you already sent an email you need me to reference.
                </p>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .hw06-name {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 50%, #AFEFCD 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hw06-line {
        background: linear-gradient(90deg, #11C18F, rgba(17,193,143,0.1));
        animation: hw06-draw 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards;
    }

    .hw06-point { padding: 22px 0; }

    .hw06-ring {
        position: absolute;
        top: 50%; left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        border: 1px solid rgba(17, 193, 143, 0.04);
        animation: hw06-pulse 4s ease-out infinite;
    }

    .hw06-ring-1 { width: 80px; height: 80px; animation-delay: 0s; }
    .hw06-ring-2 { width: 180px; height: 180px; animation-delay: 1s; }
    .hw06-ring-3 { width: 280px; height: 280px; animation-delay: 2s; }

    @keyframes hw06-pulse {
        0% { opacity: 0.6; transform: translate(-50%, -50%) scale(0.8); }
        100% { opacity: 0; transform: translate(-50%, -50%) scale(1.4); }
    }

    @keyframes hw06-reveal {
        from { opacity: 0; transform: translateY(20px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes hw06-draw { to { transform: scaleX(1); } }

    .hw06-stagger-1 { opacity: 0; animation: hw06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.1s forwards; }
    .hw06-stagger-2 { opacity: 0; animation: hw06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .hw06-stagger-3 { opacity: 0; animation: hw06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .hw06-stagger-4 { opacity: 0; animation: hw06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .hw06-stagger-5 { opacity: 0; animation: hw06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
</style>
