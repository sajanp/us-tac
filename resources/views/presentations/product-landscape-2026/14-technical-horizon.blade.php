<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Background layers --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Radial glow --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at 50% 60%, rgba(17,193,143,0.05) 0%, transparent 55%);"></div>
        {{-- Dot grid --}}
        <div class="absolute inset-0 opacity-[0.025]" style="background-image: radial-gradient(rgba(17,193,143,0.4) 1px, transparent 1px); background-size: 40px 40px;"></div>
        {{-- Noise --}}
        <div class="absolute inset-0 opacity-[0.012]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
        {{-- Vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 30%, #080c14 85%);"></div>
    </div>

    {{-- Blueprint grid canvas --}}
    <canvas id="pl14-grid" class="absolute inset-0 w-full h-full pointer-events-none" style="opacity: 0.04;"></canvas>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col" style="padding: 32px 64px;">

        {{-- Header --}}
        <div class="pl14-stagger-1" style="margin-bottom: 20px;">
            <div style="display: inline-flex; align-items: center; gap: 10px; margin-bottom: 8px;">
                <div style="width: 8px; height: 8px; border-radius: 50%; background: #11C18F; box-shadow: 0 0 12px rgba(17,193,143,0.4);"></div>
                <span style="text-transform: uppercase; letter-spacing: 0.25em; font-size: 11px; color: rgba(17,193,143,0.7); font-weight: 600; font-family: 'Sora', sans-serif;">What Needs To Happen</span>
            </div>
            <h1 class="pl14-headline">
                Technical <span class="pl14-gradient-text">Horizon</span>
            </h1>
        </div>

        {{-- Two-column layout --}}
        <div class="flex-1 flex gap-6" style="max-width: 1400px; width: 100%;">

            {{-- FSM Column --}}
            <div class="flex-1 flex flex-col">
                <div class="pl14-stagger-2 pl14-column-header pl14-column-fsm">
                    <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="#11C18F" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085" /></svg>
                    <span>FSM</span>
                </div>

                <div class="flex flex-col gap-2 flex-1">
                    <div class="pl14-stagger-3 pl14-card">
                        <div class="pl14-card-icon pl14-icon-framework">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">Framework Upgrade</div>
                            <div class="pl14-card-text">Move to Laravel 12</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-upgrade">Upgrade</div>
                    </div>

                    <div class="pl14-stagger-4 pl14-card">
                        <div class="pl14-card-icon pl14-icon-ui">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">UI Overhaul</div>
                            <div class="pl14-card-text">Complete redesign using FluxUI</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-new">New</div>
                    </div>

                    <div class="pl14-stagger-5 pl14-card">
                        <div class="pl14-card-icon pl14-icon-mobile">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">Native Mobile App</div>
                            <div class="pl14-card-text">Field crews need mobile-first</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-new">New</div>
                    </div>

                    <div class="pl14-stagger-6 pl14-card">
                        <div class="pl14-card-icon pl14-icon-refactor">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">Core Refactoring</div>
                            <div class="pl14-card-text">Significant refactoring based on usage & learnings</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-refactor">Refactor</div>
                    </div>

                    <div class="pl14-stagger-7 pl14-card">
                        <div class="pl14-card-icon pl14-icon-infra">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">Deployment Overhaul</div>
                            <div class="pl14-card-text">Move entirely to COS-managed servers</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-infra">Infra</div>
                    </div>
                </div>
            </div>

            {{-- WE Column --}}
            <div class="flex-1 flex flex-col">
                <div class="pl14-stagger-2 pl14-column-header pl14-column-we">
                    <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="#48AAA5" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" /></svg>
                    <span>WE</span>
                </div>

                <div class="flex flex-col gap-2 flex-1">
                    <div class="pl14-stagger-3 pl14-card">
                        <div class="pl14-card-icon pl14-icon-framework">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">Framework Upgrade</div>
                            <div class="pl14-card-text">Move to Laravel 12</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-upgrade">Upgrade</div>
                    </div>

                    <div class="pl14-stagger-4 pl14-card">
                        <div class="pl14-card-icon pl14-icon-infra">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">Move Off Vapor</div>
                            <div class="pl14-card-text">Migrate away from Laravel Vapor</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-infra">Infra</div>
                    </div>

                    <div class="pl14-stagger-5 pl14-card">
                        <div class="pl14-card-icon pl14-icon-refactor">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">Provisioning Architecture</div>
                            <div class="pl14-card-text">Significant refactor to support additional provisioning</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-refactor">Refactor</div>
                    </div>

                    <div class="pl14-stagger-6 pl14-card">
                        <div class="pl14-card-icon pl14-icon-refactor">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" /></svg>
                        </div>
                        <div class="pl14-card-content">
                            <div class="pl14-card-label">Multi-ISP Support</div>
                            <div class="pl14-card-text">Refactoring needed for multiple ISP configurations</div>
                        </div>
                        <div class="pl14-card-tag pl14-tag-refactor">Refactor</div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Shared row --}}
        <div class="pl14-stagger-8" style="margin-top: 16px;">
            <div class="pl14-shared-label">
                <div style="flex: 1; height: 1px; background: linear-gradient(to right, transparent, rgba(17,193,143,0.15));"></div>
                <span>Both Products</span>
                <div style="flex: 1; height: 1px; background: linear-gradient(to left, transparent, rgba(17,193,143,0.15));"></div>
            </div>
            <div class="flex gap-5" style="margin-top: 8px;">
                <div class="pl14-shared-card">
                    <div class="pl14-shared-icon">
                        <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#11C18F" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" /></svg>
                    </div>
                    <div>
                        <div class="pl14-shared-title">Observability, Alerting & Paging</div>
                        <div class="pl14-shared-desc">Standardized monitoring across all products</div>
                    </div>
                </div>
                <div class="pl14-shared-card">
                    <div class="pl14-shared-icon">
                        <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="#11C18F" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" /></svg>
                    </div>
                    <div>
                        <div class="pl14-shared-title">Playbooks for Dev, Sales & Support</div>
                        <div class="pl14-shared-desc">Documented processes anyone can follow</div>
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
    /* Headline */
    .pl14-headline {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(1.8rem, 3.5vw, 2.5rem);
        letter-spacing: -0.03em;
        line-height: 1.1;
        color: rgba(255,255,255,0.9);
    }

    .pl14-gradient-text {
        background: linear-gradient(135deg, #11C18F 0%, #48AAA5 40%, #AFEFCD 100%);
        background-size: 200% auto;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        animation: pl14-shimmer 5s ease-in-out infinite;
    }

    @keyframes pl14-shimmer {
        0%, 100% { background-position: 0% center; }
        50% { background-position: 200% center; }
    }

    /* Column headers */
    .pl14-column-header {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 7px 14px;
        border-radius: 8px 8px 0 0;
        margin-bottom: 8px;
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: 14px;
        letter-spacing: 0.03em;
    }

    .pl14-column-fsm {
        background: linear-gradient(135deg, rgba(17,193,143,0.08), rgba(17,193,143,0.03));
        border: 1px solid rgba(17,193,143,0.12);
        border-bottom: none;
        color: #11C18F;
    }

    .pl14-column-we {
        background: linear-gradient(135deg, rgba(72,170,165,0.08), rgba(72,170,165,0.03));
        border: 1px solid rgba(72,170,165,0.12);
        border-bottom: none;
        color: #48AAA5;
    }

    /* Cards */
    .pl14-card {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 14px;
        border-radius: 10px;
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.05);
        transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        position: relative;
        overflow: hidden;
    }

    .pl14-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 0%;
        height: 100%;
        background: linear-gradient(90deg, rgba(17,193,143,0.04), transparent);
        transition: width 0.6s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .pl14-card:hover {
        border-color: rgba(17,193,143,0.15);
        transform: translateX(4px);
    }

    .pl14-card:hover::before {
        width: 100%;
    }

    .pl14-card-icon {
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        flex-shrink: 0;
        position: relative;
        z-index: 1;
    }

    .pl14-icon-framework { background: rgba(17,193,143,0.08); border: 1px solid rgba(17,193,143,0.15); color: #11C18F; }
    .pl14-icon-ui { background: rgba(175,239,205,0.08); border: 1px solid rgba(175,239,205,0.15); color: #AFEFCD; }
    .pl14-icon-mobile { background: rgba(72,170,165,0.08); border: 1px solid rgba(72,170,165,0.15); color: #48AAA5; }
    .pl14-icon-refactor { background: rgba(239,214,27,0.06); border: 1px solid rgba(239,214,27,0.12); color: #EFD61B; }
    .pl14-icon-infra { background: rgba(232,110,75,0.06); border: 1px solid rgba(232,110,75,0.12); color: #E86E4B; }

    .pl14-card-content {
        flex: 1;
        position: relative;
        z-index: 1;
    }

    .pl14-card-label {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 13px;
        color: rgba(255,255,255,0.85);
        letter-spacing: -0.01em;
    }

    .pl14-card-text {
        font-family: 'Sora', sans-serif;
        font-size: 11px;
        color: rgba(255,255,255,0.4);
        margin-top: 1px;
        font-weight: 400;
    }

    .pl14-card-tag {
        font-family: 'Sora', sans-serif;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        padding: 4px 10px;
        border-radius: 6px;
        flex-shrink: 0;
        position: relative;
        z-index: 1;
    }

    .pl14-tag-upgrade { background: rgba(17,193,143,0.1); color: #11C18F; border: 1px solid rgba(17,193,143,0.15); }
    .pl14-tag-new { background: rgba(175,239,205,0.08); color: #AFEFCD; border: 1px solid rgba(175,239,205,0.12); }
    .pl14-tag-refactor { background: rgba(239,214,27,0.06); color: #EFD61B; border: 1px solid rgba(239,214,27,0.1); }
    .pl14-tag-infra { background: rgba(232,110,75,0.06); color: #E86E4B; border: 1px solid rgba(232,110,75,0.1); }

    /* Shared section */
    .pl14-shared-label {
        display: flex;
        align-items: center;
        gap: 16px;
        font-family: 'Sora', sans-serif;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: rgba(17,193,143,0.5);
    }

    .pl14-shared-card {
        flex: 1;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 16px;
        border-radius: 10px;
        background: linear-gradient(135deg, rgba(17,193,143,0.04), rgba(17,193,143,0.01));
        border: 1px solid rgba(17,193,143,0.1);
        transition: all 0.4s ease;
    }

    .pl14-shared-card:hover {
        border-color: rgba(17,193,143,0.2);
        background: linear-gradient(135deg, rgba(17,193,143,0.06), rgba(17,193,143,0.02));
    }

    .pl14-shared-icon {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: rgba(17,193,143,0.06);
        border: 1px solid rgba(17,193,143,0.12);
        flex-shrink: 0;
    }

    .pl14-shared-title {
        font-family: 'Cairo', sans-serif;
        font-weight: 700;
        font-size: 13px;
        color: rgba(255,255,255,0.85);
    }

    .pl14-shared-desc {
        font-family: 'Sora', sans-serif;
        font-size: 11px;
        color: rgba(255,255,255,0.35);
        margin-top: 1px;
    }

    /* Reveal animations */
    @keyframes pl14-reveal {
        from { opacity: 0; transform: translateY(30px); filter: blur(4px); }
        to { opacity: 1; transform: translateY(0); filter: blur(0); }
    }

    @keyframes pl14-reveal-down {
        from { opacity: 0; transform: translateY(-15px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .pl14-stagger-1 { opacity: 0; animation: pl14-reveal-down 0.8s ease-out 0.1s forwards; }
    .pl14-stagger-2 { opacity: 0; animation: pl14-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.3s forwards; }
    .pl14-stagger-3 { opacity: 0; animation: pl14-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards; }
    .pl14-stagger-4 { opacity: 0; animation: pl14-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.7s forwards; }
    .pl14-stagger-5 { opacity: 0; animation: pl14-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 0.9s forwards; }
    .pl14-stagger-6 { opacity: 0; animation: pl14-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.1s forwards; }
    .pl14-stagger-7 { opacity: 0; animation: pl14-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.3s forwards; }
    .pl14-stagger-8 { opacity: 0; animation: pl14-reveal 0.8s cubic-bezier(0.22, 1, 0.36, 1) 1.5s forwards; }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const canvas = document.getElementById('pl14-grid');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');
        let w, h;

        function resize() {
            w = canvas.width = canvas.offsetWidth;
            h = canvas.height = canvas.offsetHeight;
        }

        function draw() {
            ctx.clearRect(0, 0, w, h);
            const spacing = 60;
            ctx.strokeStyle = 'rgba(17,193,143,0.3)';
            ctx.lineWidth = 0.5;

            for (let x = 0; x < w; x += spacing) {
                ctx.beginPath();
                ctx.moveTo(x, 0);
                ctx.lineTo(x, h);
                ctx.stroke();
            }
            for (let y = 0; y < h; y += spacing) {
                ctx.beginPath();
                ctx.moveTo(0, y);
                ctx.lineTo(w, y);
                ctx.stroke();
            }
        }

        resize();
        draw();
        window.addEventListener('resize', () => { resize(); draw(); });
    });
</script>
