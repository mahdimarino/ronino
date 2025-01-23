<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createBlogForm() {
        return view('dashboard.blogs.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
          'category' => 'required|string',
            'post_date' => 'required|date',
            'content' => 'required|string',
           'blog_image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);
        

        $blog = new \App\Models\Blog();
       $blog->title = $validatedData['title'];
       $blog->category = $validatedData['category'];
        $blog->post_date = $validatedData['post_date'];
        $blog->content = $validatedData['content'];


        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blogs'), $imageName); // Save the image in the public directory
            $blog->image_path = 'images/blogs/' . $imageName; // Save the image path in the database
        }
  // Save the blog to the database
        $blog->save();
       // dd($blog);

        // Redirect back with a success message
       return redirect()->route('dashboard.blogs.blog-form')->with('message', 'Blog created successfully!');
     // return ('okkkkkkkkkkkkkk');
    }

    public function update(Request $request, $id)
    
    {
        // Find the blog post by ID
        $blog = \App\Models\Blog::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'post_date' => 'required|date',
            'content' => 'required|string',
            'blog_image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Update the blog fields
        $blog->title = $validatedData['title'];
        $blog->category = $validatedData['category'];
        $blog->post_date = $validatedData['post_date'];
        $blog->content = $validatedData['content'];

        // Handle the image if it's uploaded
        if ($request->hasFile('blog_image')) {
            // Delete the old image if it exists
            if ($blog->image_path && file_exists(public_path($blog->image_path))) {
                unlink(public_path($blog->image_path));
            }

            // Save the new image
            $image = $request->file('blog_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/blogs'), $imageName);
            $blog->image_path = 'images/blogs/' . $imageName;
        }

        // Save the updated blog to the database
        $blog->save();

        // Redirect back with a success message
        return redirect()->route('dashboard.blogs.edit', $id)->with('message', 'Blog updated successfully!');
    }

    public function listBlogs()
    {
        // Fetch all blogs ordered by creation date, latest first
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        // Pass the blogs to the view
        return view('dashboard.blogs.list', compact('blogs'));
    }

    public function editBlog(int $blogId)
    {
        
        $blog = Blog::findOrFail($blogId);

      
        return view('dashboard.blogs.edit', [
            'blog' => $blog
        ]);
    }

    public function deleteBlog(Blog $blog , $id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog) {
            $blog->delete();
        }

        return back();
    }


   

}
