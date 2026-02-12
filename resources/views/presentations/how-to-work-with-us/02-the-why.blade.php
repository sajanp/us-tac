<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 40%; left: 50%; width: 50%; height: 40%; transform: translate(-50%, -50%); background: radial-gradient(ellipse, rgba(17,193,143,0.04) 0%, transparent 70%); filter: blur(60px);"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(rgba(17,193,143,0.35) 1px, transparent 1px); background-size: 44px 44px; opacity: 0.02;"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 35%, #080c14 80%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center" style="padding: 60px 72px; max-width: 900px; margin: 0 auto;">

        {{-- Opening statement --}}
        <p class="hw02-stagger-1" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: clamp(1.4rem, 2.5vw, 1.9rem); font-weight: 300; color: rgba(255,255,255,0.75); line-height: 1.7; letter-spacing: -0.01em;">
            Every person on this team
            <span style="color: #11C18F; font-weight: 500;">operates differently.</span>
        </p>

        <div class="hw02-line" style="width: 48px; height: 2px; background: linear-gradient(90deg, #11C18F, rgba(17,193,143,0.1)); margin: 36px 0; transform: scaleX(0); transform-origin: left;"></div>

        <p class="hw02-stagger-3" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: clamp(0.95rem, 1.4vw, 1.1rem); font-weight: 400; color: rgba(255,255,255,0.4); line-height: 1.8; max-width: 640px;">
            Understanding those differences isn't just nice to know — it's how we move faster, communicate better, and avoid the friction that slows teams down.
        </p>

        <p class="hw02-stagger-4" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: clamp(0.95rem, 1.4vw, 1.1rem); font-weight: 400; color: rgba(255,255,255,0.4); line-height: 1.8; max-width: 640px; margin-top: 20px;">
            We asked everyone the same question:
        </p>

        {{-- The question --}}
        <div class="hw02-stagger-5" style="opacity: 0; margin-top: 40px; padding: 28px 32px; background: rgba(17,193,143,0.025); border-left: 2px solid rgba(17,193,143,0.3); border-radius: 0 10px 10px 0;">
            <p style="font-family: 'Cairo', sans-serif; font-weight: 800; font-size: clamp(1.3rem, 2.2vw, 1.7rem); color: rgba(255,255,255,0.85); line-height: 1.4;">
                "What do people need to know to <span style="color: #11C18F;">work with you</span> effectively?"
            </p>
        </div>

        <p class="hw02-stagger-6" style="opacity: 0; font-family: 'Sora', sans-serif; font-size: 0.9rem; font-weight: 400; color: rgba(255,255,255,0.25); line-height: 1.7; margin-top: 36px;">
            Here's what they said.
        </p>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    @keyframes hw02-reveal {
        from { opacity: 0; transform: translateY(20px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes hw02-draw { to { transform: scaleX(1); } }

    .hw02-line { animation: hw02-draw 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }

    .hw02-stagger-1 { opacity: 0; animation: hw02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .hw02-stagger-3 { opacity: 0; animation: hw02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.55s forwards; }
    .hw02-stagger-4 { opacity: 0; animation: hw02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .hw02-stagger-5 { opacity: 0; animation: hw02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .hw02-stagger-6 { opacity: 0; animation: hw02-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards; }
</style>
