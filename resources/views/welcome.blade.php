<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas DevOps - Manual Hosting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; padding-top: 50px; }
        .card-profile { max-width: 600px; margin: 0 auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); border: none; }
        .header-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 30px; border-radius: 5px 5px 0 0; }
        .avatar-placeholder { width: 100px; height: 100px; background-color: white; border-radius: 50%; margin: -50px auto 20px; border: 4px solid white; display: flex; align-items: center; justify-content: center; font-size: 40px; color: #764ba2; font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
        <div class="card card-profile">
            <div class="header-bg text-center">
                <h4>Assesment 1 SNA</h4>
                <small>Manual Hosting</small>
            </div>

            <div class="card-body text-center">
                <div class="avatar-placeholder">
                    {{ $profile ? substr($profile->name, 0, 1) : '?' }}
                </div>

                @if($is_connected && $profile)
                    <h2 class="card-title">{{ $profile->name }}</h2>
                    <p class="text-muted">{{ $profile->email }}</p> 
                    <p class="text-muted">{{ $profile->nim }}</p>
                    <hr>
                    
                    <div class="alert alert-success d-inline-block" role="alert">
                        ✅ <strong>Database Connected!</strong><br>
                        <small>These data taken from mySQL server.</small>
                    </div>


                @else
                    <h2 class="text-danger">Database Error!</h2>
                    <div class="alert alert-danger" role="alert">
                        <strong>Failed to connect:</strong> <br>
                        {{ $error_msg }}
                    </div>
                    <p>Please check you configuration.</p>
                @endif
            </div>
            
            <div class="card-footer text-muted text-center">
                Laravel v{{ Illuminate\Foundation\Application::VERSION }}
            </div>
        </div>
    </div>

</body>
</html>