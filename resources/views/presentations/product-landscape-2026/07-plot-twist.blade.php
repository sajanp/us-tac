<div class="relative min-h-screen overflow-hidden" style="background: #080c14;">

    {{-- Minimal background — almost nothing --}}
    <div class="absolute inset-0 pointer-events-none">
        {{-- Very subtle vignette --}}
        <div class="absolute inset-0" style="background: radial-gradient(ellipse at center, transparent 20%, #080c14 75%);"></div>
        {{-- Barely-there noise --}}
        <div class="absolute inset-0 opacity-[0.008]" style="background-image: url('data:image/svg+xml,<svg viewBox=&quot;0 0 256 256&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><filter id=&quot;n&quot;><feTurbulence type=&quot;fractalNoise&quot; baseFrequency=&quot;0.9&quot; numOctaves=&quot;4&quot; stitchTiles=&quot;stitch&quot;/></filter><rect width=&quot;256&quot; height=&quot;256&quot; filter=&quot;url(%23n)&quot; opacity=&quot;1&quot;/></svg>');"></div>
    </div>

    {{-- Ambient glow behind text — appears with the text --}}
    <div class="pl07-ambient-glow"></div>

    {{-- Content --}}
    <div class="relative z-10 min-h-screen flex flex-col items-center justify-center" style="padding: 56px 72px;">

        {{-- Small label --}}
        <div class="pl07-label">
            <span>Plot Twist</span>
        </div>

        {{-- The line --}}
        <div class="pl07-text-container">
            <h1 class="pl07-main-text" id="pl07-typewriter"></h1>
            <span class="pl07-cursor" id="pl07-cursor">|</span>
        </div>

    </div>
</div>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700;800;900&family=Sora:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Label */
    .pl07-label {
        opacity: 0;
        animation: pl07-label-in 0.6s cubic-bezier(0.22, 1, 0.36, 1) 0.5s forwards;
        margin-bottom: 32px;
    }

    .pl07-label span {
        font-family: 'Sora', sans-serif;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.35em;
        color: rgba(232,110,75,0.4);
    }

    @keyframes pl07-label-in {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Text container */
    .pl07-text-container {
        display: flex;
        align-items: baseline;
        justify-content: center;
        min-height: 80px;
    }

    .pl07-main-text {
        font-family: 'Cairo', sans-serif;
        font-weight: 800;
        font-size: clamp(2rem, 4.5vw, 3.5rem);
        color: rgba(255,255,255,0.92);
        letter-spacing: -0.02em;
        line-height: 1.2;
        text-align: center;
    }

    /* Cursor */
    .pl07-cursor {
        font-family: 'Cairo', sans-serif;
        font-weight: 300;
        font-size: clamp(2rem, 4.5vw, 3.5rem);
        color: rgba(232,110,75,0.7);
        animation: pl07-blink 0.6s step-end infinite;
        margin-left: 2px;
    }

    .pl07-cursor.pl07-hidden {
        opacity: 0;
        animation: none;
    }

    @keyframes pl07-blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }

    /* Ambient glow — slow pulse behind text */
    .pl07-ambient-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 500px;
        height: 300px;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        background: radial-gradient(ellipse, rgba(232,110,75,0.04) 0%, transparent 70%);
        filter: blur(60px);
        opacity: 0;
        animation: pl07-glow-in 3s ease-out 2s forwards;
        pointer-events: none;
        z-index: 1;
    }

    @keyframes pl07-glow-in {
        0% { opacity: 0; transform: translate(-50%, -50%) scale(0.8); }
        100% { opacity: 1; transform: translate(-50%, -50%) scale(1); }
    }

    /* Underline on "any" */
    .pl07-emphasis {
        position: relative;
        color: rgba(232,110,75,0.9);
    }

    .pl07-emphasis::after {
        content: '';
        position: absolute;
        bottom: -4px;
        left: 0;
        width: 100%;
        height: 2px;
        background: rgba(232,110,75,0.4);
        border-radius: 2px;
        transform: scaleX(0);
        transform-origin: left;
        animation: pl07-underline 0.6s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        animation-play-state: paused;
    }

    .pl07-emphasis.pl07-animate::after {
        animation-play-state: running;
    }

    @keyframes pl07-underline {
        to { transform: scaleX(1); }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const target = document.getElementById('pl07-typewriter');
        const cursor = document.getElementById('pl07-cursor');
        if (!target || !cursor) return;

        const fullText = "Sajan didn't do any of the work.";
        const emphasisWord = "any";
        const emphasisStart = fullText.indexOf(emphasisWord);
        const emphasisEnd = emphasisStart + emphasisWord.length;

        let charIndex = 0;
        const startDelay = 1400;
        const charSpeed = 65;
        const pauseAfterDidnt = 400;
        const pauseBeforePeriod = 300;

        function typeNext() {
            if (charIndex >= fullText.length) {
                // After typing finishes, keep cursor blinking for a moment then hide
                setTimeout(() => {
                    cursor.classList.add('pl07-hidden');
                }, 1500);

                // Animate the emphasis underline
                const emphSpan = target.querySelector('.pl07-emphasis');
                if (emphSpan) {
                    setTimeout(() => {
                        emphSpan.classList.add('pl07-animate');
                    }, 400);
                }
                return;
            }

            let currentHTML = '';
            const nextIndex = charIndex + 1;

            // Build the HTML string character by character
            for (let i = 0; i < nextIndex; i++) {
                if (i === emphasisStart) {
                    currentHTML += '<span class="pl07-emphasis">';
                }
                currentHTML += fullText[i];
                if (i === emphasisEnd - 1) {
                    currentHTML += '</span>';
                }
            }

            target.innerHTML = currentHTML;
            charIndex++;

            // Variable timing for dramatic effect
            let nextDelay = charSpeed;

            // Pause after "didn't" (index ~14)
            if (charIndex === 16) {
                nextDelay = pauseAfterDidnt;
            }

            // Pause before period
            if (charIndex === fullText.length - 1) {
                nextDelay = pauseBeforePeriod;
            }

            // Slightly random variation
            nextDelay += Math.random() * 30 - 15;

            setTimeout(typeNext, nextDelay);
        }

        setTimeout(typeNext, startDelay);
    });
</script>
