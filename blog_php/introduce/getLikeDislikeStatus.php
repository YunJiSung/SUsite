<?php
include "../connect/connect.php";
include "../connect/session.php";

$introId = $_GET['introId'] ?? '';
$memberId = $_SESSION['memberId'] ?? 0;

$sql = "SELECT introLike, introDislike FROM IntroLikes WHERE introId = ? AND memberId = ?";
$stmt = $connect->prepare($sql);
$stmt->bind_param("si", $introId, $memberId);
$stmt->execute();
$result = $stmt->get_result();

$likeStatus = false;
$dislikeStatus = false;

if ($row = $result->fetch_assoc()) {
    $likeStatus = $row['introLike'] == 1;
    $dislikeStatus = $row['introDislike'] == 1;
}

echo json_encode(['like' => $likeStatus, 'dislike' => $dislikeStatus]);
?>
