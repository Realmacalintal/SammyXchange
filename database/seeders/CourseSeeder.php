<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseChapter;
use App\Models\CourseChapterItem;
use App\Models\CourseChapterLesson;
use App\Models\CourseSelectedLanguage;
use App\Models\CourseSelectedLevel;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use App\Models\QuizQuestionAnswer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // truncate tables
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('course_chapter_lessons')->truncate();
        \DB::table('course_chapter_items')->truncate();
        \DB::table('course_chapters')->truncate();
        \DB::table('courses')->truncate();
        \DB::table('course_selected_languages')->truncate();
        \DB::table('course_selected_levels')->truncate();
        \DB::table('quizzes')->truncate();
        \DB::table('quiz_questions')->truncate();
        \DB::table('quiz_question_answers')->truncate();
        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        $coursesNames = array(
            "Full Stack Web Development with React",
            "Advanced Java Programming for Software",
            "Introduction to Mobile App Development",
            "Modern Front-End Development with js",
            "Database Design and Management with SQL",
            "Building Scalable Microservices",
            "Cybersecurity Fundamentals for devs",
            "Cloud Computing with AWS: From Beginner",
            "Game Development with Unity and C#",
            "Cloud Computing with AWS: From Beginner",
            "Game Development with Unity and C#",
            "Data Analysis with R for Business Intelligence",
            "iOS App Development with Objective-C",
            "Advanced Topics in C++ Programming",
            "Blockchain Fundamentals: Building Decentralized",
            "Artificial Intelligence and Machine",
            "DevOps Automation with Jenkins and Ansible",
            "Introduction to Natural Language Processing",
            "Building Reactive Applications with RxJava",
            "UI/UX Design Principles for Developers",
            "Introduction to Quantum Computing",
            "Business Strategies for Digital Marketers",
            "Advanced Data Analysis for Business",
            "IT Security Essentials: Protecting Your",
            "Mastering Python for Data Science",
            "Personal Branding: Building Your Online",
            "Effective Communication Skills for Leaders",
            "User Interface Design Fundamentals",
            "Creating Engaging Content: Strategies",
            "Introduction to Music Production",
            "Financial Planning for Young Professionals",
            "Entrepreneurship: From Idea to Launch",
            "Cybersecurity Fundamentals for IT Professionals",
            "Self-Confidence Mastery: Overcoming",
            "Graphic Design Principles for Beginners",
            "Digital Marketing Fundamentals: SEO and SEM",
            "Introduction to Guitar Playing Techniques",
            "Investment Strategies for a Volatile Market",
            "Leadership Development: Inspiring",
            "Web Development Bootcamp: From Zero",
            "Mindfulness Meditation for Stress Reduction",
            "Strategic Brand Management in Digital",
            "Advanced Excel Techniques for Financial",
            "Effective Time Management for Busy Professionals",
            "UX/UI Design: Creating Intuitive User Experiences",
            "Content Marketing Strategy: Engaging Your Audience",
            "Music Theory Essentials: Understanding Harmony",
            "Financial Literacy: Managing Your Finances",
            "Project Management Fundamentals: Agile",
            "Entrepreneurial Mindset: Cultivating Innovation",
            "Cybersecurity for Small Businesses: Best Practices",
            "Creative Writing Workshop: Finding Your Voice",
            "Introduction to Digital Illustration",
            "Social Media Marketing: Building Brand",
            "Music Production Masterclass: Mixing",
            "Investing in Cryptocurrencies: Opportunities",
            "Conflict Resolution Skills for Workplace",
            "Design Thinking: Solving Complex Problems",
            "Digital Advertising Fundamentals: PPC",
            "Piano for Beginners: Learning Basic Techniques",
            "Retirement Planning: Securing Your Future",
            "Effective Public Speaking: Engage and Persuade",
            "Product Essentials: From Idea to Market",
            "Mindful Leadership: Leading with Compassion",
            "Introduction to User Experience Research",
            "E-commerce Strategies for Small Businesses",
            "Songwriting Basics: Crafting Melodies",
            "Introduction to Financial Markets",
            "Remote Work Productivity: Tips and Tools",
            "Artificial Intelligence in Business"
        );

        $course_chapters = array(
            array(
                "title" => "Introduction",
                "instructor_id" => 1001,
                "course_id" => 1,
                "order" => 1,
                "status" => "active",
                "created_at" => "2024-06-04 04:35:50",
                "updated_at" => "2024-06-04 04:35:50",
            ),
            array(
                "title" => "Data Structures and Algorithms in Python",
                "instructor_id" => 1001,
                "course_id" => 1,
                "order" => 3,
                "status" => "active",
                "created_at" => "2024-06-04 04:36:44",
                "updated_at" => "2024-06-04 04:37:56",
            ),
            array(
                "title" => "Data Analysis with Pandas",
                "instructor_id" => 1001,
                "course_id" => 1,
                "order" => 4,
                "status" => "active",
                "created_at" => "2024-06-04 04:37:02",
                "updated_at" => "2024-06-04 04:37:56",
            ),
            array(
                "title" => "Data Visualization with Matplotlib and Seaborn",
                "instructor_id" => 1001,
                "course_id" => 1,
                "order" => 5,
                "status" => "active",
                "created_at" => "2024-06-04 04:38:14",
                "updated_at" => "2024-06-04 04:38:14",
            ),
            array(
                "title" => "Statistical Analysis and Hypothesis Testing",
                "instructor_id" => 1001,
                "course_id" => 1,
                "order" => 6,
                "status" => "active",
                "created_at" => "2024-06-04 04:38:25",
                "updated_at" => "2024-06-04 04:38:25",
            ),
            array(
                "title" => "Introduction to Machine Learning",
                "instructor_id" => 1001,
                "course_id" => 1,
                "order" => 7,
                "status" => "active",
                "created_at" => "2024-06-04 04:38:45",
                "updated_at" => "2024-06-04 04:38:45",
            ),
            array(
                "title" => "Advanced Machine Learning Techniques",
                "instructor_id" => 1001,
                "course_id" => 1,
                "order" => 8,
                "status" => "active",
                "created_at" => "2024-06-04 04:39:02",
                "updated_at" => "2024-06-04 04:39:02",
            ),
        );

        $course_chapter_items = array(
            array(
                "instructor_id" => 1001,
                "chapter_id" => 1,
                "type" => "lesson",
                "order" => 1,
                "created_at" => "2024-06-04 05:05:26",
                "updated_at" => "2024-06-04 05:05:26",
            ),
            array(
                "instructor_id" => 1001,
                "chapter_id" => 1,
                "type" => "lesson",
                "order" => 2,
                "created_at" => "2024-06-04 05:10:16",
                "updated_at" => "2024-06-04 05:10:16",
            ),
            array(
                "instructor_id" => 1001,
                "chapter_id" => 1,
                "type" => "lesson",
                "order" => 3,
                "created_at" => "2024-06-04 05:16:11",
                "updated_at" => "2024-06-04 05:16:11",
            ),
            array(
                "instructor_id" => 1001,
                "chapter_id" => 1,
                "type" => "quiz",
                "order" => 5,
                "created_at" => "2024-06-04 05:30:06",
                "updated_at" => "2024-06-04 07:02:07",
            ),
            array(
                "instructor_id" => 1001,
                "chapter_id" => 1,
                "type" => "lesson",
                "order" => 4,
                "created_at" => "2024-06-04 07:01:55",
                "updated_at" => "2024-06-04 07:02:07",
            ),
        );

        $course_chapter_lessons = array(
            array(
                "id" => 1,
                "title" => "Youtube Source",
                "slug" => NULL,
                "description" => "Unlock the full potential of Python in the realms of data science and machine learning with this comprehensive course. Designed for aspiring data scientists, machine learning engineers, and anyone eager to dive into the world of data, this course takes you from foundational concepts to advanced techniques, ensuring a thorough understanding and hands-on experience with the latest tools and methodologies",
                "instructor_id" => 1001,
                "course_id" => 1,
                "chapter_id" => 1,
                "chapter_item_id" => 1,
                "file_path" => "https://www.youtube.com/watch?v=7cMOjf4C9KE",
                "storage" => "youtube",
                "volume" => NULL,
                "duration" => "11",
                "file_type" => "video",
                "downloadable" => 1,
                "order" => NULL,
                "is_free" => 1,
                "status" => "active",
                "created_at" => "2024-06-04 05:05:26",
                "updated_at" => "2024-06-04 05:05:26",
            ),
            array(
                "id" => 2,
                "title" => "Vimeo Source",
                "slug" => NULL,
                "description" => "Unlock the full potential of Python in the realms of data science and machine learning with this comprehensive course. Designed for aspiring data scientists, machine learning engineers, and anyone eager to dive into the world of data, this course takes you from foundational concepts to advanced techniques, ensuring a thorough understanding and hands-on experience with the latest tools and methodologies",
                "instructor_id" => 1001,
                "course_id" => 0,
                "chapter_id" => 1,
                "chapter_item_id" => 2,
                "file_path" => "https://vimeo.com/273651219",
                "storage" => "vimeo",
                "volume" => NULL,
                "duration" => "1",
                "file_type" => "video",
                "downloadable" => 1,
                "order" => NULL,
                "is_free" => 1,
                "status" => "active",
                "created_at" => "2024-06-04 05:10:16",
                "updated_at" => "2024-06-04 05:14:25",
            ),
            array(
                "id" => 3,
                "title" => "Google Drive Source",
                "slug" => NULL,
                "description" => "Unlock the full potential of Python in the realms of data science and machine learning with this comprehensive course. Designed for aspiring data scientists, machine learning engineers, and anyone eager to dive into the world of data, this course takes you from foundational concepts to advanced techniques, ensuring a thorough understanding and hands-on experience with the latest tools and methodologies",
                "instructor_id" => 1001,
                "course_id" => 0,
                "chapter_id" => 1,
                "chapter_item_id" => 3,
                "file_path" => "https://drive.google.com/file/d/1CmtT6i3-QZtz7Oq_lcJHBcQkCVMdb0cV/view",
                "storage" => "google_drive",
                "volume" => NULL,
                "duration" => "2",
                "file_type" => "video",
                "downloadable" => 1,
                "order" => NULL,
                "is_free" => 0,
                "status" => "active",
                "created_at" => "2024-06-04 05:16:11",
                "updated_at" => "2024-06-04 05:20:19",
            ),
            array(
                "id" => 4,
                "title" => "Case Studies in Machine Learning",
                "slug" => NULL,
                "description" => "Unlock the full potential of Python in the realms of data science and machine learning with this comprehensive course. Designed for aspiring data scientists, machine learning engineers, and anyone eager to dive into the world of data, this course takes you from foundational concepts to advanced techniques, ensuring a thorough understanding and hands-on experience with the latest tools and methodologies",
                "instructor_id" => 1001,
                "course_id" => 1,
                "chapter_id" => 2,
                "chapter_item_id" => 5,
                "file_path" => "https://www.youtube.com/watch?v=dELcl7aB5k8&list=PL7pkSK1xbGD6EqTdsjXiGim-qexOpSUvI&index=4",
                "storage" => "youtube",
                "volume" => NULL,
                "duration" => "1",
                "file_type" => "video",
                "downloadable" => 1,
                "order" => NULL,
                "is_free" => 1,
                "status" => "active",
                "created_at" => "2024-06-04 06:44:55",
                "updated_at" => "2024-06-04 06:44:55",
            ),
            array(
                "id" => 6,
                "title" => "Feature Engineering and Selection",
                "slug" => NULL,
                "description" => "Unlock the full potential of Python in the realms of data science and machine learning with this comprehensive course. Designed for aspiring data scientists, machine learning engineers, and anyone eager to dive into the world of data, this course takes you from foundational concepts to advanced techniques, ensuring a thorough understanding and hands-on experience with the latest tools and methodologies",
                "instructor_id" => 1001,
                "course_id" => 1,
                "chapter_id" => 3,
                "chapter_item_id" => 10,
                "file_path" => "https://www.youtube.com/watch?v=pVTGfHyLlDU",
                "storage" => "youtube",
                "volume" => NULL,
                "duration" => "1",
                "file_type" => "video",
                "downloadable" => 1,
                "order" => NULL,
                "is_free" => NULL,
                "status" => "active",
                "created_at" => "2024-06-04 06:58:09",
                "updated_at" => "2024-06-04 06:58:09",
            ),
            array(
                "id" => 7,
                "title" => "File Source",
                "slug" => NULL,
                "description" => "Unlock the full potential of Python in the realms of data science and machine learning with this comprehensive course. Designed for aspiring data scientists, machine learning engineers, and anyone eager to dive into the world of data, this course takes you from foundational concepts to advanced techniques, ensuring a thorough understanding and hands-on experience with the latest tools and methodologies",
                "instructor_id" => 1001,
                "course_id" => 1,
                "chapter_id" => 1,
                "chapter_item_id" => 11,
                "file_path" => "/uploads/store/files/1001/certificate-22.pdf",
                "storage" => "upload",
                "volume" => NULL,
                "duration" => "1",
                "file_type" => "pdf",
                "downloadable" => 1,
                "order" => NULL,
                "is_free" => NULL,
                "status" => "active",
                "created_at" => "2024-06-04 07:01:55",
                "updated_at" => "2024-06-04 07:01:55",
            ),
        );

        $quizzes = array(
            array(
                "id" => 1,
                "chapter_item_id" => 4,
                "instructor_id" => 1001,
                "chapter_id" => 1,
                "course_id" => 1,
                "title" => "QUIZ: This is a demo quiz test",
                "time" => "10",
                "attempt" => "10",
                "pass_mark" => "50",
                "total_mark" => "100",
                "status" => "active",
                "created_at" => "2024-06-04 05:30:06",
                "updated_at" => "2024-06-04 05:30:32",
            ),
        );

        $quiz_questions = array(
            array(
                "id" => 1,
                "quiz_id" => 1,
                "title" => "What is Current Version of Laravel?",
                "type" => "multiple",
                "grade" => 50,
                "created_at" => "2024-06-04 05:31:31",
                "updated_at" => "2024-06-04 05:31:31",
            ),
        );

        $quiz_question_answers = array(
            array(
                "id" => 1,
                "title" => "11",
                "question_id" => 1,
                "correct" => 1,
                "created_at" => "2024-06-04 05:31:31",
                "updated_at" => "2024-06-04 05:31:31",
            ),
            array(
                "id" => 2,
                "title" => "10",
                "question_id" => 1,
                "correct" => 0,
                "created_at" => "2024-06-04 05:31:32",
                "updated_at" => "2024-06-04 05:31:32",
            ),
            array(
                "id" => 3,
                "title" => "9",
                "question_id" => 1,
                "correct" => 0,
                "created_at" => "2024-06-04 05:31:32",
                "updated_at" => "2024-06-04 05:31:32",
            ),
            array(
                "id" => 4,
                "title" => "20",
                "question_id" => 1,
                "correct" => 0,
                "created_at" => "2024-06-04 05:31:32",
                "updated_at" => "2024-06-04 05:31:32",
            ),
        );
        
        $instructorList = array(1001, 1002, 1003, 1004, 1005, 1006, 1009, 1011, 1012);
        foreach ($coursesNames as $courseName) {
            // create course
            $course = new Course();
            $course->instructor_id = $instructorList[array_rand($instructorList, 1)];
            $course->category_id = rand(9, 43);
            $course->type = "course";
            $course->title = $courseName;
            $course->slug = \Str::slug($courseName);
            $course->seo_description = $courseName;
            $course->duration = "3000";
            $course->timezone = NULL;
            $course->thumbnail = $this->getRandomFilename();
            $course->demo_video_storage = "youtube";
            $course->demo_video_source = "https://www.youtube.com/watch?v=MHhIzIgFgJo";
            $course->description = "<p>Laravel 10: Build Realtime Messaging App From Scratch (2024)</p>\r\n<p>Are you ready to take your Laravel skills to the next level? In this course, you will build a complete <strong>Realtime Messaging System</strong> project from scratch using Laravel 10 and Pusher. This project-based course is designed to help you become a professional Laravel developer and give you a competitive edge in the job market.</p>\r\n<p><strong>Why Learn Laravel 10?</strong></p>\r\n<p>Laravel 10 is the latest version of the popular PHP framework and comes packed with new features and improvements, making it faster and more efficient than ever before. It's easy to learn and has a huge community, making it the perfect choice for building robust and scalable web applications.</p>\r\n<p><strong>What Will You Learn?</strong></p>\r\n<p>In this course, you will learn how to build a feature-rich <strong>Realtime Messaging</strong> platform with advanced functionalities such as:</p>\r\n<ul>\r\n<li>User to User Live Chat</li>\r\n<li>Pusher Implementation</li>\r\n<li>Server Side Event Broadcasting</li>\r\n<li>Laravel Echo Implementation</li>\r\n<li>Working with Private Cannels</li>\r\n<li>Working with Presence Channels</li>\r\n<li>Listening Events From Client Side</li>\r\n<li>Request Debouncing</li>\r\n<li>Live Search</li>\r\n<li>Live Image Sending</li>\r\n<li>Ajax Scroll to Paginate</li>\r\n<li>Message Delete Feature</li>\r\n<li>Add Contact to Favorites</li>\r\n<li>Dynamic Image Gallery</li>\r\n<li>Profile Update Feature</li>\r\n<li>Personal Inbox</li>\r\n<li>Laravel Brezze For Auth</li>\r\n<li>And More</li>\r\n</ul>\r\n<p><strong>Why Choose This Course?</strong></p>\r\n<p>Unlike other courses that only cover the basics, this course is designed to help you build a complete, real-world project from scratch. You will not only learn how to write code, but also gain valuable insights into project management and best practices. Plus, you will have access to the complete source code of the project and lifetime access to the course materials.</p>\r\n<p>What's more, once you have completed this course, you will have a highly marketable skill set and the potential to earn a high income as a professional Laravel developer.</p>\r\n<p>Enroll now and take the first step towards building your dream <strong>Job Portal</strong> platform with Laravel 10!</p>\r\n<h2>Who this course is for:</h2>\r\n<ul>\r\n<li>Aspiring developers who want to become proficient in Laravel.</li>\r\n<li>Web developers who want to take their Laravel/PHP skills to the next level.</li>\r\n<li>Students who want to gain practical experience in building modern app with Laravel.</li>\r\n<li>University students who need to complete a project assignment using Laravel.</li>\r\n<li>Developers who want to learn about realtime features implementations</li>\r\n</ul>\r\n<p>&nbsp;</p>";
            $course->capacity = NULL;
            $course->price = rand(50, 200);
            $course->discount = null;
            $course->certificate = 1;
            $course->downloadable = 0;
            $course->partner_instructor = 0;
            $course->qna = 1;
            $course->message_for_reviewer = NULL;
            $course->status = "active";
            $course->is_approved = "approved";
            $course->save();
            // create course level
            CourseSelectedLevel::create([
                'course_id' => $course->id,
                'level_id' => rand(1, 3)
            ]);
            // create course language
            CourseSelectedLanguage::create([
                'course_id' => $course->id,
                'language_id' => rand(1, 5)
            ]);

            foreach($course_chapters as $chapterIndex => $chapter) {
                $courseChapter = new CourseChapter();
                $courseChapter->title = $chapter['title'];
                $courseChapter->instructor_id = $course->instructor_id;
                $courseChapter->course_id = $course->id;
                $courseChapter->order = $chapter['order'];
                $courseChapter->status = "active";
                $courseChapter->save();

                foreach($course_chapter_items as $index => $chapterItem) {
                    $courseChapterItem = new CourseChapterItem();
                    $courseChapterItem->instructor_id = $course->instructor_id;
                    $courseChapterItem->chapter_id = $courseChapter->id;
                    $courseChapterItem->type = $chapterItem['type'];
                    $courseChapterItem->order = $chapterItem['order'];
                    $courseChapterItem->save();


                    if($chapterIndex == 0) {
                        
                        if($chapterItem['type'] == "lesson") {
                            
                            $courseLesson = new CourseChapterLesson();
                            $courseLesson->title = $course_chapter_lessons[$index]['title'];
                            $courseLesson->slug = $course_chapter_lessons[$index]['slug'];
                            $courseLesson->description = $course_chapter_lessons[$index]['description'];
                            $courseLesson->instructor_id = $course->instructor_id;
                            $courseLesson->course_id = $course->id;
                            $courseLesson->chapter_id = $courseChapter->id;
                            $courseLesson->chapter_item_id = $courseChapterItem->id;
                            $courseLesson->file_path = $course_chapter_lessons[$index]['file_path'];
                            $courseLesson->storage = $course_chapter_lessons[$index]['storage'];
                            $courseLesson->volume = Null;
                            $courseLesson->duration = $course_chapter_lessons[$index]['duration'];
                            $courseLesson->file_type = $course_chapter_lessons[$index]['file_type'];
                            $courseLesson->downloadable = $course_chapter_lessons[$index]['downloadable'];
                            $courseLesson->order = $course_chapter_lessons[$index]['order'];
                            $courseLesson->is_free = $course_chapter_lessons[$index]['is_free'];
                            $courseLesson->status = $course_chapter_lessons[$index]['status'];
                            
                            $courseLesson->save();
                        }
    
                       if($chapterItem['type'] == "quiz") {
                           
                           foreach($quizzes as $quiz) {
                               $courseQuiz = new Quiz();
                               $courseQuiz->instructor_id = $course->instructor_id;
                               $courseQuiz->chapter_item_id = $courseChapterItem->id;
                               $courseQuiz->instructor_id = $course->instructor_id;
                               $courseQuiz->chapter_id = $courseChapter->id;
                               $courseQuiz->course_id = $course->id;
                               $courseQuiz->title = $quiz['title'];
                               $courseQuiz->time = $quiz['time'];
                               $courseQuiz->attempt = $quiz['attempt'];
                               $courseQuiz->pass_mark = $quiz['pass_mark'];
                               $courseQuiz->total_mark = $quiz['total_mark'];
                               $courseQuiz->status = $quiz['status'];
                               $courseQuiz->save();
    
                               foreach($quiz_questions as $question) {
                                   $courseQuizQuestion = new QuizQuestion();
                                   $courseQuizQuestion->quiz_id = $courseQuiz->id;
                                   $courseQuizQuestion->title = $question['title'];
                                   $courseQuizQuestion->type = $question['type'];
                                   $courseQuizQuestion->grade = $question['grade'];
                                   $courseQuizQuestion->save();
                                   foreach($quiz_question_answers as $answer) {
                                       $courseQuizQuestionAnswer = new QuizQuestionAnswer();
                                       $courseQuizQuestionAnswer->title = $answer['title'];
                                       $courseQuizQuestionAnswer->question_id = $courseQuizQuestion->id;
                                       $courseQuizQuestionAnswer->correct = $answer['correct'];
                                       $courseQuizQuestionAnswer->save();
                                   }
                               }
                           }
                       }
                    }else {
                        if($chapterItem['type'] == "lesson") {
                            
                            $courseLesson = new CourseChapterLesson();
                            $courseLesson->title = fake()->sentence();
                            $courseLesson->slug = fake()->slug();
                            $courseLesson->description = $course_chapter_lessons[$index]['description'];
                            $courseLesson->instructor_id = $course->instructor_id;
                            $courseLesson->course_id = $course->id;
                            $courseLesson->chapter_id = $courseChapter->id;
                            $courseLesson->chapter_item_id = $courseChapterItem->id;
                            $courseLesson->file_path = $course_chapter_lessons[$index]['file_path'];
                            $courseLesson->storage = $course_chapter_lessons[$index]['storage'];
                            $courseLesson->volume = Null;
                            $courseLesson->duration = $course_chapter_lessons[$index]['duration'];
                            $courseLesson->file_type = $course_chapter_lessons[$index]['file_type'];
                            $courseLesson->downloadable = $course_chapter_lessons[$index]['downloadable'];
                            $courseLesson->order = $course_chapter_lessons[$index]['order'];
                            $courseLesson->is_free = $course_chapter_lessons[$index]['is_free'];
                            $courseLesson->status = $course_chapter_lessons[$index]['status'];
                            
                            $courseLesson->save();
                        }
    
                       if($chapterItem['type'] == "quiz") {
                           
                           foreach($quizzes as $quiz) {
                               $courseQuiz = new Quiz();
                               $courseQuiz->instructor_id = $course->instructor_id;
                               $courseQuiz->chapter_item_id = $courseChapterItem->id;
                               $courseQuiz->instructor_id = $course->instructor_id;
                               $courseQuiz->chapter_id = $courseChapter->id;
                               $courseQuiz->course_id = $course->id;
                               $courseQuiz->title = fake()->sentence(5);
                               $courseQuiz->time = $quiz['time'];
                               $courseQuiz->attempt = $quiz['attempt'];
                               $courseQuiz->pass_mark = $quiz['pass_mark'];
                               $courseQuiz->total_mark = $quiz['total_mark'];
                               $courseQuiz->status = $quiz['status'];
                               $courseQuiz->save();
    
                               foreach($quiz_questions as $question) {
                                   $courseQuizQuestion = new QuizQuestion();
                                   $courseQuizQuestion->quiz_id = $courseQuiz->id;
                                   $courseQuizQuestion->title = $question['title'];
                                   $courseQuizQuestion->type = $question['type'];
                                   $courseQuizQuestion->grade = $question['grade'];
                                   $courseQuizQuestion->save();
                                   foreach($quiz_question_answers as $answer) {
                                       $courseQuizQuestionAnswer = new QuizQuestionAnswer();
                                       $courseQuizQuestionAnswer->title = $answer['title'];
                                       $courseQuizQuestionAnswer->question_id = $courseQuizQuestion->id;
                                       $courseQuizQuestionAnswer->correct = $answer['correct'];
                                       $courseQuizQuestionAnswer->save();
                                   }
                               }
                           }
                       }
                    }


                }
            }
        }


    }

    public function getRandomFilename()
    {
        $files = \File::files(public_path('/uploads/store/files/1001/my course images/'));  // Get all files from the path

        if (empty($files)) {
            return null; // Return null if no files found
        }

        // Randomly select a file index
        $randomIndex = shuffle($files);

        $fileInfo = pathinfo($files[$randomIndex]);  // Get info of selected file
        return "/uploads/store/files/1001/my course images/".$fileInfo['filename'] . '.' . $fileInfo['extension']; // Build filename
    }
}