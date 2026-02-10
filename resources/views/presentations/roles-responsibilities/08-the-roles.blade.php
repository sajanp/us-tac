<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 55%; left: 50%; width: 1200px; height: 1200px; transform: translate(-50%, -50%); background: radial-gradient(circle, rgba(17,193,143,0.04) 0%, transparent 50%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col justify-center" style="padding: 40px 72px;">

        {{-- Title --}}
        <h2 class="rr07-title rr07-s1">Four Roles. <span style="color: #11C18F;">Clear Ownership.</span></h2>

        {{-- 2×2 Grid --}}
        <div class="rr07-grid">
            <div class="rr07-card rr07-s2">
                <div class="rr07-card-badge">PO</div>
                <div class="rr07-card-title">Product Owner</div>
                <p class="rr07-card-text">
                    Owns the product vision, roadmap, and priorities. The single decision-maker on what gets built, what gets cut, and what comes next. Accountable for the product's direction.
                </p>
            </div>

            <div class="rr07-card rr07-s3">
                <div class="rr07-card-badge">EL</div>
                <div class="rr07-card-title">Engineering Lead</div>
                <p class="rr07-card-text">
                    Owns technical execution and delivery. Makes architecture decisions, ensures code quality, and is accountable for shipping on time. The person who says how and when it ships.
                </p>
            </div>

            <div class="rr07-card rr07-s4">
                <div class="rr07-card-badge">CO</div>
                <div class="rr07-card-title">Client Operations Lead</div>
                <p class="rr07-card-text">
                    Owns the client experience after the sale. Accountable for onboarding, support escalation, and ensuring clients succeed with the product. The person clients trust.
                </p>
            </div>

            <div class="rr07-card rr07-s5">
                <div class="rr07-card-badge">SL</div>
                <div class="rr07-card-title">Solutions Lead</div>
                <p class="rr07-card-text">
                    Owns the technical story before the sale. Bridges client needs with product capabilities. Accountable for demos, requirements, and making the product win deals.
                </p>
            </div>
        </div>

        {{-- Footnote --}}
        <p class="rr07-footnote rr07-s6">
            These descriptions are starting points &mdash; not final. <span style="color: rgba(255,255,255,0.5);">Let's shape them together.</span>
        </p>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .rr07-title {
        font-family: 'Cairo', sans-serif;
        font-size: clamp(2rem, 4vw, 2.8rem);
        font-weight: 800;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 28px;
        letter-spacing: -0.02em;
    }

    .rr07-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
    }

    .rr07-card {
        background: rgba(17, 193, 143, 0.02);
        border: 1px solid rgba(17, 193, 143, 0.08);
        border-left: 3px solid rgba(17, 193, 143, 0.4);
        border-radius: 10px;
        padding: 22px 24px 22px 26px;
        transition: border-color 0.5s ease, background 0.5s ease, transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .rr07-card:hover {
        border-color: rgba(17, 193, 143, 0.18);
        border-left-color: #11C18F;
        background: rgba(17, 193, 143, 0.04);
        transform: translateY(-2px);
    }

    .rr07-card-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 34px;
        height: 34px;
        background: rgba(17, 193, 143, 0.08);
        border-radius: 8px;
        font-family: 'Cairo', sans-serif;
        font-size: 0.7rem;
        font-weight: 800;
        color: #11C18F;
        letter-spacing: 0.05em;
        margin-bottom: 12px;
    }

    .rr07-card-title {
        font-family: 'Cairo', sans-serif;
        font-size: 1.15rem;
        font-weight: 700;
        color: rgba(255, 255, 255, 0.88);
        margin-bottom: 8px;
    }

    .rr07-card-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.8rem;
        color: rgba(255, 255, 255, 0.4);
        line-height: 1.6;
        margin: 0;
    }

    .rr07-footnote {
        font-family: 'Sora', sans-serif;
        font-size: 0.82rem;
        color: rgba(255, 255, 255, 0.22);
        margin-top: 22px;
    }

    .rr07-s1 { opacity: 0; animation: rr07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.15s forwards; }
    .rr07-s2 { opacity: 0; animation: rr07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.35s forwards; }
    .rr07-s3 { opacity: 0; animation: rr07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .rr07-s4 { opacity: 0; animation: rr07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.65s forwards; }
    .rr07-s5 { opacity: 0; animation: rr07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .rr07-s6 { opacity: 0; animation: rr07-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }

    @keyframes rr07-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
</style>
