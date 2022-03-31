<template>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ labels.formTitle }}</div>

				<div class="card-body">
					<form
						method="POST"
						v-bind:action="routes.login"
					>
						<csrf/>
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ labels.email }}</label>

							<div class="col-md-6">
								<input
									id="email"
									type="email"
									name="email"
									v-bind:value="(oldValues.email ? oldValues.email : '')"
									required
									autocomplete="email"
									autofocus
									v-bind:class="getInputClass('email')"
								>
								<span
									v-if="hasInputError('email')"
									class="invalid-feedback"
									role="alert"
								>
                                    <strong v-for="error in errors.email">{{ error }}<br/></strong>
                                </span>
							</div>
						</div>

						<div class="form-group row">
							<label
								for="password"
								class="col-md-4 col-form-label text-md-right"
							>{{ labels.password }}</label>

							<div class="col-md-6">
								<input
									id="password"
									type="password"
									name="password"
									required
									autocomplete="current-password"
									v-bind:class="getInputClass('password')"
								>
								<span
									v-if="hasInputError('password')"
									class="invalid-feedback"
									role="alert"
								>
                                    <strong>{{ errors.password }}</strong>
                                </span>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-md-6 offset-md-4">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="remember" id="remember">
									<label class="form-check-label" for="remember">
										{{ labels.rememberMe }}
									</label>
								</div>
							</div>
						</div>

						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ labels.button }}
								</button>
								<a class="btn btn-link" v-bind:href="routes.passwordReset">
									{{ labels.passwordReset }}
								</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import Csrf from '../../components/Form/Csrf';

export default {
	name: "LoginPage",
	components: {Csrf},
	computed: {
		labels() {
			return this.$store.getters.getLoginForm.labels;
		},
		routes() {
			return this.$store.getters.getLoginForm.routes;
		},
		errors() {
			return this.$store.getters.getLoginForm.errors;
		},
		oldValues() {
			return this.$store.getters.getLoginForm.oldValues;
		},
	},
	methods: {
		getInputClass(inputName) {
			return {
				'form-control': true,
				'is-invalid': this.errors[inputName].length > 0,
			};
		},
		hasInputError(inputName) {
			return this.errors[inputName].length > 0;
		},
	},
};
</script>

<style scoped>

</style>
