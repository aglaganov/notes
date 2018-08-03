import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import Toggle from "./toggle";


class Content extends React.Component {
	render() {
		return (
			<div className="content">
				<h1>{this.props.title}</h1>
				<Toggle/>
			</div>
		);
	}
}
class About extends React.Component {
	render() {
		return (
			<div className="about">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Convallis aenean et tortor at risus viverra adipiscing at. Mauris nunc congue nisi vitae suscipit tellus mauris a diam. Turpis egestas sed tempus urna. Eget felis eget nunc lobortis mattis. Fermentum odio eu feugiat pretium nibh. Pulvinar mattis nunc sed blandit libero volutpat sed. Ipsum a arcu cursus vitae congue. Senectus et netus et malesuada fames ac turpis. Dignissim enim sit amet venenatis. Enim praesent elementum facilisis leo vel. Rhoncus urna neque viverra justo nec ultrices dui sapien eget. Ipsum dolor sit amet consectetur. Dictum at tempor commodo ullamcorper a. Morbi tincidunt ornare massa eget egestas purus viverra accumsan. Iaculis urna id volutpat lacus. Quis vel eros donec ac odio tempor orci dapibus ultrices.</p>
				<p>Pretium viverra suspendisse potenti nullam ac tortor. Accumsan tortor posuere ac ut consequat semper viverra nam. Augue eget arcu dictum varius duis at consectetur lorem donec. Aenean euismod elementum nisi quis eleifend quam. Donec adipiscing tristique risus nec. Elit sed vulputate mi sit amet mauris commodo quis. Cursus turpis massa tincidunt dui ut ornare. Vitae semper quis lectus nulla at volutpat diam ut. Urna duis convallis convallis tellus id interdum velit. Nisi quis eleifend quam adipiscing vitae proin sagittis. Sit amet facilisis magna etiam. Fermentum leo vel orci porta. Commodo odio aenean sed adipiscing diam donec. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam.</p>
				<p>Blandit massa enim nec dui nunc mattis. Dignissim enim sit amet venenatis urna cursus. Eu turpis egestas pretium aenean pharetra. Amet tellus cras adipiscing enim eu turpis egestas. Risus in hendrerit gravida rutrum quisque non tellus. Et leo duis ut diam quam nulla porttitor massa. Orci a scelerisque purus semper eget duis at tellus at. Erat pellentesque adipiscing commodo elit. Fermentum odio eu feugiat pretium nibh. Habitant morbi tristique senectus et netus. Blandit cursus risus at ultrices. Potenti nullam ac tortor vitae. Scelerisque fermentum dui faucibus in. Ut tortor pretium viverra suspendisse potenti nullam. Sed viverra tellus in hac habitasse platea dictumst.</p>
				<p>Blandit turpis cursus in hac. Sed lectus vestibulum mattis ullamcorper. Ac orci phasellus egestas tellus rutrum. Eu sem integer vitae justo eget magna. Tristique risus nec feugiat in. Felis imperdiet proin fermentum leo vel orci porta non. In dictum non consectetur a erat nam at lectus urna. Montes nascetur ridiculus mus mauris vitae ultricies. Sed id semper risus in hendrerit gravida rutrum quisque. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Amet consectetur adipiscing elit duis tristique. Diam volutpat commodo sed egestas egestas. Elit eget gravida cum sociis natoque penatibus. Ornare quam viverra orci sagittis eu volutpat odio facilisis mauris. Eget aliquet nibh praesent tristique magna. Viverra tellus in hac habitasse platea dictumst vestibulum rhoncus est. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Nec ullamcorper sit amet risus nullam. Ut enim blandit volutpat maecenas volutpat blandit. Neque gravida in fermentum et.</p>
				<p>Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo. Sollicitudin tempor id eu nisl nunc mi ipsum faucibus vitae. Ullamcorper malesuada proin libero nunc consequat. Leo in vitae turpis massa sed elementum. Orci ac auctor augue mauris. Sagittis vitae et leo duis ut diam. Sit amet volutpat consequat mauris nunc congue nisi. Velit sed ullamcorper morbi tincidunt ornare massa. Feugiat nisl pretium fusce id velit ut. Sagittis purus sit amet volutpat consequat mauris. Mattis nunc sed blandit libero. Mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan tortor.</p>
			</div>
		);
	}
}
class NavigationItem extends React.Component {
	constructor(props) {
		super(props);
		this.state = {isToggleOn: true};

		this.handleClick = this.handleClick.bind(this);
	}
	handleClick(){
		let text = "qwerty";
		console.log(text);
		ReactDOM.render(
			<About/>,
			document.querySelector('.content')
		);

	}
	render() {
		return (
			<li><a href={this.props.url} onClick={this.handleClick}>{this.props.name}</a></li>
		);
	}
}

class Navigation extends React.Component {
	render() {
		return (
			<nav className="header-nav">
				<ul>
					<NavigationItem name="Home" url="/"/>
					<NavigationItem name="About" url="#about"/>
				</ul>
			</nav>
		);
	}
}

class Header extends React.Component {
	render() {
		return (
			<header className="header">
				<div className="header-logo">Logo</div>
				<Navigation/>
			</header>
		);
	}
}


// ========================================

ReactDOM.render(
	[
		<Header/>,
		<Content title="Homepage"/>
	],
	document.getElementById('root')
);
