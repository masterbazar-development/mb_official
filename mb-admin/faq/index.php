<?php include('../components/header.php'); ?>
<main class="max-w-4xl mx-auto my-8">
    <h3 class="text-4xl text-center mb-6 text-head font-extrabold">Frequently Asked Questions</h3>
    <form method="post" class="bg-[#F8FAFC] shadow-md p-4 rounded-md">
        <div class="flex justify-content items-center gap-4">
            <select name="events" id="events" class="w-full p-3 rounded-md">
                <option value="diwali">Diwali</option>
                <option value="birthday">Birthday</option>
            </select>
            <input type="text" id="priority_order" placeholder="Priority Order" name="priority_order" class="p-3 rounded-md">
        </div>

        <div class="mt-4">
            <textarea name="question" id="question" placeholder="Enter Your Questions" class="h-24 w-full p-2 rounded-md"></textarea>
        </div>

        <div class="my-4">
            <textarea name="answer" id="answer" placeholder="Enter Your Answers" class="h-24 w-full p-2 rounded-md"></textarea>
        </div>

        <button id="submit-btn" type="submit" class="text-white font-semibold bg-gray-800 p-3 rounded-md text-sm">Add FAQ</button>
    </form>

    <div class="flex justify-center items-center gap-4 w-full bg-[#F8FAFC] p-4 rounded-md my-8 shadow-md">
        <input type="text" class="w-2/3 p-3 rounded-md" placeholder="Search FAQs by their questions and anwers">
        <select name="filter-category" id="filter-category" class="w-1/3 p-3 rounded-md">
            <option value="diwali">Diwali</option>
            <option value="birthday">Birthday</option>
        </select>
    </div>

    <div id="result" class="space-y-6">
    </div>
</main>

<script>
    const submitBtn = document.getElementById('submit-btn');

    submitBtn.addEventListener('click', addData);
    document.addEventListener('DOMContentLoaded', view_faq);

    function deletefaqs(id) {
        const elementToRemove = document.getElementById(`faq-${id}`);
        elementToRemove.remove();

        fetch('delete_faq', {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    "id": id
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            }).then(data => {
                console.log(data);
            })
            .catch(error => {
                console.error('Fetch error:', error);
            });
    }

    function editfaqs(category, question, answer) {
        document.getElementById('question').value = question;
        document.getElementById('answer').value = answer;
        document.getElementById('events').value = category;
    }

    function faqs(data) {
        data.map(el => {
            const html = `
            <div id="faq-${el.id}" class="bg-[#F8FAFC] shadow-md p-4 rounded-md space-y-3">
            <div class="w-full flex justify-between">
                <h4 class="font-semibold">
                    ${el.question}</h4>
            </div>
            <p class="font-normal">
            ${el.answer}</p>
            <div class="flex justify-end items-center gap-6">
                <button onclick="editfaqs('${el.category}', '${el.question}', '${el.answer}')" class="bg-white p-3 text-gray-700 font-semibold rounded-md shadow text-sm">Edit FAQ</button>
                <button onclick="deletefaqs(${el.id})" class="bg-blue p-3 text-gray-200 font-semibold rounded-md shadow text-sm">Delete FAQ</button>
            </div>
            </div>
            `;
            result.insertAdjacentHTML('beforeend', html);
        })
    }

    function addData(event) {
        event.preventDefault();

        const obj = {
            category: document.getElementById('events').value,
            question: document.getElementById('question').value,
            answer: document.getElementById('answer').value,
            priority_order: document.getElementById('priority_order').value
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
                faqs(data);
                console.log(data);
            })
            .catch(error => {
                console.error('Fetch error:', error);
            });
    }

    function view_faq() {
        fetch('view_faq', {
                method: 'GET',
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                faqs(data);
            })
            .catch(error => {
                console.error('Fetch error:', error);
            });
    }
</script>