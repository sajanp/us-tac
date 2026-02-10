<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute" style="top: 50%; left: 50%; width: 900px; height: 900px; transform: translate(-50%, -50%); background: radial-gradient(circle, rgba(72,170,165,0.03) 0%, transparent 55%);"></div>
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(rgba(72,170,165,0.35) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 28px 72px 48px;">

        {{-- Top bar --}}
        <div class="tt06-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Technical Toolkit</span>
        </div>

        {{-- Header --}}
        <div class="tt06-s2" style="margin-top: 10px; margin-bottom: 14px;">
            <div class="inline-flex items-center gap-3 mb-2">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #48AAA5; box-shadow: 0 0 12px rgba(72,170,165,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(72,170,165,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">Wholesale Engine</span>
            </div>
            <h1 class="tt06-headline">WE: <span class="tt06-teal">Support &amp; Debug</span></h1>
            <p style="font-family: 'Sora', sans-serif; font-size: 0.85rem; color: rgba(255,255,255,0.35); margin-top: 8px; max-width: 550px; line-height: 1.6;">
                A serverless architecture changes how we debug. No SSH, no server access &mdash; different tools required.
            </p>
        </div>

        {{-- Tool cards --}}
        <div class="flex-1 flex items-start">
            <div class="tt06-grid">

                {{-- Sentry --}}
                <div class="tt06-card tt06-s3">
                    <div class="tt06-card-accent" style="background: #48AAA5;"></div>
                    <div class="tt06-card-inner">
                        <div class="tt06-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#48AAA5" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                            </svg>
                        </div>
                        <h3 class="tt06-card-title">Sentry</h3>
                        <p class="tt06-card-desc">Serves double duty for WE: both error tracking and application logging. Unlike FSM which uses Papertrail for logs.</p>
                        <div class="flex items-center gap-2 mt-3">
                            <div class="tt06-card-tag" style="color: rgba(72,170,165,0.7); border-color: rgba(72,170,165,0.15); background: rgba(72,170,165,0.04);">Errors</div>
                            <div class="tt06-card-tag" style="color: rgba(232,110,75,0.7); border-color: rgba(232,110,75,0.15); background: rgba(232,110,75,0.04);">Logging</div>
                        </div>
                        {{-- Misalignment note --}}
                        <div class="tt06-misalign-note">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#EFD61B" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" /></svg>
                            <span>Different from FSM &mdash; alignment needed</span>
                        </div>
                    </div>
                </div>

                {{-- Tinkerwell --}}
                <div class="tt06-card tt06-s4">
                    <div class="tt06-card-accent" style="background: #8FAAA1;"></div>
                    <div class="tt06-card-inner">
                        <div class="tt06-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#8FAAA1" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <h3 class="tt06-card-title">Tinkerwell</h3>
                        <p class="tt06-card-desc">A paid GUI application that can connect to Lambda environments remotely. Required because we can't SSH into serverless functions.</p>
                        <div class="tt06-card-tag mt-3" style="color: rgba(143,170,161,0.7); border-color: rgba(143,170,161,0.15); background: rgba(143,170,161,0.04);">Debugging</div>
                        {{-- Why needed callout --}}
                        <div class="tt06-why-box">
                            <div class="tt06-why-label">Why not regular Tinker?</div>
                            <div class="tt06-why-text">Serverless = no server to SSH into. Tinkerwell bridges that gap by connecting remotely to Lambda.</div>
                        </div>
                    </div>
                </div>

                {{-- Database Access --}}
                <div class="tt06-card tt06-s5">
                    <div class="tt06-card-accent" style="background: #AFEFCD;"></div>
                    <div class="tt06-card-inner">
                        <div class="tt06-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#AFEFCD" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                        </div>
                        <h3 class="tt06-card-title">Database Access</h3>
                        <p class="tt06-card-desc">Remote database connections to AWS RDS. The database layer is separate from Lambda, so direct access is still possible.</p>
                        <div class="tt06-card-tag mt-3" style="color: rgba(175,239,205,0.7); border-color: rgba(175,239,205,0.15); background: rgba(175,239,205,0.04);">Data</div>
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
    .tt06-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(1.8rem, 4vw, 2.6rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .tt06-teal { color: #48AAA5; }

    /* Grid - 3 cards in a row */
    .tt06-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        width: 100%;
        max-width: 1100px;
    }

    /* Card */
    .tt06-card {
        position: relative;
        border-radius: 14px;
        background: rgba(255,255,255,0.015);
        border: 1px solid rgba(255,255,255,0.05);
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .tt06-card:hover {
        border-color: rgba(72,170,165,0.15);
        transform: translateY(-3px);
        box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    }

    .tt06-card-accent {
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        opacity: 0.4;
        border-radius: 14px 0 0 14px;
    }

    .tt06-card:hover .tt06-card-accent {
        opacity: 0.8;
    }

    .tt06-card-inner {
        padding: 14px 18px;
    }

    .tt06-card-icon {
        margin-bottom: 8px;
        width: 36px;
        height: 36px;
        border-radius: 12px;
        background: rgba(255,255,255,0.03);
        border: 1px solid rgba(255,255,255,0.06);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tt06-card-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 1.15rem;
        color: rgba(255,255,255,0.9);
        letter-spacing: -0.01em;
        margin: 0 0 6px 0;
    }

    .tt06-card-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.4);
        line-height: 1.6;
        margin: 0;
    }

    .tt06-card-tag {
        display: inline-block;
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 6px;
        border: 1px solid;
    }

    /* Misalignment note */
    .tt06-misalign-note {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-top: 8px;
        padding: 6px 10px;
        border-radius: 8px;
        background: rgba(239,214,27,0.04);
        border: 1px solid rgba(239,214,27,0.1);
    }

    .tt06-misalign-note span {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        color: rgba(239,214,27,0.7);
        font-weight: 500;
    }

    /* Why box */
    .tt06-why-box {
        margin-top: 8px;
        padding: 8px 12px;
        border-radius: 8px;
        background: rgba(143,170,161,0.04);
        border: 1px solid rgba(143,170,161,0.1);
    }

    .tt06-why-label {
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        font-weight: 600;
        color: rgba(143,170,161,0.7);
        margin-bottom: 4px;
        letter-spacing: 0.02em;
    }

    .tt06-why-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.68rem;
        color: rgba(255,255,255,0.35);
        line-height: 1.5;
    }

    /* Reveal animations */
    @keyframes tt06-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt06-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .tt06-s1 { opacity: 0; animation: tt06-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt06-s2 { opacity: 0; animation: tt06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .tt06-s3 { opacity: 0; animation: tt06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .tt06-s4 { opacity: 0; animation: tt06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.85s forwards; }
    .tt06-s5 { opacity: 0; animation: tt06-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
</style>
