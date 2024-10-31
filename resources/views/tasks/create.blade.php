@extends('layouts.app')

@section('content')
    <style>
        body {
            background: linear-gradient(135deg, #ece9e6, #ffffff);
            color: #333;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0px 20px 20px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            padding: 20px;
        }
        .card-header {
            background: #00b894;
            color: #fff;
            font-weight: 500;
            text-align: center;
            padding: 1.2rem;
            font-size: 1.5rem;
        }
        .form-control {
            border-radius: 10px;
            padding: 0.75rem;
            font-size: 1rem;
        }
        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 184, 148, 0.5);
            border-color: #00b894;
        }
        .btn-success {
            background: #00b894;
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            font-weight: bold;
            font-size: 1rem;
            transition: background-color 0.3s;
        }
        .btn-success:hover {
            background: #009378;
        }
    </style>

    <div class="container d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Task</div>

                <div class="card-body">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias amet assumenda, consectetur cum dolore est eum facere inventore itaque magnam natus non, obcaecati optio placeat quaerat, quidem ratione recusandae reiciendis repudiandae sed tempore voluptas! Ad aspernatur commodi corporis itaque quos rem voluptas voluptatem? A accusamus amet autem commodi consequuntur cupiditate deserunt dicta distinctio, eaque error esse explicabo harum illo iusto laudantium maiores minus natus nobis non odit praesentium quae recusandae sequi temporibus totam ullam vero? Assumenda commodi corporis cum nisi nobis nostrum perspiciatis quo quod similique ullam? Cum in minus quaerat quia. Alias dolorum expedita fugit illo impedit iusto neque odio, quasi reprehenderit rerum suscipit voluptatem? Delectus doloremque ea magni ratione tenetur? Atque aut dolore expedita harum ipsum minus molestiae perspiciatis repudiandae sunt? Aliquam assumenda consectetur, deserunt ea excepturi fugit impedit in nisi ratione, repellendus sint soluta ullam veritatis vitae voluptas. Itaque modi molestiae obcaecati optio praesentium quam, unde ut? Aspernatur aut consequatur cupiditate dolor dolores, facilis nobis nostrum quae? Fugit ipsa praesentium voluptate! Commodi eos repellat voluptate. Alias amet, atque autem ea error fuga illum inventore, magnam molestiae optio pariatur porro quam quas reiciendis reprehenderit repudiandae sequi tempora ullam velit voluptas! Aliquid consequuntur error, iure labore officia possimus provident, quaerat quibusdam quidem quod, rem rerum sapiente tempora unde voluptatum! Earum facere odit praesentium quia quos tenetur totam. Autem blanditiis iusto libero neque possimus quidem reiciendis? Amet animi at blanditiis cum distinctio dolor doloremque eveniet fugiat, libero nesciunt nisi officiis quas quasi reiciendis saepe, sint, sit tempore temporibus. Adipisci aliquid animi aut autem commodi dolor dolore dolorum fugiat hic incidunt inventore ipsum laudantium mollitia, repudiandae sunt suscipit temporibus vero voluptate. Adipisci dolor illo inventore, itaque minus nulla veritatis. Adipisci commodi consectetur corporis dolore dolorem est, et excepturi expedita harum impedit iure magnam maiores minus neque nulla numquam odio odit placeat provident quaerat quo repellat repellendus rerum soluta, voluptatibus? Aliquam asperiores assumenda laboriosam nesciunt officia perspiciatis quia reprehenderit veniam veritatis.
        </div>
    </div>
@endsection
