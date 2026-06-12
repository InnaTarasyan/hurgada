<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <defs>
        <linearGradient id="seaCircle" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" style="stop-color:#a5f3fc"/>
            <stop offset="50%" style="stop-color:#5eead4"/>
            <stop offset="100%" style="stop-color:#fda4b8"/>
        </linearGradient>
        <linearGradient id="fishBody" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#ff8a6b"/>
            <stop offset="100%" style="stop-color:#f97066"/>
        </linearGradient>
        <linearGradient id="fishTail" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#f43f5e"/>
            <stop offset="100%" style="stop-color:#fb7185"/>
        </linearGradient>
    </defs>
    <circle cx="50" cy="50" r="48" fill="url(#seaCircle)" opacity="0.25"/>
    <circle cx="50" cy="50" r="46" fill="#f0fdfa" stroke="url(#seaCircle)" stroke-width="2"/>
    <!-- coral accent -->
    <path d="M18 72 Q20 60 24 68 Q26 58 30 70 Q32 62 36 72" fill="none" stroke="#f0abfc" stroke-width="2.5" stroke-linecap="round" opacity="0.7"/>
    <path d="M64 72 Q66 58 70 66 Q72 54 76 68 Q78 60 82 72" fill="none" stroke="#fda4af" stroke-width="2.5" stroke-linecap="round" opacity="0.7"/>
    <!-- tropical fish -->
    <g transform="translate(50,48)">
        <ellipse cx="0" cy="2" rx="22" ry="13" fill="url(#fishBody)"/>
        <path d="M-22 2 L-34 -8 L-34 12 Z" fill="url(#fishTail)"/>
        <ellipse cx="-6" cy="0" rx="4" ry="6" fill="white" opacity="0.9"/>
        <ellipse cx="6" cy="0" rx="4" ry="6" fill="white" opacity="0.9"/>
        <ellipse cx="-6" cy="1" rx="2" ry="3" fill="#f59e0b"/>
        <ellipse cx="6" cy="1" rx="2" ry="3" fill="#f59e0b"/>
        <circle cx="14" cy="-2" r="3" fill="#134e4a"/>
        <circle cx="15" cy="-3" r="1" fill="white"/>
        <path d="M8 -10 Q14 -14 20 -8" fill="none" stroke="#14b8a6" stroke-width="2" stroke-linecap="round"/>
    </g>
    <!-- bubbles -->
    <circle cx="28" cy="28" r="3" fill="#cffafe" opacity="0.8">
        <animate attributeName="cy" values="28;22;28" dur="3s" repeatCount="indefinite"/>
    </circle>
    <circle cx="72" cy="32" r="2" fill="#fecdd9" opacity="0.7">
        <animate attributeName="cy" values="32;26;32" dur="2.5s" repeatCount="indefinite"/>
    </circle>
</svg>
