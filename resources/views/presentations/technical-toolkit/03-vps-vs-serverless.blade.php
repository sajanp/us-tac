<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Split gradient: green-left, teal-right --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 25% 55%, rgba(17,193,143,0.04) 0%, transparent 45%), radial-gradient(ellipse at 75% 55%, rgba(72,170,165,0.04) 0%, transparent 45%);"></div>
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(rgba(255,255,255,0.3) 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 40%, #080c14 85%);"></div>
        {{-- Center divider glow --}}
        <div class="absolute" style="top: 0; bottom: 0; left: 50%; width: 1px; background: linear-gradient(to bottom, transparent 10%, rgba(255,255,255,0.04) 30%, rgba(255,255,255,0.06) 50%, rgba(255,255,255,0.04) 70%, transparent 90%);"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 20px 56px 48px;">

        {{-- Top bar --}}
        <div class="tt03-s1 flex items-center justify-between">
            <img src="/cos-systems-logo.svg" alt="COS Systems" class="w-12 h-12" />
            <span style="font-family: 'Sora', sans-serif; font-size: 11px; letter-spacing: 0.25em; text-transform: uppercase; color: rgba(255,255,255,0.25);">Technical Toolkit</span>
        </div>

        {{-- Header --}}
        <div class="tt03-s2" style="margin-top: 8px; margin-bottom: 12px; text-align: center;">
            <p style="font-family: 'Sora', sans-serif; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.3em; text-transform: uppercase; color: rgba(255,255,255,0.3); margin-bottom: 6px;">Architecture Comparison</p>
            <h1 class="tt03-headline">Same Framework. <span class="tt03-green">Different Infrastructure.</span></h1>
        </div>

        {{-- Two-column comparison --}}
        <div class="flex-1 flex gap-10" style="min-height: 0;">

            {{-- LEFT: Traditional VPS (FSM) --}}
            <div class="flex-1 flex flex-col tt03-s3">
                {{-- Column header --}}
                <div style="text-align: center; margin-bottom: 6px;">
                    <div class="inline-flex items-center gap-2 mb-1">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 10px rgba(17,193,143,0.4);"></div>
                        <span style="font-family: 'Cairo', sans-serif; font-weight: 800; font-size: 1.1rem; color: #11C18F;">FSM</span>
                    </div>
                    <p style="font-family: 'Sora', sans-serif; font-size: 0.7rem; color: rgba(255,255,255,0.35);">Traditional VPS</p>
                </div>

                {{-- Server box: everything inside one container --}}
                <div class="tt03-server-box tt03-s4">
                    <div class="tt03-server-label">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(17,193,143,0.5)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" /></svg>
                        <span>Single Server</span>
                    </div>
                    <div class="tt03-server-content">
                        <div class="tt03-component tt03-comp-app tt03-s5">
                            <div class="tt03-comp-icon">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" /></svg>
                            </div>
                            <div>
                                <div class="tt03-comp-name">Laravel App</div>
                                <div class="tt03-comp-tech">PHP-FPM + Nginx</div>
                            </div>
                        </div>
                        <div class="tt03-component tt03-comp-db tt03-s6">
                            <div class="tt03-comp-icon">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375" /></svg>
                            </div>
                            <div>
                                <div class="tt03-comp-name">Database</div>
                                <div class="tt03-comp-tech">MySQL on disk</div>
                            </div>
                        </div>
                        <div class="tt03-component tt03-comp-queue tt03-s7">
                            <div class="tt03-comp-icon">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" /></svg>
                            </div>
                            <div>
                                <div class="tt03-comp-name">Queue</div>
                                <div class="tt03-comp-tech">Database driver</div>
                            </div>
                        </div>
                        <div class="tt03-component tt03-comp-storage tt03-s8">
                            <div class="tt03-comp-icon">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" /></svg>
                            </div>
                            <div>
                                <div class="tt03-comp-name">Storage</div>
                                <div class="tt03-comp-tech">Local filesystem</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Characteristics --}}
                <div class="tt03-chars tt03-s10" style="margin-top: 6px;">
                    <div class="tt03-char">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Simple to manage</span>
                    </div>
                    <div class="tt03-char">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Direct SSH access</span>
                    </div>
                    <div class="tt03-char">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="rgba(239,214,27,0.7)" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126z" /></svg>
                        <span>Fixed capacity ceiling</span>
                    </div>
                </div>
            </div>

            {{-- RIGHT: Serverless AWS (WE) --}}
            <div class="flex-1 flex flex-col tt03-s3">
                {{-- Column header --}}
                <div style="text-align: center; margin-bottom: 6px;">
                    <div class="inline-flex items-center gap-2 mb-1">
                        <div style="width: 8px; height: 8px; border-radius: 50%; background: #48AAA5; box-shadow: 0 0 10px rgba(72,170,165,0.4);"></div>
                        <span style="font-family: 'Cairo', sans-serif; font-weight: 800; font-size: 1.1rem; color: #48AAA5;">WE</span>
                    </div>
                    <p style="font-family: 'Sora', sans-serif; font-size: 0.7rem; color: rgba(255,255,255,0.35);">Serverless on AWS</p>
                </div>

                {{-- Distributed services --}}
                <div class="tt03-cloud-box tt03-s4">
                    <div class="tt03-cloud-label">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(72,170,165,0.5)" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" /></svg>
                        <span>AWS Cloud &mdash; Independent Services</span>
                    </div>
                    <div class="tt03-cloud-content">
                        {{-- SVG connection lines --}}
                        <svg class="tt03-connections" viewBox="0 0 500 280" fill="none" preserveAspectRatio="xMidYMid meet">
                            {{-- Lines from App (center top) to each service --}}
                            <path class="tt03-conn-line" d="M250,55 C250,90 120,90 120,130" stroke="url(#tt03-grad1)" stroke-width="1.5" fill="none" />
                            <path class="tt03-conn-line tt03-conn-d2" d="M250,55 C250,90 250,90 250,130" stroke="url(#tt03-grad2)" stroke-width="1.5" fill="none" />
                            <path class="tt03-conn-line tt03-conn-d3" d="M250,55 C250,90 380,90 380,130" stroke="url(#tt03-grad3)" stroke-width="1.5" fill="none" />
                            <path class="tt03-conn-line tt03-conn-d4" d="M250,55 C250,100 185,160 185,200" stroke="url(#tt03-grad4)" stroke-width="1.5" fill="none" />
                            <path class="tt03-conn-line tt03-conn-d5" d="M250,55 C250,100 315,160 315,200" stroke="url(#tt03-grad5)" stroke-width="1.5" fill="none" />
                            <defs>
                                <linearGradient id="tt03-grad1" x1="250" y1="55" x2="120" y2="130" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="rgba(72,170,165,0.5)" /><stop offset="100%" stop-color="rgba(72,170,165,0.15)" /></linearGradient>
                                <linearGradient id="tt03-grad2" x1="250" y1="55" x2="250" y2="130" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="rgba(72,170,165,0.5)" /><stop offset="100%" stop-color="rgba(72,170,165,0.15)" /></linearGradient>
                                <linearGradient id="tt03-grad3" x1="250" y1="55" x2="380" y2="130" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="rgba(72,170,165,0.5)" /><stop offset="100%" stop-color="rgba(72,170,165,0.15)" /></linearGradient>
                                <linearGradient id="tt03-grad4" x1="250" y1="55" x2="185" y2="200" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="rgba(72,170,165,0.4)" /><stop offset="100%" stop-color="rgba(72,170,165,0.1)" /></linearGradient>
                                <linearGradient id="tt03-grad5" x1="250" y1="55" x2="315" y2="200" gradientUnits="userSpaceOnUse"><stop offset="0%" stop-color="rgba(72,170,165,0.4)" /><stop offset="100%" stop-color="rgba(72,170,165,0.1)" /></linearGradient>
                            </defs>
                        </svg>

                        {{-- Service nodes positioned over the SVG --}}
                        <div class="tt03-svc tt03-svc-app tt03-s5">
                            <div class="tt03-svc-dot" style="background: #48AAA5; box-shadow: 0 0 14px rgba(72,170,165,0.5);"></div>
                            <div class="tt03-svc-info">
                                <div class="tt03-svc-name">Lambda</div>
                                <div class="tt03-svc-desc">Laravel App</div>
                            </div>
                            <div class="tt03-svc-scale">Auto-scales</div>
                        </div>
                        <div class="tt03-svc tt03-svc-db tt03-s6">
                            <div class="tt03-svc-dot" style="background: #48AAA5;"></div>
                            <div class="tt03-svc-info">
                                <div class="tt03-svc-name">RDS</div>
                                <div class="tt03-svc-desc">Database</div>
                            </div>
                        </div>
                        <div class="tt03-svc tt03-svc-queue tt03-s7">
                            <div class="tt03-svc-dot" style="background: #48AAA5;"></div>
                            <div class="tt03-svc-info">
                                <div class="tt03-svc-name">SQS</div>
                                <div class="tt03-svc-desc">Queue</div>
                            </div>
                        </div>
                        <div class="tt03-svc tt03-svc-cache tt03-s8">
                            <div class="tt03-svc-dot" style="background: #48AAA5;"></div>
                            <div class="tt03-svc-info">
                                <div class="tt03-svc-name">ElastiCache</div>
                                <div class="tt03-svc-desc">Cache</div>
                            </div>
                        </div>
                        <div class="tt03-svc tt03-svc-s3 tt03-s9">
                            <div class="tt03-svc-dot" style="background: #48AAA5;"></div>
                            <div class="tt03-svc-info">
                                <div class="tt03-svc-name">S3</div>
                                <div class="tt03-svc-desc">Storage</div>
                            </div>
                        </div>
                        <div class="tt03-svc tt03-svc-cdn tt03-s9">
                            <div class="tt03-svc-dot" style="background: #48AAA5;"></div>
                            <div class="tt03-svc-info">
                                <div class="tt03-svc-name">CloudFront</div>
                                <div class="tt03-svc-desc">CDN</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Characteristics --}}
                <div class="tt03-chars tt03-s10" style="margin-top: 6px;">
                    <div class="tt03-char tt03-char-teal">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#48AAA5" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Scales to zero and to infinity</span>
                    </div>
                    <div class="tt03-char tt03-char-teal">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#48AAA5" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Built-in redundancy</span>
                    </div>
                    <div class="tt03-char tt03-char-teal">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#48AAA5" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>Handles traffic spikes</span>
                    </div>
                </div>
            </div>

        </div>

        {{-- Bottom: The "why" --}}
        <div class="tt03-s11" style="margin-top: 4px;">
            <div class="tt03-why-bar">
                <div class="tt03-why-inner">
                    <span class="tt03-why-label">Why serverless for WE?</span>
                    <span class="tt03-why-divider"></span>
                    <span class="tt03-why-text">Wholesale Engine customers demand <strong style="color: #48AAA5;">scale</strong>, <strong style="color: #48AAA5;">redundancy</strong>, and <strong style="color: #48AAA5;">spike traffic handling</strong> that traditional FSM deployments don't require.</span>
                </div>
            </div>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    .tt03-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 900;
        font-size: clamp(1.6rem, 4vw, 2.4rem);
        letter-spacing: -0.03em;
        color: rgba(255,255,255,0.92);
        line-height: 1.15;
    }

    .tt03-green { color: #11C18F; }

    /* ===== LEFT: Server box ===== */
    .tt03-server-box {
        flex: 1;
        border-radius: 14px;
        border: 1px solid rgba(17,193,143,0.12);
        background: rgba(17,193,143,0.02);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .tt03-server-label {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        border-bottom: 1px solid rgba(17,193,143,0.08);
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        font-weight: 600;
        color: rgba(17,193,143,0.6);
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    .tt03-server-content {
        flex: 1;
        padding: 8px 14px;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .tt03-component {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 6px 12px;
        border-radius: 10px;
        background: rgba(17,193,143,0.03);
        border: 1px solid rgba(17,193,143,0.07);
        transition: all 0.4s ease;
    }

    .tt03-component:hover {
        border-color: rgba(17,193,143,0.18);
        background: rgba(17,193,143,0.06);
    }

    .tt03-comp-icon {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        background: rgba(17,193,143,0.06);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .tt03-comp-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.8rem;
        color: rgba(255,255,255,0.85);
        line-height: 1.2;
    }

    .tt03-comp-tech {
        font-family: 'Sora', sans-serif;
        font-size: 0.65rem;
        color: rgba(255,255,255,0.3);
    }

    /* ===== RIGHT: Cloud box ===== */
    .tt03-cloud-box {
        flex: 1;
        border-radius: 14px;
        border: 1px solid rgba(72,170,165,0.12);
        background: rgba(72,170,165,0.02);
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .tt03-cloud-label {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 18px;
        border-bottom: 1px solid rgba(72,170,165,0.08);
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        font-weight: 600;
        color: rgba(72,170,165,0.6);
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    .tt03-cloud-content {
        flex: 1;
        position: relative;
        min-height: 240px;
    }

    .tt03-connections {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
    }

    .tt03-conn-line {
        stroke-dasharray: 200;
        stroke-dashoffset: 200;
        animation: tt03-draw 1.2s cubic-bezier(0.22, 1, 0.36, 1) 1.2s forwards;
    }

    .tt03-conn-d2 { animation-delay: 1.35s; }
    .tt03-conn-d3 { animation-delay: 1.5s; }
    .tt03-conn-d4 { animation-delay: 1.65s; }
    .tt03-conn-d5 { animation-delay: 1.8s; }

    @keyframes tt03-draw {
        to { stroke-dashoffset: 0; }
    }

    /* Service nodes */
    .tt03-svc {
        position: absolute;
        display: flex;
        align-items: center;
        gap: 8px;
        z-index: 2;
    }

    .tt03-svc-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    .tt03-svc-name {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.82rem;
        color: rgba(255,255,255,0.85);
        line-height: 1.2;
    }

    .tt03-svc-desc {
        font-family: 'Sora', sans-serif;
        font-size: 0.6rem;
        color: rgba(255,255,255,0.3);
    }

    .tt03-svc-scale {
        font-family: 'Sora', sans-serif;
        font-size: 0.55rem;
        font-weight: 600;
        color: rgba(72,170,165,0.7);
        padding: 2px 8px;
        border-radius: 4px;
        border: 1px solid rgba(72,170,165,0.15);
        background: rgba(72,170,165,0.05);
        white-space: nowrap;
    }

    /* Positions for service nodes */
    .tt03-svc-app   { top: 6%; left: 50%; transform: translateX(-50%); }
    .tt03-svc-db    { top: 42%; left: 8%; }
    .tt03-svc-queue { top: 42%; left: 38%; }
    .tt03-svc-cache { top: 42%; right: 8%; }
    .tt03-svc-s3    { top: 72%; left: 18%; }
    .tt03-svc-cdn   { top: 72%; right: 18%; }

    /* Characteristics */
    .tt03-chars {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .tt03-char {
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: 'Sora', sans-serif;
        font-size: 0.7rem;
        color: rgba(255,255,255,0.4);
    }

    .tt03-char-teal span {
        color: rgba(255,255,255,0.45);
    }

    /* Bottom why bar */
    .tt03-why-bar {
        border-radius: 12px;
        background: rgba(72,170,165,0.03);
        border: 1px solid rgba(72,170,165,0.1);
        overflow: hidden;
    }

    .tt03-why-inner {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 8px 24px;
    }

    .tt03-why-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 0.82rem;
        color: #48AAA5;
        white-space: nowrap;
    }

    .tt03-why-divider {
        width: 1px;
        height: 20px;
        background: rgba(72,170,165,0.2);
        flex-shrink: 0;
    }

    .tt03-why-text {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        color: rgba(255,255,255,0.4);
        line-height: 1.5;
    }

    /* ===== Animations ===== */
    @keyframes tt03-reveal {
        from { opacity: 0; transform: translateY(24px); filter: blur(3px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes tt03-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes tt03-fade-in {
        from { opacity: 0; transform: scale(0.95); }
        to { opacity: 1; transform: scale(1); }
    }

    .tt03-s1 { opacity: 0; animation: tt03-reveal-down 0.8s ease-out 0.1s forwards; }
    .tt03-s2 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.2s forwards; }
    .tt03-s3 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.4s forwards; }
    .tt03-s4 { opacity: 0; animation: tt03-fade-in 0.7s cubic-bezier(0.22, 1, 0.36, 1) 0.6s forwards; }
    .tt03-s5 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.8s forwards; }
    .tt03-s6 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.95s forwards; }
    .tt03-s7 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .tt03-s8 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.25s forwards; }
    .tt03-s9 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.4s forwards; }
    .tt03-s10 { opacity: 0; animation: tt03-reveal 0.6s cubic-bezier(0.22, 1, 0.36, 1) 1.6s forwards; }
    .tt03-s11 { opacity: 0; animation: tt03-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.8s forwards; }
</style>
