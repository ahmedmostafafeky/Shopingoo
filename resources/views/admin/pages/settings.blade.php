@extends('admin.layout.main')
@section('content')
<div class=" container-fluid pt-4 px-4" >
    <form method="post" action="{{route('settings.update')}}"  enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Settings</h6>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="mb-3">
                    <label for="title" class="form-label">Site Title: </label>
                    <input type="text" class="form-control" id="title" name="site_title" value="{{old('site_title') ?? $settings['site_title']}}" >
                </div>
                <div class="mb-3">
                    <label for="desc">Description: </label>
                    <textarea class="form-control" placeholder="" id="desc" name="meta_description"  style="height: 150px;">{{old('meta_description')?? $settings['meta_description']}}</textarea>
                </div>
                <div class="mb-3">
                    <label for="copy">Copy Rights: </label>
                    <textarea class="form-control" placeholder="" id="copy" name="copy_rights"  style="height: 150px;">{{old('copy_rights')?? $settings['copy_rights']}}</textarea>
                </div>
                <div class="mb-3">    
                    <img src="{{asset('/storage/'.$settings['site_logo'])}}" style="width:50px; height:50px" />                  
                    <label for="logo" class="form-label">Site Logo: </label>
                    <input class="form-control" type="file" id="logo" name="site_logo" >
                </div>

                <div class="mb-3">
                    <img src="{{public_path('/storage/'.$settings['fav_icon'])}}" style="width:50px; height:50px" />
                    <label for="favicon" class="form-label">Favorite Icon:</label>
                    <input class="form-control" type="file" id="favicon" name="fav_icon">
                </div>

                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook Page:</label>
                    <input type="text" class="form-control" id="facebook" name="facebook_link" value="{{old('facebook_link') ?? $settings['facebook_link']}}">
                </div>
                <div class="mb-3">
                    <label for="twitter" class="form-label">Twitter: </label>
                    <input type="text" class="form-control" id="twitter" name="twitter_link" value="{{old('facebook_libk') ?? $settings['twitter_link']}}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" value="{{old('email') ?? $settings['email']}}">
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone: </label>
                    <input type="number" class="form-control" id="phone" name="phone" value="{{old('phone') ?? $settings['phone']}}">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address: </label>
                    <input type="text" class="form-control" id="address" name="address" value="{{old('address') ?? $settings['address']}}">
                </div>
                <button type="submit" class="btn btn-primary m-2">Update</button>
        </div>
    </form>
</div>
    
@endsection