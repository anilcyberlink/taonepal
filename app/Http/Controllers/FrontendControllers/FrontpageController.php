<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Mail\ContactMail;
use App\Mail\VehicleBooking;
use App\Model\Appointment;
use App\Model\Booking;
use App\Model\Contact;
use App\Model\Inquiry;
use App\Model\Proposal;
use App\Model\TripBooking;
use App\Models\Membership\MembershipModel;
use App\Models\Settings\CountryModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banners\BannerModel;
use App\Models\MultipleBanners\MultipleBannerModel;
use App\Models\Posts\PostModel;
use App\Models\Posts\AssociatedPostModel;
use App\Models\Posts\PostCategoryModel;
use App\Models\Posts\PostImageModel;
use App\Models\Posts\PostDocModel;
use App\Models\Settings\SettingModel;
use App\Models\Galleries\ImageGalleryModel;
use App\Models\Galleries\ImageGalleryCategoryModel;
use App\Models\Galleries\VideoGalleryModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendMailContact;
use App\Mail\SendResume;
use App\Mail\CareerApply;
use App\Models\Posts\PostTypeModel;
use App\Models\Portfolios\PortfolioCategoryModel;
use App\Models\Portfolios\PortfolioModel;
use App\Models\Portfolios\AssociatedPortfolioModel;

use Illuminate\Support\Str;

class FrontpageController extends Controller
{

    public function index(Request $request)
    {
        $banner = BannerModel::where('status', 1)->get();
        $service = PostTypeModel::where('id', 28)->first();
        $services = PostModel::where(['post_type' => '28', 'show_in_home' => '1', 'status' => '1'])->orderBy('home_order', 'asc')->get();
        $news = PostTypeModel::where('id', 30)->first();
        $media = PostModel::where(['post_type' => '30', 'show_in_home' => '1', 'status' => '1'])->take(3)->get();
        $about = PostTypeModel::where('id', 27)->first();
        $whyus = AssociatedPostModel::where(['post_id' => '148'])->get();

        return view('themes.default.frontpage', compact('whyus', 'service', 'media', 'about', 'banner', 'services', 'news'));
    }

    public function posttype(Request $request, $uri)
    {
        if (!check_posttype_uri($uri)) {
            abort(404);
        }
        $data = PostTypeModel::where('uri', $uri)->first();

        $tmpl['template'] = 'page';

        // dump($data);
        if ($data) {
            if ($data['template'] == 'posttypeTemplate-service') {
                $posts = [];
                $majorServices = PostModel::where('post_type', $data->id)->where('post_category', 19)->orderBy('id')->where('status', '1')->get();
                $medicalServices = PostModel::where('post_type', $data->id)->where('post_category', 18)->orderBy('id')->where('status', '1')->get();
                $bloodRelatedTreatments = PostModel::where('post_type', $data->id)->where('post_category', 20)->orderBy('id')->where('status', '1')->get();
                $bloodRelatedConditions = PostCategoryModel::where('post_type', $data->id)->where('id', 21)->orderBy('id')->first();
                $medicalService = PostCategoryModel::where('post_type', $data->id)->where('id', 18)->first();
                $who_we_are = [];
                $objective = [];
                $ourObjectives = [];
                $carefortheHealth = [];
                $carehealths = [];
                $strength = [];
                $ourStrengths =[];
                $statistics  =[];
                // $bloodRelated=PostCategoryModel::where('post_type',$data->id)->where('id',18)->first();
            } elseif ($data['template'] == 'posttypeTemplate-about') {
                $majorServices = [];
                $medicalServices = [];
                $bloodRelatedTreatments = [];
                $bloodRelatedConditions = [];
                $medicalService = [];
                $posts = [];
                $who_we_are = PostCategoryModel::where('post_type', $data->id)->where('id', 23)->orderBy('id')->where('status', '1')->first();
                $objective = PostCategoryModel::where('post_type', $data->id)->where('id', 24)->orderBy('id')->where('status', '1')->first();
                // dump($objective);
                $ourObjectives = PostModel::where('post_type', $data->id)->where('post_category', 24)->orderBy('id')->where('status', '1')->get();
                // dump($ourObjectives);
                $carefortheHealth = PostCategoryModel::where('post_type', $data->id)->where('id', 25)->orderBy('id')->where('status', '1')->first();

                $carehealths = PostModel::where('post_type', $data->id)->where('post_category', 25)->orderBy('id')->where('status', '1')->get();
                $strength = PostCategoryModel::where('post_type', $data->id)->where('id', 26)->orderBy('id')->where('status', '1')->first();
                $ourStrengths = PostModel::where('post_type', $data->id)->where('post_category', 26)->orderBy('id')->where('status', '1')->get();
                $statistics = PostModel::where('post_type', $data->id)->where('post_category', 27)->orderBy('id')->where('status', '1')->get();
                // dump($carehealths);
                // $who_we_are=PostCategoryModel::where('post_type',$data->id)->where('id',23)->orderBy('id')->where('status', '1')->first();
            } else {
                $majorServices = [];
                $medicalServices = [];
                $bloodRelatedTreatments = [];
                $bloodRelatedConditions = [];
                $medicalService = [];
                $who_we_are = [];
                $objective = [];
                $ourObjectives = [];
                $carefortheHealth = [];
                $carehealths = [];
                $strength = [];
                $ourStrengths =[];
                $statistics  =[];
                $posts = PostModel::where('post_type', $data->id)->where('status', '1')->orderBy('post_order', 'asc')->paginate(12);
            }
        }
        // die;
        // dump($posts);
        // <!-- dump($posts); -->
        $country = CountryModel::all();
        $related = AssociatedPostModel::where('post_id', 114)->get();
        $category = PostCategoryModel::where('post_type', 26)->get();

        if ($request->ajax()) {
            if ($request->has('value')) {
                $result = PostModel::where('post_category', $request->value)->get();
            }
            return view('themes.default.doctor-filter', compact('result'));
        }
        $doctor = PostTypeModel::where('id', 29)->first();
        $service_uri = PostTypeModel::where('id', 28)->first();
        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
        return view('themes.default.' . $data['template'] . '', compact(
            'service_uri',
            'objective',
            'ourObjectives',
            'carefortheHealth',
            'carehealths',
            'who_we_are',
            'doctor',
            'strength',
            'ourStrengths',
            'statistics',
            'majorServices',
            'medicalServices',
            'bloodRelatedTreatments',
            'bloodRelatedConditions',
            'category',
            'data',
            'documents',
            'posts',
            'country',
            'related',
            'medicalService'
        ));
    }

    public function pagedetail($uri)
    {
        if (!check_uri($uri)) {
            abort(404);
        }
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
        $uri = explode('.', $uri);
        $_uri = $uri[0];
        $tmpl['template'] = 'single';
        if ($tmpl['template']) {
            $data['template'] = $data['template'];
        }

        if ($data->id) {
            $data->visiter = $data->visiter + 1;
            $data->save();
        }

        $data_child = PostModel::where('post_parent', $data['id'])->orderBy('post_order', 'asc')->paginate(9);
        $associated_posts = AssociatedPostModel::where('post_id', $data['id'])->get();
        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
        $related = PostModel::where('post_type', $data['post_type'])->orderBy('post_order', 'desc')->take(6)->get();
        $pos_type = PostTypeModel::where('id', $data->post_type)->first();
        $currentUser = PostModel::find($data->id);
        $previous = PostModel::where('id', '<', $currentUser->id)->where('post_type', '30')->select('*')->first();
        $next = PostModel::where('id', '>', $currentUser->id)->where('post_type', '30')->select('*')->first();
        $category = PostCategoryModel::where('post_type', $data->post_type)->get();
        if ($data->post_type == 29) {
            $data['template'] = "doctors-single";
        }
        if ($data->post_type == 30) {
            $data['template'] = "media-single";
        }
        return view('themes.default.' . $data['template'] . '', compact('category', 'previous', 'next', 'pos_type', 'related', '_uri', 'data', 'data_child', 'associated_posts', 'documents'));
    }

    public function pagedetail_child($parenturi, $uri)
    {
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
        $currentUser = PostModel::find($data->id);
        $previous = PostModel::where('id', '<', $currentUser->id)->where('post_type', '30')->select('*')->first();
        $next = PostModel::where('id', '>', $currentUser->id)->where('post_type', '30')->select('*')->first();
        $tmpl['template'] = 'single';
        if ($tmpl['template']) {
            $data['template'] = $data['template'];
        }

        if ($data->id) {
            $data->visiter = $data->visiter + 1;
            $data->save();
        }

        $data_child = PostModel::where('id', $data['post_parent'])->first();
        if ($data_child) {

            $data['template'] = $data_child['template_child'];
        }
        $associated_posts = array();
        if ($data) {
            $associated_posts = AssociatedPostModel::where('post_id', $data['id'])->get();
        }
        $post_id = $data->id;
        $documents = PostDocModel::where('post_id', $data['id'])->orderBy('ordering', 'desc')->get();
        $related = PostModel::where('post_type', $data['post_type'])->get();
        $pos_type = PostTypeModel::where('id', $data->post_type)->first();
        $service = PostModel::where('post_type', 28)->take(6)->get();

        return view('themes.default.' . $data['template'] . '', compact('previous', 'next', 'service', 'pos_type', 'related', 'data', 'data_child', 'associated_posts', 'documents'));
    }

    public function portfolio($uri)
    {
        $data = PortfolioModel::where('uri', $uri)->first();
        $associated_post = AssociatedPortfolioModel::where('portfolio_id', $data['id'])->get();
        $trades = PortfolioModel::inRandomOrder()->limit(2)->get();
        if ($data) {
            return view('themes.default.trade', compact('data', 'associated_post', 'trades'));
        }
        return false;
    }

    public function servicetype($category_uri)
    {
        $category = PostCategoryModel::where('uri', $category_uri)->first();
        if ($category) {
            $data = PostModel::where('post_category', $category->id)->orderBy('post_order', 'desc')->get();
            return view('themes.default.service-list', compact('data', 'category'));
        }
        return false;
    }

    public function apply($parenturi, $uri)
    {
        $data = PostModel::where('uri', $uri)->orWhere('page_key', $uri)->first();
        if ($data) {
            return view('themes.default.apply', compact('data'));
        }
    }

    public function navigation($uri)
    {
        $getId = PostModel::where(['uri' => $uri])->first();
        $childCount = PostModel::where(['post_parent' => $getId->id])->count();
        if ($childCount > 0) {
            $parent_post = PostModel::where('uri', $uri)->first();
            $post = PostModel::where(['post_parent' => intval($getId->id)])->orderBy('post_order', 'asc')->paginate(15);
            $template = $parent_post->template;
        } else {
            $parent_post = PostModel::where('uri', $uri)->first();
            $post = PostModel::where('uri', $uri)->first();
            $template = $post->template;
            $news_updates = PostModel::where(['post_type' => 9])->orderBy('post_order', 'asc')->paginate(15);
        }
        $bod = PostModel::where(['post_type' => 12])->get();
        return view('themes.default.' . $template . '', compact('post', 'bod', 'parent_post', 'news_updates'));
    }

    public function category_navigation($uri)
    {
        $post_category = PostCategoryModel::where('uri', trim($uri))->first();
        $posts = PostModel::where('post_category', $post_category->id)->paginate(12);
        return view('themes.default.post_category', compact('posts'));
    }

    /***********************************
     ******** Root Navigation ***********
     ************************************/

    public function photo_gallery($cat_id)
    {
        $data = ImageGalleryModel::where(['category_id' => $cat_id])->get();
        $cat = ImageGalleryCategoryModel::where(['id' => $cat_id])->first();
        return view('themes.default.photo_gallery_thumbnail', compact('data', 'cat'));
    }

    public function sendmail()
    {
        $data = SettingModel::where('id', 1)->first();
        Mail::to($data->email_primary)->send(new SendMail());
        return redirect()->back()->with('message', 'Contact message successfully sent.');
    }

    public function sendmail_contact(Request $request)
    {
        $return = $this->getCaptcha($request['g_recaptcha_response']);
        $data = SettingModel::where('id', 1)->first();
        $data->num_of_inquiries = $data->num_of_inquiries + 1;
        $data->save();
        if ($return->success == true && $return->score > 0.5) {
            Mail::to($data->email_primary)->send(new SendMailContact());
            return redirect()->back()->with('message', 'Contact message successfully sent.');
        } else {
            return redirect()->back()->with('message', 'Please, try again!');
        }
    }

    private function getCaptcha($Secretkey)
    {
        $secret = env('SECRET_KEY');
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$Secretkey}");
        $return = json_decode($response);
        return $return;
    }

    public function career_navigation(Request $request)
    {
        $data['career_title'] = $request->input('post_title');
        return view('themes.default.apply', $data);
    }

    public function career_apply()
    {
        $data['career_title'] = request()->segment(3);
        return view('themes.default.apply', $data);
    }

    public function career_apply_action()
    {
        $data = SettingModel::where('id', 1)->first();
        Mail::to($data->email_primary)->send(new CareerApply());
        return redirect()->back()->with('message', 'Successfully Applied.');
    }

    public function postby_category($id)
    {
        $post_category = PostCategoryModel::where(['id' => $id])->first();
        $data = PostModel::where(['post_category' => $id])->paginate(20);
        if ($data) {
            return view('themes.default.postbycategory', compact('data', 'post_category'));
        }
        return false;
    }

    public function postby_parent($id)
    {
        $childCount = PostModel::where(['post_parent' => $id])->count();
        if ($childCount > 0) {
            $parent_post = PostModel::where('post_parent', $id)->first();
            $post = PostModel::where(['post_parent' => intval($id)])->orderBy('post_order', 'asc')->paginate(15);
            return view('themes.default.template-project-list', compact('post', 'parent_post'));
        }
        return false;
    }

    public function serviceorder($uri)
    {
        $data = PostModel::where('page_key', $uri)->first();
        if ($data) {
            $services = PostModel::where('post_category', $data->post_category)->get();
            $category = PostCategoryModel::where('id', $data->post_category)->first();
            return view('themes.default.order-form', compact('data', 'services', 'category'));
        }
        return false;
    }

    public function sendorder(Request $request)
    {
        $return = $this->getCaptcha($request['g-recaptcha-response']);
        $data = SettingModel::where('id', 1)->first();
        if ($return->success == true && $return->score > 0.5) {
            Mail::to($data->email_primary)->send(new SendMail());
            return redirect()->back()->with('message', 'Order sent successfully.');
        } else {
            return redirect()->back()->with('message', 'Please, try again!');
        }
    }

    public function careerapply($uri)
    {
        $data = PostModel::where('page_key', $uri)->first();
        if ($data) {
            $services = PostModel::where('post_category', $data->post_category)->get();
            $category = PostCategoryModel::where('id', $data->post_category)->first();
            return view('themes.default.career-form', compact('data', 'services', 'category'));
        }
        return false;
    }

    public function sendresume(Request $request)
    {
        $return = $this->getCaptcha($request['g-recaptcha-response']);
        $data = SettingModel::where('id', 1)->first();
        if ($return->success == true && $return->score > 0.5) {
            Mail::to($data->email_primary)->send(new SendResume());
            return redirect()->back()->with('message', 'Resume sent successfully.');
        } else {
            return redirect()->back()->with('message', 'Please, try again!');
        }
    }



    public function post_inquiry(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'location' => 'required',
                'date' => 'required',
                'contact' => 'required'
            ]);
            $data = $request->all();
            $result = Inquiry::create($data);
            if ($result) {
                //              return new \App\Mail\Inquiry($request->email);
                //              Mail::send(new \App\Mail\Inquiry($request->email));
                return redirect()->back()->with('message', 'Inquiry message sent successfully.');
            }
        }
    }

    public function random_tripbooking(Request $request)
    {
        if ($request->isMethod('post')) {
            //          $request->validate([
            //              'first_name'=>'required',
            //              'last_name'=>'required',
            //              'email'=>'required',
            //              'phone'=>'required',
            //          ]);
            $data['first_name'] = $request->firstname;
            $data['last_name'] = $request->lastname;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['message'] = $request->message;
            $data['type'] = $request->uri;
            $create = TripBooking::create($data);
            if ($create) {
                //              return new \App\Mail\TripBooking($request->email);
                //              Mail::send(new \App\Mail\TripBooking($request->email));
                return back()->with('message', 'Trip Booking Completed');
            }
        }
    }


    public function vehicle_booking(Request $request)
    {
        if ($request->isMethod('post')) {
            $data['first_name'] = $request->firstname;
            $data['last_name'] = $request->lastname;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['message'] = $request->message;
            $data['type'] = $request->uri;
            $create = Booking::create($data);
            if ($create) {
                //             return new VehicleBooking($request->email);
                //             Mail::send(new VehicleBooking($request->email));
                return back()->with('message', 'Vehicle Booking Completed');
            }
        }
    }


    public function proposal_request(Request $request)
    {
        if ($request->isMethod('get')) {
            $data = $request->uri;
            $industry = PostModel::where('status', 1)->where('post_type', 15)->get();
            $country = CountryModel::all();
            return view('themes.default.proposal', compact('data', 'industry', 'country'));
        }
        if ($request->isMethod('post')) {
            if ($request->isMethod('post')) {
                $request->validate([
                    'firstname' => 'required',
                    'lastname' => 'required',
                    'email' => 'required',
                    'contact' => 'required',
                ]);
                $data['first_name'] = $request->firstname;
                $data['last_name'] = $request->lastname;
                $data['email'] = $request->email;
                $data['contact'] = $request->contact;
                $data['position'] = $request->position;
                $data['company'] = $request->company;
                $data['country'] = $request->country;
                $data['post_code'] = $request->postcode;
                $data['industry'] = $request->industry;
                $data['revenue'] = $request->revenue;
                $data['options'] = $request->option;
                $data['comments'] = $request->comment;
                if ($request->hasFile('rfp')) {
                    $image = $request->file('rfp');
                    $name = time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('/images/rfp/');
                    $image->move($destinationPath, $name);
                    $data['rfp'] = $name;
                }
                $result = Proposal::create($data);
                $setting = SettingModel::first();
                if ($result) {


                    //              return new \App\Mail\Inquiry($setting->email_primary);
                    //              Mail::send(new \App\Mail\Inquiry($request->email));
                    return redirect()->back()->with('message', 'Proposal sent successfully.');
                }
            }
        }
    }

    public function search_results(Request $request)
    {
        $query = $request->search;
        if ($query == null) {
            return back()->with('message', 'Search field is empty');
        }
        $result = explode(' ', $query);
        $doctors = PostModel::where('post_type', 26)->where(function ($query) use ($result) {
            foreach ($result as $search) {
                $query->where('cl_posts.post_title', 'like', '%' . $search . '%');
            }
        })->get();
        $category = PostCategoryModel::where('post_type', 26)->get();

        return view('themes.default.search_results', compact('doctors', 'category'));
    }

    public function appointment(Request $request)
    {
        if ($request->isMethod('get')) {
            $uri = $request->uri;
            if (!$uri) {
                $doctor = PostModel::where('post_type', 29)->get();
                $category = PostCategoryModel::where('post_type', 29)->get();

                return view('themes.default.appointment', compact('doctor', 'category'));
            } else {
                $find = PostModel::where('uri', $uri)->first();
                $cat = PostCategoryModel::where('id', $find->post_category)->first();
                return view('themes.default.single-appointment', compact('find', 'cat'));
            }
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'full_name' => 'required',
                'contact' => 'required',
                'h-captcha-response' => 'required|HCaptcha',
            ]);

            $create = Appointment::create($request->all());

            if ($create) {

                return back()->with('message', 'Appointment booked successfully');
            }
        }
    }

    public function members()
    {
        $data = MembershipModel::get();
        return response()->json($data);
    }
}
