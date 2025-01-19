<div class="faq-container cmn-padding">
    <h2 class="heading-common">The Most Commonly Asked Questions</h2>
    @foreach ($faqs as $faq)
        <div class="faq-item">
            <div class="question" onclick="toggleAnswer(this)">
                {{ $faq['question'] }}
                <span class="toggle-icon">+</span>
            </div>
            <div class="answer">{{ $faq['answer'] }}</div>
        </div>
    @endforeach
</div>
