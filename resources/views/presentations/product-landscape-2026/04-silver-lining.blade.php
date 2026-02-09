<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Dual-temperature aurora: coral top-left, green bottom-right --}}
        <div class="pl04-aurora pl04-aurora-coral"></div>
        <div class="pl04-aurora pl04-aurora-green"></div>

        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 40px 40px;"></div>

        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>

        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Diagonal divider SVG --}}
    <svg class="absolute inset-0 w-full h-full pointer-events-none z-[2]" preserveAspectRatio="none" viewBox="0 0 1920 1080">
        <defs>
            <linearGradient id="pl04-divider-grad" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="rgba(232,110,75,0.15)" />
                <stop offset="50%" stop-color="rgba(255,255,255,0.06)" />
                <stop offset="100%" stop-color="rgba(17,193,143,0.15)" />
            </linearGradient>
        </defs>
        <line x1="0" y1="520" x2="1920" y2="480" stroke="url(#pl04-divider-grad)" stroke-width="1" class="pl04-divider-line" />
    </svg>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 36px 72px;">

        {{-- Top bar --}}
        <div class="pl04-stagger-1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Product Landscape</span>
        </div>

        {{-- Two-part layout --}}
        <div class="flex-1 flex flex-col justify-center" style="max-width: 1200px; margin: 0 auto; width: 100%;">

            {{-- TOP HALF: The Sting --}}
            <div style="margin-bottom: 20px;">
                <div class="pl04-stagger-2" style="margin-bottom: 12px;">
                    <div class="inline-flex items-center gap-3">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background: #E86E4B; box-shadow: 0 0 10px rgba(232,110,75,0.4);"></div>
                        <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(232,110,75,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">The Sting</span>
                    </div>
                </div>

                <div class="pl04-stagger-3" style="margin-bottom: 14px;">
                    <h2 class="pl04-headline-sting">The SZ endeavor left <span class="pl04-coral-text">a few marks</span></h2>
                </div>

                <div class="pl04-stagger-4">
                    <div class="pl04-sting-grid">
                        <div class="pl04-sting-card">
                            <div class="pl04-sting-icon">
                                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <div class="pl04-sting-title">Intense internal effort</div>
                                <div class="pl04-sting-desc">Massive push to make SZ usable, pulling resources from the core product</div>
                            </div>
                        </div>
                        <div class="pl04-sting-card">
                            <div class="pl04-sting-icon">
                                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/></svg>
                            </div>
                            <div>
                                <div class="pl04-sting-title">Product launch reality check</div>
                                <div class="pl04-sting-desc">Launching and supporting a product brings its own set of harsh challenges</div>
                            </div>
                        </div>
                        <div class="pl04-sting-card">
                            <div class="pl04-sting-icon">
                                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                            </div>
                            <div>
                                <div class="pl04-sting-title">Cultural barrier</div>
                                <div class="pl04-sting-desc">US and Sweden operating with different expectations, rhythms, and context</div>
                            </div>
                        </div>
                        <div class="pl04-sting-card">
                            <div class="pl04-sting-icon">
                                <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/></svg>
                            </div>
                            <div>
                                <div class="pl04-sting-title">Internal strife</div>
                                <div class="pl04-sting-desc">Tension about effort, return on investment, and the company environment</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- TRANSITION: However --}}
            <div class="pl04-stagger-5" style="margin-bottom: 18px;">
                <div class="pl04-however-container">
                    <div class="pl04-however-line-left"></div>
                    <span class="pl04-however-text">However...</span>
                    <div class="pl04-however-line-right"></div>
                </div>
            </div>

            {{-- BOTTOM HALF: The Silver Lining --}}
            <div>
                <div class="pl04-stagger-6" style="margin-bottom: 12px;">
                    <div class="inline-flex items-center gap-3">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.5);"></div>
                        <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">The Silver Lining</span>
                    </div>
                </div>

                <div class="pl04-stagger-7" style="margin-bottom: 14px;">
                    <h2 class="pl04-headline-silver">
                        Nobody could have predicted<br><span class="pl04-green-text">the impact</span>
                    </h2>
                </div>

                <div class="pl04-stagger-8">
                    <div class="pl04-lining-grid">
                        <div class="pl04-lining-card">
                            <div class="pl04-lining-icon">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.281m5.94 2.28l-2.28 5.941"/></svg>
                            </div>
                            <div class="pl04-lining-title">Wildly successful customer count</div>
                            <div class="pl04-lining-desc">The push into North America brought far more customers than anyone anticipated.</div>
                        </div>
                        <div class="pl04-lining-card">
                            <div class="pl04-lining-icon">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 00-2.455 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z"/></svg>
                            </div>
                            <div class="pl04-lining-title">Brand awareness we stand on today</div>
                            <div class="pl04-lining-desc">COS became a recognized name in North American fiber markets. That foundation remains.</div>
                        </div>
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
    /* Headlines */
    .pl04-headline-sting {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(1.3rem, 2.5vw, 1.8rem);
        letter-spacing: -0.02em;
        line-height: 1.15;
        color: rgba(255,255,255,0.85);
    }
    .pl04-headline-silver {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(1.3rem, 2.5vw, 1.8rem);
        letter-spacing: -0.02em;
        line-height: 1.15;
        color: rgba(255,255,255,0.85);
    }

    .pl04-coral-text {
        color: #E86E4B;
    }
    .pl04-green-text {
        background: linear-gradient(135deg, #11C18F 0%, #AFEFCD 50%, #11C18F 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl04-shimmer 5s ease-in-out infinite;
    }
    .pl04-green-text::after {
        content: 'the impact';
        position: absolute;
        background: linear-gradient(135deg, #11C18F, #AFEFCD);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        filter: blur(20px);
        opacity: 0.4;
        z-index: -1;
    }

    @keyframes pl04-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Sting cards */
    .pl04-sting-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }
    .pl04-sting-card {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 10px;
        background: rgba(232,110,75,0.02);
        border: 1px solid rgba(232,110,75,0.05);
        transition: all 0.5s cubic-bezier(0.22,1,0.36,1);
    }
    .pl04-sting-card:hover {
        background: rgba(232,110,75,0.04);
        border-color: rgba(232,110,75,0.1);
    }
    .pl04-sting-icon {
        width: 30px; height: 30px;
        border-radius: 8px;
        background: rgba(232,110,75,0.06);
        border: 1px solid rgba(232,110,75,0.08);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        color: rgba(232,110,75,0.6);
    }
    .pl04-sting-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.7);
        margin-bottom: 2px;
    }
    .pl04-sting-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        color: rgba(255,255,255,0.28);
        line-height: 1.4;
    }

    /* However transition */
    .pl04-however-container {
        display: flex;
        align-items: center;
        gap: 24px;
        justify-content: center;
    }
    .pl04-however-text {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 1.2rem;
        color: #11C18F;
        text-shadow: 0 0 30px rgba(17,193,143,0.3);
        letter-spacing: -0.01em;
    }
    .pl04-however-line-left {
        width: 120px; height: 1px;
        background: linear-gradient(to right, transparent, rgba(232,110,75,0.2), rgba(255,255,255,0.06));
    }
    .pl04-however-line-right {
        width: 120px; height: 1px;
        background: linear-gradient(to right, rgba(255,255,255,0.06), rgba(17,193,143,0.2), transparent);
    }

    /* Silver lining cards */
    .pl04-lining-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }
    .pl04-lining-card {
        padding: 18px 20px;
        border-radius: 14px;
        background: rgba(17,193,143,0.03);
        border: 1px solid rgba(17,193,143,0.08);
        transition: all 0.5s cubic-bezier(0.22,1,0.36,1);
    }
    .pl04-lining-card:hover {
        background: rgba(17,193,143,0.05);
        border-color: rgba(17,193,143,0.15);
        box-shadow: 0 0 40px -10px rgba(17,193,143,0.1);
    }
    .pl04-lining-icon {
        width: 36px; height: 36px;
        border-radius: 10px;
        background: rgba(17,193,143,0.08);
        border: 1px solid rgba(17,193,143,0.12);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        color: #11C18F;
    }
    .pl04-lining-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.95rem;
        color: rgba(255,255,255,0.85);
        margin-bottom: 4px;
    }
    .pl04-lining-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.35);
        line-height: 1.5;
    }

    /* Aurora backgrounds */
    .pl04-aurora {
        position: absolute; border-radius: 50%; filter: blur(120px); will-change: transform;
    }
    .pl04-aurora-coral {
        width: 500px; height: 500px;
        background: radial-gradient(circle, rgba(232,110,75,0.04) 0%, transparent 70%);
        top: -10%; left: -5%;
        animation: pl04-drift-1 16s ease-in-out infinite;
    }
    .pl04-aurora-green {
        width: 550px; height: 550px;
        background: radial-gradient(circle, rgba(17,193,143,0.05) 0%, transparent 70%);
        bottom: -15%; right: -5%;
        animation: pl04-drift-2 18s ease-in-out infinite;
    }
    @keyframes pl04-drift-1 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(25px, 15px) scale(1.06); }
    }
    @keyframes pl04-drift-2 {
        0%, 100% { transform: translate(0,0) scale(1); }
        50% { transform: translate(-20px, -20px) scale(1.08); }
    }

    /* Divider line draw */
    .pl04-divider-line {
        stroke-dasharray: 2000;
        stroke-dashoffset: 2000;
        animation: pl04-draw-divider 2s cubic-bezier(0.22,1,0.36,1) 1.5s forwards;
    }
    @keyframes pl04-draw-divider {
        to { stroke-dashoffset: 0; }
    }

    /* Stagger system */
    @keyframes pl04-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    @keyframes pl04-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl04-stagger-1 { opacity: 0; animation: pl04-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl04-stagger-2 { opacity: 0; animation: pl04-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.2s forwards; }
    .pl04-stagger-3 { opacity: 0; animation: pl04-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.35s forwards; }
    .pl04-stagger-4 { opacity: 0; animation: pl04-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 0.55s forwards; }
    .pl04-stagger-5 { opacity: 0; animation: pl04-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 1.4s forwards; }
    .pl04-stagger-6 { opacity: 0; animation: pl04-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 1.7s forwards; }
    .pl04-stagger-7 { opacity: 0; animation: pl04-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 1.9s forwards; }
    .pl04-stagger-8 { opacity: 0; animation: pl04-reveal 0.9s cubic-bezier(0.22,1,0.36,1) 2.1s forwards; }
</style>
