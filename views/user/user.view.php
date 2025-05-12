<?php require base_path('views/components/header.php'); ?>
<?php require base_path('views/components/nav.php'); ?>
<?php require base_path('views/components/banner.php'); ?>

<main class="flex-1 p-4 h-screen">
	<div class="max-w-7xl mx-auto space-y-4">


		<!-- Toast Container -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div id="toast" class="fixed top-4 right-4 z-50 bg-[#B3EAD0] border border-[#2E9A6E] text-[#2E9A6E] rounded shadow-lg text-sm transition-all duration-300">
				<div class="flex items-center justify-between gap-x-4 px-4 py-2  w-auto">
					<p><?= $_SESSION['success'] ?></p>
					<button class="cursor-pointer" id="close-toaster-btn">
						<img src="/images/xmark-success.svg" class="w-3 h-3 hover:w-4 hover:h-4" alt="">
					</button>
				</div>
			</div>
			<?php unset($_SESSION['success']); ?>
		<?php endif; ?>

		<div class="grid grid-cols-1">
			<div class="col-span-4 flex flex-col h-auto bg-white p-4 space-y-4">
				<div class="flex items-center justify-between">
					<div class="flex items-center">
						<!-- <div class="w-9 py-2 rounded-l-lg bg-[#393E46] flex items-center justify-center">
                            <img src="/images/search-solid.svg" class="h-4 w-4" alt="">
                        </div> -->
						<input type="text" id="document-search-bar" class="w-66 border border-gray-100 focus:outline-none rounded-r-lg text-sm py-1 px-2" placeholder="Search...">
					</div>
					<a href="/users/create" class="text-xs font-bold py-2 px-4 bg-[#45D4A4] text-white flex items-center space-x-2 rounded">
						<img src="images/plus-solid.svg" class="w-3 h-3" alt="">
						<p>Add User</p>
					</a>
				</div>
				<div class="overflow-x-auto">
					<table class="min-w-full text-sm text-left border border-gray-200">
						<thead class="bg-gray-100">
							<tr>
								<th class="px-4 py-2 border border-gray-200">Name</th>
								<th class="px-4 py-2 border border-gray-200">ID No.</th>
								<th class="px-4 py-2 border border-gray-200">
									<div class="flex items-center justify-center">
										Role
									</div>
								</th>
								<th class="px-4 py-2 border border-gray-200 text-center">Action</th>
							</tr>

						</thead>

						<tbody id="tbody">

							<?php if ($errors) : ?>
								<tr>
									<td colspan="4" class="text-center text-gray-300 py-2">
										<?= $errors['errors'] ?>
									</td>
								</tr>

							<?php else : ?>
								<?php foreach ($users as $user) : ?>
									<tr class="hover:bg-gray-50">
										<td class="px-4 py-2 border border-gray-200"><?= $user['username'] ?></td>
										<td class="px-4 py-2 border border-gray-200"><?= $user['id_number'] ?></td>
										<td class="px-4 py-2 border border-gray-200">
											<div class="flex items-center justify-center space-x-4">
												<div class="px-2 text-xs font-semibold <?= isAdmin($user['role']) ?> rounded-lg">
													<?= $user['role'] ?>
												</div>
											</div>
										</td>

										<td class="px-4 py-2 border border-gray-200">
											<div class="flex items-center justify-center space-x-4">
												<a class="delete-link group relative p-2 text-xs font-semibold bg-[#F4C8C8] rounded-lg cursor-pointer" data-id="<?= $user['user_id'] ?>">
													<img src="/images/trash-solid.svg" class="w-3 h-3">
													<span class="absolute -top-5 left-1/2 -translate-x-1/2 bg-[#393E46] text-white text-xs rounded py-1 px-2 opacity-0 group-hover:opacity-100 transition-opacity">
														Delete
													</span>
												</a>

												<a href="/users/edit?user_id=<?= $user['user_id'] ?>" class="group relative p-2 text-xs font-semibold bg-[#B3EAD0] rounded-lg cursor-pointer">
													<img src="/images/pen-solid.svg" class="w-3 h-3" alt="">
													<span class="absolute -top-5 left-1/2 -translate-x-1/2 bg-[#393E46] text-white text-xs rounded py-1 px-2 opacity-0 group-hover:opacity-100 transition-opacity">
														Edit
													</span>
												</a>
											</div>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php endif; ?>

						</tbody>
					</table>
				</div>
				<div id="pagination" class="flex items-center justify-between">
					<div class="flex items-center justify-center text-sm">
						<p class="text-xs">Showing <?= $_GET['page_no'] ?? 1 ?> of <?= $pages ?> pages</p>
					</div>

					<div class="pagination flex space-x-2">
						<a href="?page_no=1" class="w-7 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-lg rounded-lg hover:font-semibold">&laquo;</a>

						<?php if (isset($_GET['page_no']) && $_GET['page_no'] > 1) : ?>
							<a href="?page_no=<?= $_GET['page_no'] - 1 ?>" class="w-10 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-xl rounded-lg hover:font-semibold">&#8249;</a>
						<?php else : ?>
							<a class="w-10 h-7 flex items-center cursor-default justify-center bg-gray-300 text-[#393E46] text-xl rounded-lg">&#8249;</a>
						<?php endif; ?>

						<?php if (!isset($_GET['page_no'])) : ?>
							<a href="?page_no=2" class="w-10 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-xl rounded-lg hover:font-semibold">&#8250;</a>
						<?php elseif ($_GET['page_no'] >= $pages) : ?>
							<a class="w-10 h-7 flex items-center cursor-default justify-center bg-gray-300 text-[#393E46] text-xl rounded-lg">&#8250;</a>
						<?php else : ?>
							<a href="?page_no=<?= $_GET['page_no'] + 1 ?>" class="w-10 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-xl rounded-lg hover:font-semibold">&#8250;</a>
						<?php endif; ?>

						<a href="?page_no=<?= $pages ?>" class="w-7 h-7 flex items-center justify-center bg-gray-100 text-[#393E46] text-lg rounded-lg hover:font-semibold">&raquo;</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Overlay -->
	<div id="delete-user-modal" class="hidden fixed inset-0 bg-[#393E46]/50 flex items-center justify-center z-50"> <!-- Modal Box -->
		<div class="flex flex-col items-center justify-center space-y-4 bg-white rounded-xl shadow-lg w-auto max-w-md p-6 px-12">

			<div class="flex items-center justify-center p-6 bg-[#FEDD89] rounded-[50%]">
				<img src="/images/yellow-warning.svg" class="w-10 h-10" alt="">
			</div>

			<!-- Modal Content -->
			<h2 class="text-xl font-semibold text-[#F9B908]">ARE YOU SURE?</h2>

			<hr class="text-[#F9B908] w-full">
			<p class="text-gray-500 mb-6">This will delete this user permanently.</p>

			<!-- Modal Actions -->
			<div class="flex justify-end space-x-2">
				<button id="cancel-modal-btn" class="text-sm hover:text-md bg-gray-200 cursor-pointer hover:bg-gray-300 text-[#393E46] px-4 py-2 rounded transition">Cancel</button>
				<form action="/user/delete" method="POST">
					<input id="hidden-input" type="hidden" name="user_id" value="">
					<button type="submit" class="text-sm  bg-[#2E9A6E] hover:bg-[#45D4A4] transition cursor-pointer text-white px-4 py-2 rounded">Confirm</button>
				</form>
			</div>

		</div>
	</div>
</main>

<?php require base_path('views/components/footer.php'); ?>