<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="bottom: 20%; left: 50%; width: 50%; height: 40%; transform: translateX(-50%); background: radial-gradient(ellipse, rgba(17,193,143,0.04) 0%, transparent 70%); filter: blur(50px);"></div>
        <div class="absolute inset-0" style="background-image: repeating-linear-gradient(180deg, transparent, transparent 140px, rgba(17,193,143,0.01) 140px, rgba(17,193,143,0.01) 141px);"></div>
        <div class="absolute" style="bottom: 0; left: 0; right: 0; height: 40%; background: linear-gradient(180deg, transparent 0%, rgba(17,193,143,0.008) 100%);"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(17,193,143,0.3) 1px, transparent 1px); background-size: 44px 44px; opacity: 0.025;"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 82%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex" style="padding: 56px 72px 48px;">

        <div style="width: 38%; display: flex; flex-direction: column; justify-content: center; padding-right: 48px;">
            <div class="hw09-stagger-1" style="opacity: 0;">
                <h1 class="hw09-name" style="font-family: 'Cairo', sans-serif; font-weight: 900; font-size: clamp(4rem, 8vw, 7rem); line-height: 0.95; letter-spacing: -0.035em;">Dustin</h1>
            </div>
            <p class="hw09-stagger-2" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: 1.1rem; font-weight: 300; color: rgba(255,255,255,0.3); margin-top: 14px; font-style: italic;">"Go Deep Together"</p>
            <div class="hw09-line" style="width: 52px; height: 2px; margin-top: 24px; transform: scaleX(0); transform-origin: left;"></div>
        </div>

        <div style="width: 62%; display: flex; flex-direction: column; justify-content: center; gap: 12px;">

            <div class="hw09-stagger-3 hw09-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">01</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Set the Expectations</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    I thrive with structure. Anything you can do to help me understand the outcomes you're looking for will help me engage with you.
                </p>
            </div>

            <div class="hw09-stagger-4 hw09-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">02</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">One Thing at a Time</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    I take a long time to context switch between topics — even between bullet points. Be patient as we shift between subjects.
                </p>
            </div>

            <div class="hw09-stagger-5 hw09-point" style="opacity: 0;">
                <div style="display: flex; align-items: baseline; gap: 14px; margin-bottom: 10px;">
                    <span style="font-family: 'Cairo', sans-serif; font-weight: 700; font-size: 0.7rem; color: rgba(17,193,143,0.35); letter-spacing: 0.05em;">03</span>
                    <div style="flex: 1; height: 1px; background: rgba(17,193,143,0.08);"></div>
                </div>
                <h3 style="font-family: 'Sora', sans-serif; font-weight: 600; font-size: 1.35rem; color: rgba(255,255,255,0.9); margin-bottom: 10px;">Let's Work It Now</h3>
                <p style="font-family: 'Sora', sans-serif; font-weight: 400; font-size: 0.95rem; color: rgba(255,255,255,0.42); line-height: 1.75; max-width: 600px;">
                    If something is urgent, I want to work it together in real-time. Screenshare, phone call — I don't like punting things to future meetings.
                </p>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .hw09-name {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 50%, #AFEFCD 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hw09-line {
        background: linear-gradient(90deg, #11C18F, rgba(17,193,143,0.1));
        animation: hw09-draw 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards;
    }

    .hw09-point { padding: 22px 0; }

    @keyframes hw09-reveal {
        from { opacity: 0; transform: translateY(20px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes hw09-draw { to { transform: scaleX(1); } }

    .hw09-stagger-1 { opacity: 0; animation: hw09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.1s forwards; }
    .hw09-stagger-2 { opacity: 0; animation: hw09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .hw09-stagger-3 { opacity: 0; animation: hw09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .hw09-stagger-4 { opacity: 0; animation: hw09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .hw09-stagger-5 { opacity: 0; animation: hw09-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
</style>
