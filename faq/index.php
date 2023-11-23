<?php include('../components/header.php'); ?>

<main class="bg-slate-200 max-w-4xl mx-auto my-10 p-4 rounded-md">
    <form method="post" id="addfaq">
        <div class="flex justify-content items-center gap-4">
            <select name="events" id="events" class="w-full p-3 rounded-md">
                <option value="diwali">Diwali</option>
                <option value="birthday">Birthday</option>
            </select>
            <input type="text" placeholder="Priority Order" name="priority-order" class="w-full p-3 rounded-md">
        </div>

        <div class="mt-4">
            <textarea name="question" id="question" placeholder="Enter Your Questions" class="h-24 w-full p-2 rounded-md"></textarea>
        </div>

        <div class="my-4">
            <textarea name="answer" id="answer" placeholder="Enter Your Answers" class="h-24 w-full p-2 rounded-md"></textarea>
        </div>

        <button id="submit-btn" type="submit" class="text-white text-white bg-gray-800 p-3 rounded-md text-sm">Add FAQ</button>
    </form>

    <div id="result"></div>
</main>

<script>
    const submitBtn = document.getElementById('submit-btn');
    submitBtn.addEventListener('click', addData);
    const formData = new FormData(document.getElementById('addfaq'));

    function addData(event) {
        event.preventDefault();

        var obj = {
            question: document.getElementById('question').value,
            answer: document.getElementById('answer').value,
        };

        fetch('add_faq.php', {
                method: 'POST',
                headers: {
                'Content-Type': 'application/json',
                },
                body: JSON.stringify(obj),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Fetch error:', error);
            });
    }
</script>

<?php include('../components/footer.php'); ?>