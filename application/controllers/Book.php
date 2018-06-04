<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function Home() {
        $this->load->model('Home_Model');
        $this->load->model('Book_Model');
        $data['result1'] = $this->Home_Model->GetNewBooks();
        $data['result2'] = $this->Home_Model->GetBestSellBooks();
        $data['result3'] = $this->Home_Model->GetImportentBooks();
        $data['result4'] = $this->Home_Model->GetQuranBooks();
        $data['result5'] = $this->Home_Model->GetHadisBooks();
        $data['book_menu'] = $this->Book_Model->GetAllCategory();
        $catagories = $this->Book_Model->GetAllCategory();

//        die(var_dump($catagories));

        $listing = [];
        foreach ($catagories as $catagory) {
            $books = $this->Book_Model->GetAllCategoryInfo($catagory->category_id);

            $category = [
                'category' => $catagory->category_name,
                'category_id' => $catagory->category_id,
                'books' => $books
            ];
            array_push($listing, $category);
        }

//        echo "<pre>";
//           print_r($listing);
//           echo "</pre>";
//           
//           die();

        $data['ebooks'] = $listing;

//        echo '<pre>';
//        print_r($data[result6]);
//        echo '<\pre>';
        //$data['result7'] = $this->Book_Model->GetAllCategoryInfo('category_id');
        $this->load->view('book_home', $data);
    }

//    public function BookList($pagination_number=false,$id){
//        $this->load->model('Book_Model');
//        $this->load->library('pagination');
//
//        $config['base_url'] = base_url() . 'index.php/Book/BookList/';
//        $config['total_rows'] = $this->db->count_all('ebooks');
//        $config['per_page'] = '5';
//        
//        $config['full_tag_open'] = "<ul class='pagination justify-content-center'>";
//        $config['full_tag_close'] ="</ul>";
//        $config['num_tag_open'] = '<li class="page-item">';
//        $config['num_tag_close'] = '</li>';
//        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a class='page-link' href='#'>";
//        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
//        $config['next_tag_open'] = "<li>";
//        $config['next_tagl_close'] = "</li>";
//        $config['prev_tag_open'] = "<li>";
//        $config['prev_tagl_close'] = "</li>";
//        $config['first_tag_open'] = "<li>";
//        $config['first_tagl_close'] = "</li>";
//        $config['last_tag_open'] = "<li>";
//        $config['last_tagl_close'] = "</li>";
//        
//        $this->pagination->initialize($config);
//        
//        $data['thiscategory']=$id;
//        $data['result'] = $this->Book_Model->category_book_list($pagination_number,$config['per_page'], $this->uri->segment(3),$id);
//        $data['authors']= $this->Book_Model->author_list();
//        $data['publishers']= $this->Book_Model->publisher_list();
//        $this->load->view('book_list',$data);
//    }

    public function BookList($id) {
        $this->load->model('Book_Model');
        $data['result'] = $this->Book_Model->category_book_list($id);
        $data['authors'] = $this->Book_Model->author_list();
        $data['publishers'] = $this->Book_Model->publisher_list();
        $data['book_menu'] = $this->Book_Model->GetAllCategory();
        $this->load->view('book_list', $data);
    }

    public function BookDetails($id) {
        $this->load->model('Book_Model');
        $this->load->model('Home_Model');
        $data['authors'] = $this->Book_Model->author_list();
        $data['publishers'] = $this->Book_Model->publisher_list();
        $data['topics'] = $this->Book_Model->topic_list();
        $data['related_products'] = $this->Home_Model->GetNewBooks();
        $data['book_menu'] = $this->Book_Model->GetAllCategory();
        $data['result'] = $this->Book_Model->details($id);
        $this->load->view('book_details', $data);
    }

    public function AuthorBookLists($id) {
        $this->load->model('Book_Model');
        $this->load->model('Home_Model');
        $data['authors'] = $this->Book_Model->author_list();
        $data['publishers'] = $this->Book_Model->publisher_list();
        $data['topics'] = $this->Book_Model->topic_list();
        $data['related_products'] = $this->Home_Model->GetNewBooks();
        $data['book_menu'] = $this->Book_Model->GetAllCategory();
        $data['author_name'] = $this->Book_Model->author_name($id);
        $data['result'] = $this->Book_Model->author_book_lists($id);
        $this->load->view('author_booklist', $data);
    }

    public function PublisherBookLists($id) {
        $this->load->model('Book_Model');
        $this->load->model('Home_Model');
        $data['authors'] = $this->Book_Model->author_list();
        $data['publishers'] = $this->Book_Model->publisher_list();
        $data['topics'] = $this->Book_Model->topic_list();
        $data['related_products'] = $this->Home_Model->GetNewBooks();
        $data['book_menu'] = $this->Book_Model->GetAllCategory();
        $data['publisher_name'] = $this->Book_Model->publisher_name($id);
        $data['result'] = $this->Book_Model->publisher_book_lists($id);
        $this->load->view('publisher_booklist', $data);
    }

    public function AllAuthorLists() {
        $this->load->model('Book_Model');
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'index.php/Book/AllAuthorLists/';
        $config['total_rows'] = $this->db->count_all('ebook_author');
        $config['per_page'] = '24';

        $config['full_tag_open'] = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a class='page-link' href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $data['all_author_lists'] = $this->Book_Model->all_author_list($config['per_page'], $this->uri->segment(3));
        $data['book_menu'] = $this->Book_Model->GetAllCategory();
        $this->load->view('all_author_list', $data);
    }

    public function AllPublisherLists() {
        $this->load->model('Book_Model');
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'index.php/Book/AllPublisherLists/';
        $config['total_rows'] = $this->db->count_all('ebook_publisher');
        $config['per_page'] = '12';

        $config['full_tag_open'] = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close'] = "</ul>";
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a class='page-link' href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $data['all_publisher_lists'] = $this->Book_Model->all_publisher_list($config['per_page'], $this->uri->segment(3));
        $data['book_menu'] = $this->Book_Model->GetAllCategory();
        $this->load->view('all_publisher_list', $data);
    }

    public function PublisherDetails() {
        $this->load->view('publisher_details');
    }

    public function TopicsDetails() {
        $this->load->view('topics_details');
    }

    public function AuthorDetails() {
        $this->load->view('author_details');
    }

    public function SendMail() {
        $config = Array(        
            'mailtype'  => 'html', 
            'charset'   => 'UTF-8'
        );
        $this->load->library('email',$config);
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('Book_Model');
        
        $from_email = "info@islamicalo.com";
        $id = $data['id'] = $this->input->post('id');
        $this->load->model('Book_Model');
        $data['result'] = $this->Book_Model->details($id);
        $to_email = $this->input->post('receiver_email');
        $subject  = $this->input->post('subject');
        $body = $this->load->view('book_email',$data,TRUE);
        
        $this->email->from($from_email, 'IslamicAlo.com');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($body);

        if ($this->email->send())
            $this->session->set_flashdata("email_sent", "Email sent successfully.");
        else
            $this->session->set_flashdata("email_sent", "Error in sending Email.");
        
        redirect('Book/Home');
//        $this->load->view('Book/Home');
    }

}
