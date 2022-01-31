# Post Job

---

- [Description](#section-1)
- [Active Controllers](#section-1)
- [Method](#section-3)
- [View Route](#section-4)
- [Models](#section-5)

<a name="section-1"></a>

##Description
 Here I implement a form, where all employer can  create  company and they post job or vacance.</br>
 They also can accept  apply application .</br>



<a name="section-2"></a>
##Active Controllers

1.PostController.php</br>




<a name="section-3"></a>
##Method

1.`function  index()`


```php
public function index()
    {
        return view('home')->with([
            'posts' => $posts,
            'categories' => $categories,
            'topEmployers' => $topEmployers
    }
```    
  

2.` function create()` 
``` php
public function create()
    {
       .....
        return view('post.create');
    }

 ``` 

3.` function  store()` 
``` php
 public function store(Request $request)
    {
       .....
        return redirect()->back();
    }

``` 

4.` function show()`
``` php

public function show($id)
    {
        ......
        return view('post.show')->with([
            'post' => $post,
            'company' => $company,
            'similarJobs' => $similarPosts
        ]);
    }
``` 

5.` function edit()` 
``` php
 public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }
``` 

6.` function update()` 
``` php
  public function update(Request $request, $post)
    {
        .....
        return redirect()->route('post.index');
    }
``` 
7.` function destroy()` 
``` php
 public function destroy(Post $post)
    {
       .......
        return redirect()->back();
    }

``` 
8.` function requestValidate()` 
``` php
 protected function requestValidate($request)
    {
        return $request->validate([
            'job_title' => 'required|min:3',
            'job_level' => 'required',
            'vacancy_count' => 'required|int',
            'employment_type' => 'required',
            'job_location' => 'required',
            'salary' => 'required',
            'deadline' => 'required',
            'education_level' => 'required',
            'experience' => 'required',
            'skills' => 'required',
            'specifications' => 'sometimes|min:5',
        ]);
    
``` 


<a name="section-4"></a>

##View-Route

| # | Request type   | Path | Action | Route name |
| : |   :-   |  :  | : | : |
| 1 | GET | /  | index | post.index |
| 2 | GET | /job/{job}  | show | post.show |
| 3 | GET | post/create  | create | post.create |
| 4 | POST | post  | store | post.store |
| 5 | GET | post/{post}/edit  | edit | post.edit |
| 6 | PUT | post/{post}  | update | post.update |
| 7 | DELETE | post/{post}  | destroy | post.destroy |


<a name="section-5"></a>

##Models
> {success} Class get_result :  Handles the logic behind setting get result.</br>