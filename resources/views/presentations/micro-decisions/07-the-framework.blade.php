<div class="relative min-h-screen overflow-hidden bg-[#080c14]">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="md07-aurora md07-aurora-1"></div>
        <div class="md07-aurora md07-aurora-2"></div>
        <div class="absolute inset-0 opacity-[0.015]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 80%);"></div>
    </div>

    {{-- Content --}}
    <div class="md07-page relative z-10">

        {{-- Top bar --}}
        <div class="md07-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Micro Decisions</span>
        </div>

        {{-- Headline --}}
        <div class="md07-s2">
            <div class="inline-flex items-center gap-3 mb-4">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.5);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">The Framework</span>
            </div>
            <h1 class="md07-headline">What Is a <span class="md07-gradient-text">Micro Decision?</span></h1>
        </div>

        {{-- Three principles --}}
        <div class="md07-principles">

            {{-- Principle 1 --}}
            <div class="md07-s3">
                <div class="md07-principle group">
                    <span class="md07-num">01</span>
                    <div class="md07-principle-body">
                        <h3 class="md07-principle-title">What is the immediate goal?</h3>
                        <p class="md07-principle-desc">Not the end state. Not the five-year plan. What needs to happen <em>right now</em> to move one step forward?</p>
                    </div>
                    <div class="md07-principle-bar" style="background: #11C18F;"></div>
                </div>
            </div>

            {{-- Principle 2 --}}
            <div class="md07-s4">
                <div class="md07-principle group">
                    <span class="md07-num">02</span>
                    <div class="md07-principle-body">
                        <h3 class="md07-principle-title">What is the smallest action?</h3>
                        <p class="md07-principle-desc">Strip away the hypotheticals. Ignore what might happen three steps later. What is the single smallest thing you can do?</p>
                    </div>
                    <div class="md07-principle-bar" style="background: #48AAA5;"></div>
                </div>
            </div>

            {{-- Principle 3 --}}
            <div class="md07-s5">
                <div class="md07-principle group">
                    <span class="md07-num">03</span>
                    <div class="md07-principle-body">
                        <h3 class="md07-principle-title">Do it. Move on.</h3>
                        <p class="md07-principle-desc">Execute. Don't second-guess. The next decision will be informed by this one. Trust the sequence.</p>
                    </div>
                    <div class="md07-principle-bar" style="background: #11C18F;"></div>
                </div>
            </div>

        </div>

        {{-- What it's NOT vs what it IS --}}
        <div class="md07-s6">
            <div class="md07-contrast">
                <div class="md07-contrast-item">
                    <span class="md07-not">Not reckless</span>
                    <span class="md07-arrow">&rarr;</span>
                    <span class="md07-is">Sequenced</span>
                </div>
                <div class="md07-contrast-divider"></div>
                <div class="md07-contrast-item">
                    <span class="md07-not">Not ignoring problems</span>
                    <span class="md07-arrow">&rarr;</span>
                    <span class="md07-is">Prioritizing them</span>
                </div>
                <div class="md07-contrast-divider"></div>
                <div class="md07-contrast-item">
                    <span class="md07-not">Not cutting corners</span>
                    <span class="md07-arrow">&rarr;</span>
                    <span class="md07-is">Creating momentum</span>
                </div>
            </div>
        </div>
    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    .md07-page {
        display: grid;
        grid-template-rows: auto auto 1fr auto;
        min-height: 100vh;
        padding: 32px 72px 48px;
        gap: 16px;
        align-content: center;
    }

    .md07-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(2rem, 4vw, 3.2rem);
        letter-spacing: -0.03em;
        line-height: 1.05;
        color: rgba(255,255,255,0.9);
    }

    .md07-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: md07-shimmer 6s ease-in-out infinite;
    }

    @keyframes md07-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Principles */
    .md07-principles {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 800px;
        align-self: center;
        width: 100%;
    }

    .md07-principle {
        display: flex;
        gap: 20px;
        padding: 20px 24px;
        border-radius: 14px;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.05);
        position: relative;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .md07-principle:hover {
        border-color: rgba(17,193,143,0.12);
        transform: translateX(6px);
        background: rgba(255,255,255,0.025);
    }

    .md07-principle-bar {
        position: absolute;
        left: 0;
        top: 0;
        width: 3px;
        height: 100%;
        opacity: 0.4;
        border-radius: 14px 0 0 14px;
        transition: opacity 0.5s ease;
    }

    .md07-principle:hover .md07-principle-bar { opacity: 1; }

    .md07-num {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: 1.8rem;
        line-height: 1;
        background: linear-gradient(135deg, rgba(17,193,143,0.3), rgba(17,193,143,0.08));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        flex-shrink: 0;
        padding-top: 2px;
    }

    .md07-principle-body { flex: 1; }

    .md07-principle-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.15rem;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.02em;
        margin-bottom: 4px;
    }

    .md07-principle-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.35);
        line-height: 1.6;
    }

    .md07-principle-desc em {
        color: rgba(255,255,255,0.55);
        font-style: normal;
        font-weight: 500;
    }

    /* Contrast section */
    .md07-contrast {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        padding: 20px 0;
    }

    .md07-contrast-item {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .md07-not {
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        color: rgba(255,255,255,0.3);
        font-weight: 400;
        text-decoration: line-through;
        text-decoration-color: rgba(232,110,75,0.3);
    }

    .md07-arrow {
        color: rgba(17,193,143,0.4);
        font-size: 0.85rem;
    }

    .md07-is {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 0.9rem;
        color: #11C18F;
        letter-spacing: -0.01em;
    }

    .md07-contrast-divider {
        width: 1px;
        height: 24px;
        background: rgba(255,255,255,0.06);
    }

    /* Aurora */
    .md07-aurora {
        position: absolute;
        border-radius: 50%;
        filter: blur(120px);
        will-change: transform;
    }
    .md07-aurora-1 {
        width: 450px; height: 450px;
        background: radial-gradient(circle, rgba(17,193,143,0.07) 0%, transparent 70%);
        top: -5%; right: -5%;
        animation: md07-drift-1 14s ease-in-out infinite;
    }
    .md07-aurora-2 {
        width: 350px; height: 350px;
        background: radial-gradient(circle, rgba(72,170,165,0.05) 0%, transparent 70%);
        bottom: -10%; left: -5%;
        animation: md07-drift-2 16s ease-in-out infinite;
    }

    @keyframes md07-drift-1 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-20px, 15px) scale(1.08); }
    }
    @keyframes md07-drift-2 {
        0%, 100% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(30px, -20px) scale(1.1); }
    }

    /* Stagger */
    @keyframes md07-reveal {
        from { opacity: 0; transform: translateY(25px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes md07-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .md07-s1 { opacity: 0; animation: md07-reveal-down 0.8s ease-out 0.1s forwards; }
    .md07-s2 { opacity: 0; animation: md07-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.25s forwards; }
    .md07-s3 { opacity: 0; animation: md07-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .md07-s4 { opacity: 0; animation: md07-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .md07-s5 { opacity: 0; animation: md07-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .md07-s6 { opacity: 0; animation: md07-reveal 0.9s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }
</style>
