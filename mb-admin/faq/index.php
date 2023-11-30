<?php include('../../components/header.php'); 
include('../authentication.php');
include('../includes/header.php');
include('../includes/navbar-top.php')

?>
<main class="max-w-4xl mx-auto my-8">
    <h3 class="text-4xl text-center mb-6 text-head font-bold">Frequently Asked Questions</h3>
    <form method="post" class="bg-[#F8FAFC] shadow-md p-4 rounded-md">
        <div class="flex justify-content items-center gap-4">
            <select name="events" id="events" class="w-full p-3 rounded-md">
                <option value="">Select Category</option>
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

        <div class="flex justify-start items-center gap-4">
        <button id="edit-btn" class="text-white hidden font-semibold bg-blue p-3 rounded-md text-sm">Edit Faq</button>
        <button id="submit-btn" class="text-white font-semibold bg-gray-800 p-3 rounded-md text-sm">Add FAQ</button>
        </div>
    </form>

    <div class="flex justify-center items-center gap-4 w-full bg-[#F8FAFC] p-4 rounded-md my-8 shadow-md">
        <input type="text" id="search-faqs" class="w-2/3 p-3 rounded-md" placeholder="Search FAQs by their questions and anwers">
        <select name="filter-category" id="filterCategory" class="w-1/3 p-3 rounded-md">
        <option value="">Select Category</option>
        <option value="diwali">Diwali</option>
            <option value="birthday">Birthday</option>
        </select>
    </div>

    <div id="result" class="space-y-6">
    </div>
</main>

<script>
    const submitBtn = document.getElementById('submit-btn');
    const editBtn = document.getElementById('edit-btn');
    const searchInput = document.getElementById('search-faqs');

    submitBtn.addEventListener('click', addData);
    editBtn.addEventListener('click', editfaqs)

    document.addEventListener('DOMContentLoaded', view_faq);
    searchInput.addEventListener('input', searchFaqs);

    let idToEdit;
    let faqsData = [];

    // filter FAQs by categories
    filterCategory.addEventListener('change', filterByCategory);
    function filterByCategory(){
        let currentCategory = filterCategory.value.toLowerCase();
        let filterFaqData = faqsData.filter(el => {
            return el.category.toLowerCase().includes(currentCategory);
        });
        result.innerHTML = '';
        faqs(filterFaqData);
    }

    // Searching FAQs
    function searchFaqs(event){
        const searchValue = event.target.value.toLowerCase();
        let filterFaqData = faqsData.filter(el => {
            return el.question.toLowerCase().includes(searchValue) || el.answer.toLowerCase().includes(searchValue);
        });
        result.innerHTML = '';
        faqs(filterFaqData);
    }

    // Deletign FAQ from DB and DOM
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

    // Edit FAQ in DB and DOM
    function editfaqs(event){
        event.preventDefault();

        const obj = {
            id: idToEdit,
            category: events.value,
            question: question.value,
            answer: answer.value,
            priority_order: priority_order.value
        };
        fetch('edit_faq', {
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
            console.log(data)
           dataToEdit = data[0];
           console.log(`ques${dataToEdit.id}`.innerHTML)
           `ques${dataToEdit.id}`.textContent = `${dataToEdit.question}`;
            `ans${dataToEdit.id}`.textContent = `${dataToEdit.answer}`;     
        })
        .catch(error => {
                console.error('Fetch error:', error);
        });       
        
        editBtn.style.display = "none";
        submitBtn.style.display = "block";
    }

    // Set the Form values to FAQ going to edit
    function setForEdit(id, category, question, answer) {
        idToEdit = parseInt(id);
        editBtn.style.display = "block";
        submitBtn.style.display = "none";

        document.getElementById('question').value = question;
        document.getElementById('answer').value = answer;
        document.getElementById('events').value = category;
    }

    // Map over faq data to display it in DOM
    function faqs(data) {
        data.map(el => {
            const html = `
            <div id="faq-${el.id}" class="bg-[#F8FAFC] shadow-md p-4 rounded-md space-y-3">            
                <h4 id="ques${el.id}" class="font-semibold">
                    ${el.question}
                </h4>        
            <p id="ans${el.id}" class="font-normal">
            ${el.answer}</p>
            <div class="flex justify-end items-center gap-6">
                <button onclick="setForEdit('${el.id}', '${el.category}', '${el.question}', '${el.answer}')" class="bg-white p-3 text-gray-700 font-semibold rounded-md shadow text-sm">Edit FAQ</button>
                <button onclick="deletefaqs(${el.id})" class="bg-blue p-3 text-gray-200 font-semibold rounded-md shadow text-sm">Delete FAQ</button>
            </div>
            </div>
            `;
            result.insertAdjacentHTML('beforeend', html);
        })
    }

    // Add FAQ to DB and to DOM
    function addData(event) {
        event.preventDefault();
        const obj = {
            category: document.getElementById('events').value,
            question: document.getElementById('question').value,
            answer: document.getElementById('answer').value,
            priority_order: document.getElementById('priority_order').value
        };

        faqs([obj]);
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
            .then(data => {console.log(data)})
            .catch(error => {
                console.error('Fetch error:', error);
            });
    }

    // Fetch the FAQ data from DB
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
                faqsData = data;
            })
            .catch(error => {
                console.error('Fetch error:', error);
            });
    }
</script>