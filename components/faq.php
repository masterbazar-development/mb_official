<?php include('./mb-admin/config/dbcon.php');
?>
<section class="mx-[4vw] lg:mx-0 sm:my-28 my-10 z-[40] bg-white py-20">
    
        <h4 class="lg:text-center md:text-5xl text-4xl sm:mb-3 mb-6 text-head font-extrabold">Frequently Asked <span class="text-blue">Questions</span> </h4>
        <p class="lg:text-center max-w-5xl text-base lg:text-lg mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, ab quae! Mollitia illum tenetur ducimus voluptate, et ipsum fuga debitis sit nam laudantium nisi. Repudiandae accusantium ratione eos ea eligendi?</p>

    <div id="faqContainer" class="grid divide-y divide-neutral-200 max-w-5xl mx-auto space-y-3 mt-10">
    </div>
    <?php
    $faq = "SELECT * FROM mb_faq ORDER BY mb_faq.id ASC";
    $query = mysqli_query($con, $faq);
    $query_run = mysqli_num_rows($query);
    $currentPage = basename($_SERVER['PHP_SELF']);
    $filenameWithoutExtension = pathinfo($currentPage, PATHINFO_FILENAME);
    ?>

    <script async>
        var faqData = [
            <?php
            if ($query_run) {
                while ($result = mysqli_fetch_assoc($query)) {
            ?> {
                        question: '<?php echo $result['question']; ?>',
                        answer: '<?php echo $result['answer']; ?>',
                    },
            <?php
                };
            }
            ?>
        ];
        console.log(faqData);
        // Function to create a FAQ item
        function createFAQItem(question, answer) {
            var details = document.createElement('details');
            details.className = 'group w-full bg-[#F8FAFC] sm:p-10 p-3 border-none rounded-md';

            var summary = document.createElement('summary');
            summary.className = 'flex justify-between items-center font-medium cursor-pointer list-none text-xl font-lora';

            var questionSpan = document.createElement('span');
            questionSpan.textContent = question;

            var iconSpan = document.createElement('span');
            iconSpan.className = 'transition group-open:rotate-180';

            var iconSvg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
            iconSvg.setAttribute('fill', 'none');
            iconSvg.setAttribute('height', '24');
            iconSvg.setAttribute('shape-rendering', 'geometricPrecision');
            iconSvg.setAttribute('stroke', 'currentColor');
            iconSvg.setAttribute('stroke-linecap', 'round');
            iconSvg.setAttribute('stroke-linejoin', 'round');
            iconSvg.setAttribute('stroke-width', '1.5');
            iconSvg.setAttribute('viewBox', '0 0 24 24');
            iconSvg.setAttribute('width', '24');

            var iconPath = document.createElementNS('http://www.w3.org/2000/svg', 'path');
            iconPath.setAttribute('d', 'M6 9l6 6 6-6');

            iconSvg.appendChild(iconPath);
            iconSpan.appendChild(iconSvg);

            summary.appendChild(questionSpan);
            summary.appendChild(iconSpan);
            details.appendChild(summary);

            var answerParagraph = document.createElement('p');
            answerParagraph.className = 'font-normal';
            answerParagraph.textContent = answer;

            details.appendChild(answerParagraph);

            return details;
        }

        // Function to populate FAQ items
        function populateFAQ() {
            var faqContainer = document.getElementById('faqContainer');

            faqData.forEach(function(item) {
                var faqItem = createFAQItem(item.question, item.answer);
                faqContainer.appendChild(faqItem);
            });
        }

        // Call the function to populate FAQ items
        populateFAQ();
    </script>
</section>