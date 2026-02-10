<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 20%; left: 20%; width: 800px; height: 800px; background: radial-gradient(circle, rgba(17,193,143,0.04) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center" style="padding: 40px 80px;">

        {{-- Title --}}
        <h2 class="rr08-title rr08-s1">One Framework. <span style="color: #11C18F;">Three Products.</span></h2>

        {{-- Matrix grid --}}
        <div class="rr08-matrix rr08-s2">
            {{-- Header row --}}
            <div class="rr08-corner"></div>
            <div class="rr08-product-header rr08-s3">
                <div class="rr08-product-name">FSM</div>
            </div>
            <div class="rr08-product-header rr08-s4">
                <div class="rr08-product-name">WE</div>
            </div>
            <div class="rr08-product-header rr08-s5">
                <div class="rr08-product-name">Business Engine</div>
            </div>

            {{-- Product Owner row --}}
            <div class="rr08-role-label rr08-s3">
                <span class="rr08-badge">PO</span>
                Product Owner
            </div>
            <div class="rr08-cell rr08-s3"><div class="rr08-placeholder"></div></div>
            <div class="rr08-cell rr08-s4"><div class="rr08-placeholder"></div></div>
            <div class="rr08-cell rr08-s5"><div class="rr08-placeholder"></div></div>

            {{-- Engineering Lead row --}}
            <div class="rr08-role-label rr08-s3">
                <span class="rr08-badge">EL</span>
                Engineering Lead
            </div>
            <div class="rr08-cell rr08-s3"><div class="rr08-placeholder"></div></div>
            <div class="rr08-cell rr08-s4"><div class="rr08-placeholder"></div></div>
            <div class="rr08-cell rr08-s5"><div class="rr08-placeholder"></div></div>

            {{-- Client Operations Lead row --}}
            <div class="rr08-role-label rr08-s4">
                <span class="rr08-badge">CO</span>
                Client Operations Lead
            </div>
            <div class="rr08-cell rr08-s4"><div class="rr08-placeholder"></div></div>
            <div class="rr08-cell rr08-s4"><div class="rr08-placeholder"></div></div>
            <div class="rr08-cell rr08-s5"><div class="rr08-placeholder"></div></div>

            {{-- Solutions Lead row --}}
            <div class="rr08-role-label rr08-s4">
                <span class="rr08-badge">SL</span>
                Solutions Lead
            </div>
            <div class="rr08-cell rr08-s4"><div class="rr08-placeholder"></div></div>
            <div class="rr08-cell rr08-s5"><div class="rr08-placeholder"></div></div>
            <div class="rr08-cell rr08-s5"><div class="rr08-placeholder"></div></div>
        </div>

        {{-- Bottom text --}}
        <div class="rr08-bottom rr08-s6">
            <p class="rr08-insight">
                Same structure across products. Same expectations. Clear accountability.
            </p>
            <p class="rr08-note">
                Variations are fine &mdash; as long as we can clearly articulate why.
            </p>
        </div>

        {{-- CTA --}}
        <div class="rr08-cta rr08-s7">
            <span style="color: #11C18F;">Let's define this together.</span>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rr08-title {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 800;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 32px;
        letter-spacing: -0.02em;
    }

    .rr08-matrix {
        display: grid;
        grid-template-columns: 220px 1fr 1fr 1fr;
        gap: 8px;
        max-width: 900px;
    }

    .rr08-corner {
        /* empty top-left cell */
    }

    .rr08-product-header {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 8px;
    }

    .rr08-product-name {
        font-family: 'Cairo', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        color: #11C18F;
        letter-spacing: 0.02em;
    }

    .rr08-role-label {
        display: flex;
        align-items: center;
        gap: 12px;
        font-family: 'Sora', sans-serif;
        font-size: 0.85rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.6);
        padding: 10px 0;
    }

    .rr08-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 30px;
        height: 30px;
        background: rgba(17, 193, 143, 0.08);
        border-radius: 6px;
        font-family: 'Cairo', sans-serif;
        font-size: 0.65rem;
        font-weight: 800;
        color: rgba(17, 193, 143, 0.6);
        letter-spacing: 0.05em;
        flex-shrink: 0;
    }

    .rr08-cell {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 8px;
    }

    .rr08-placeholder {
        width: 100%;
        height: 40px;
        border: 1px dashed rgba(17, 193, 143, 0.12);
        border-radius: 8px;
        background: rgba(17, 193, 143, 0.015);
        animation: rr08-pulse 3.5s ease-in-out infinite;
    }

    .rr08-bottom {
        margin-top: 28px;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .rr08-insight {
        font-family: 'Sora', sans-serif;
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.55);
        line-height: 1.6;
        margin: 0 0 8px 0;
    }

    .rr08-note {
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        color: rgba(255, 255, 255, 0.25);
        line-height: 1.6;
        margin: 0;
    }

    .rr08-cta {
        margin-top: 20px;
        font-family: 'Cairo', sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
    }

    .rr08-s1 { opacity: 0; animation: rr08-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .rr08-s2 { opacity: 0; animation: rr08-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .rr08-s3 { opacity: 0; animation: rr08-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.45s forwards; }
    .rr08-s4 { opacity: 0; animation: rr08-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .rr08-s5 { opacity: 0; animation: rr08-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.75s forwards; }
    .rr08-s6 { opacity: 0; animation: rr08-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.95s forwards; }
    .rr08-s7 { opacity: 0; animation: rr08-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.15s forwards; }

    @keyframes rr08-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes rr08-pulse {
        0%, 100% { border-color: rgba(17, 193, 143, 0.08); }
        50% { border-color: rgba(17, 193, 143, 0.2); }
    }
</style>
