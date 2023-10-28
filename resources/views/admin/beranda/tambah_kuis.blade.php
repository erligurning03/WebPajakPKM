@extends('admin.layouts.navbar_admin')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Kuis</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 p-5">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Create a New Kuis</h4>
        </div>

        <form method="POST" action="'admin/tambahkuis/post">
            @csrf
            <!-- Add CSRF token -->

            <!-- Kuis Level -->
            <div class="form-group">
                <label for="nama_kuis">Kuis Name:</label>
                <input type="text" id="nama_kuis" name="nama_kuis" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="waktu_kuis">Quiz Duration (minutes):</label>
                <input type="number" id="waktu_kuis" name="waktu_kuis" class="form-control" required>
            </div>

            <!-- Questions and Answers -->
            <div class="questions-section">
                <!-- Template for a question -->
                <div class="question-template" style="display: none;">
                    <hr>
                    <div class="form-group">
                        <label for="questions[0][isi_soal]">Question:</label>
                        <input type="text" name="questions[0][isi_soal]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="questions[0][jawaban_soal]">Correct Answer:</label>
                        <input type="text" name="questions[0][jawaban_soal]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="questions[0][pembahasan_soal]">Explanation:</label>
                        <textarea name="questions[0][pembahasan_soal]" class="form-control" required></textarea>
                    </div>
                    <div class="answers">
                        <!-- Template for an answer -->
                        <div class="answer-template" style="display: none;">
                            <div class="form-group">
                                <label for="questions[0][answers][0][opsi_jawaban]">Answer Option:</label>
                                <input type="text" name="questions[0][answers][0][opsi_jawaban]" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="questions[0][answers][0][isi_jawaban]">Answer Text:</label>
                                <textarea name="questions[0][answers][0][isi_jawaban]" class="form-control"
                                    required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success add-answer">Add Answer</button>
                </div>

                <!-- Initially display one question with one answer -->
                <div class="question">
                    <h4>Question 1</h4>
                    <div class="form-group">
                        <label for="questions[0][isi_soal]">Question:</label>
                        <input type="text" name="questions[0][isi_soal]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="questions[0][jawaban_soal]">Correct Answer:</label>
                        <input type="text" name="questions[0][jawaban_soal]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="questions[0][pembahasan_soal]">Explanation:</label>
                        <textarea name="questions[0][pembahasan_soal]" class="form-control" required></textarea>
                    </div>
                    <div class="answers">
                        <div class="answer">
                            <div class="form-group">
                                <label for="questions[0][answers][0][opsi_jawaban]">Answer Option:</label>
                                <input type="text" name="questions[0][answers][0][opsi_jawaban]" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="questions[0][answers][0][isi_jawaban]">Answer Text:</label>
                                <textarea name="questions[0][answers][0][isi_jawaban]" class="form-control"
                                    required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success add-answer">Add Answer</button>
                </div>
                <button type="button" class="btn btn-primary add-question">Add Question</button>
            </div>

            <button type="submit" class="btn btn-success">Create Kuis</button>
        </form>

        <!-- JavaScript to handle dynamic question and answer fields -->
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Handle adding a new question
                const addQuestionButton = document.querySelector('.add-question');
                const questionSection = document.querySelector('.questions-section');
                const questionTemplate = document.querySelector('.question-template').cloneNode(true);
                questionTemplate.classList.remove('question-template');
                questionTemplate.style.display = 'block';

                let questionCounter = 1;

                addQuestionButton.addEventListener('click', function () {
                    questionCounter++;
                    const newQuestion = questionTemplate.cloneNode(true);
                    newQuestion.querySelector('h4').textContent = 'Question ' + questionCounter;
                    newQuestion.querySelectorAll('input, textarea').forEach(function (input) {
                        input.name = input.name.replace('[0]', '[' + (questionCounter - 1) + ']');
                        input.value = '';
                    });
                    questionSection.appendChild(newQuestion);
                });

                // Handle adding a new answer
                questionSection.addEventListener('click', function (e) {
                    if (e.target && e.target.classList.contains('add-answer')) {
                        const answersSection = e.target.parentElement.querySelector('.answers');
                        const answerTemplate = e.target.parentElement.querySelector('.answer-template').cloneNode(true);
                        answerTemplate.classList.remove('answer-template');
                        answerTemplate.style.display = 'block';

                        answersSection.appendChild(answerTemplate);
                    }
                });
            });
        </script>



        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Website Desa Nagori NagoriTongah 2023</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

{{--
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div> --}}



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
